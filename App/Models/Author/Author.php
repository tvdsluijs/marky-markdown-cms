<?php
/**
 * Created by PhpStorm.
 * User: theovandersluijs
 * Date: 26/01/2017
 * Time: 21:27
 */
namespace App\Models\Author;

use Symfony\Component\Yaml\Yaml;

class Author
{
    public $author = null;

    private $author_options = array();
    private $author_id = null;

    /**
     * Author constructor.
     * @param $author_id
     * @param array $options
     */
    public function __construct($author_id, $options=array('posts' => TRUE)){
        $this->author_id = trim($author_id);
        $this->author_options = $options;
        $this->get_author();
    }


    private function get_avatar($username, $handle) {
        try{
            if((isset($username) && $username != '') && (isset($handle) && $handle != '')){
                // Pattern for avatar loading service.
                $avatar_service_pat = "http://avatars.io/{$handle}/{$username}?size=medium";

                // Return the image URL.
                return $avatar_service_pat;
            }
        }catch (Exception $e) {
            $this->app['monolog']->debug('We have a avatar problem:'.$e->getMessage());
        }
    }

    /**
     * get the author information
     * @param $author_id
     * @param array $options
     * @return array
     */
    function get_author(){
        try {
            //$author_id, $options=array('posts' => TRUE)
            if (isset($this->author_id)) {
                $author_file = __DIR__.'/../../Authors/'.$this->author_id.'.yml';
                if (file_exists($author_file)) {
                    $this->author = Yaml::parse(file_get_contents($author_file));
                    $this->author['handle'] = $this->author_id;
                    $this->author['_found'] = true;

                    $this->author['author_url'] = "/author/".$this->author_id;

                    if (isset($this->author['author_email']) && $this->author['author_email'] != '') {
                        $this->author['author_gavatar'] =  $this->get_avatar($this->author['author_email'], "gravatar");
                    }

                    if(isset($this->author['author_twitter']) && $this->author['author_twitter'] != ''){
                        $this->author['twitter_avatar'] = $this->get_avatar($this->author['get_avatar'], "twitter");
                    }
                    if(isset($this->author['author_facebook']) && $this->author['author_facebook'] != ''){
                        $this->author['facebook_avatar'] = $this->get_avatar($this->author['author_facebook'], "facebook");
                    }

                    if(isset($this->author['author_instagram']) && $this->author['author_instagram'] != ''){
                        $this->author['instagram_avatar'] = $this->get_avatar($this->author['author_instagram'], "instagram");
                    }

//lets build this a bit later!!!
//        if($options["posts"]){
//            $author_posts = array();
//            foreach(get_all_posts() as $post){
//                if(trim($post['post_author']) == $this->author_id){
//
//                    $post['url'] = BLOG_URL.$blog_url.str_replace(array(FILE_EXT, POSTS_DIR), '', $post['fname']);
//                    $post['post_category_link'] = BLOG_URL.'category/'.urlencode(trim(strtolower($post['post_category'])));
//                    array_push($author_posts, $post);
//                }
//            }
//
//            $author['posts'] = $author_posts;
//        }

                }
            }
            return $this->author;
        }catch (Exception $e) {
                $this->app['monolog']->debug('We have a author problem:'.$e->getMessage());
        }
    }
}