<?php

/**
 * Created by PhpStorm.
 * User: theovandersluijs
 * Date: 12/02/2017
 * Time: 11:28
 */

namespace App\Models\SchemaOrg;

use Spatie\SchemaOrg\Schema;

class SchemaOrg
{

    public $metaData = null;
    public $sitedata = null;
    public $year = null;
    public $date = null;

    public function __construct($metaData = null, $app = null){
        $this->metaData = (isset($app['metaData'])) ? $app['metaData'] : null ;
        $this->sitedata = (isset($app['sitedata'])) ? $app['metaData'] : null ;

        $this->year = (isset($this->metaData['post_published_date'])) ? date('Y', strtotime($this->metaData['post_published_date'])) : NULL ;
        $this->date = (isset($this->metaData['post_published_date'])) ? date('Y-m-d',strtotime($this->metaData['post_published_date'])) : NULL ;
    }

    public function schemaType(){
        if(isset($this->metaData['post_type'])){
            $script = "";
            switch ($this->metaData['post_type']){
                case 'website':
                    $website =  $this->website();
                    return $website->toScript();
                    //WebSite
                    break;
                case 'page':
                    $webpage = $this->webpage();
                    return $webpage->toScript();
                    //ContactPage
                    break;
                case 'blog':
                    //BlogPosting
                    break;
                case 'about':
                    //AboutPage
                    //https://schema.org/AboutPage
                    break;
                case 'contact':
                    //ContactPage
                    //https://schema.org/ContactPage
                    break;
                case 'business':
                    //LocalBusiness
                    break;
                case 'article':
                    //Article
                    //https://schema.org/Article
                    break;
                default:
                    break;
            }
            return $script;
        }
    }


    private function person(){
        $person = Schema::person();
        if(isset($this->metaData['post_author'])){
            $author = $this->metaData['post_author'];
            $person->email($author['author_email']);
            $person->name($author['author_name']);
            $person->image($author['author_gavatar']);
        }
        return $person;
    }

    private function webpage(){
        $webpage = Schema::webPage();
        $webpage->url($this->sitedata['url']);

        $webpage->copyrightYear($this->year);

        $person = $this->person();
        $webpage->author($person);

        //$webpage->breadcrumb()
        $webpage->dateCreated($this->date);
        $webpage->image($this->metaData['post_image']);

        return $webpage;
    }

    private function website(){

        $website = Schema::webSite();
        $website->name($this->metaData['post_title']);
        $website->description($this->metaData['post_intro']);
        $website->image($this->metaData['post_image']);
        $website->url($this->sitedata['url']);
        $website->copyrightYear(date('Y'));

        $person = $this->person();
        $website->author($person);

        return $website;
        /**
         *     [post_title] => post_sub This is a Subtitle
        [post_intro] => bla bla bla about this post
        [post_image] => 3.jpg
        [post_square_image] => square_image_name.jpg
        [post_author] => App\Models\Author\Author Object
        (
        [author] => Array
        (
        [author_name] => author1
        [author_email] => author@authors.com
        [author_about] => This is about me! And not YOU!
        [author_location] => Wolphaartsdijk, The Silicon Valley of The South, NL
        [author_twitter] =>
        [author_facebook] =>
        [author_instagram] =>
        [author_url] => /author/author1
        [author_blog] =>
        [handle] => author1
        [_found] => 1
        [author_gavatar] => http://avatars.io/gravatar/author@authors.com?size=medium
        )

        [author_options:App\Models\Author\Author:private] => Array
        (
        [posts] => 1
        )

        [author_id:App\Models\Author\Author:private] => author1
        )

        [post_twitter] => Post Author Twitter Handle (e.g. "author1")
        [post_published_date] => Publish Date in YYYY/MM/DD Format (e.g. "2013/04/28")
        [post_categories] => Post Categories (e.g. "Tech, Photography, Gadgets")
        [post_status] => Post Status (e.g. "published" or "draft")
        [post_comments] => false
        [post_type] => website
         */

    }

}