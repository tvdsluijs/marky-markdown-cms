<?php
/**
 * Created by PhpStorm.
 * User: theovandersluijs
 * Date: 16/01/2017
 * Time: 21:09
 */
namespace App\Models\Markdown;

use App\Models\Author\Author;
use Parsedown;

class Markdown
{
    public $markdown = null;
    public $metaData = array();
    public $markdownPathFile = null;

    private $rawMetaData = null;
    private $post_title = null;
    private $post_intro = null;
    private $post_image = null;
    private $post_square_image = null;
    private $post_author = null;
    private $post_twitter = null;
    private $post_published_date = null;
    private $post_categories = null;
    private $post_status = null;
    private $post_type = null;

    private $name = null;
    private $menu = null;

    public function __construct($name = null, $menu = null){
        $this->name = $name;
        $this->menu = $menu;
    }

    /**
     * let's get the markdownfile
     * @param $name
     * @param $menu
     * @return string
     */
    public function getMarkDownFile(){
        try {
            $markdownPath = loopMenu($this->name, $this->menu);
            $this->markdownPathFile = $markdownPath['markDownPath'].'/item.md';
        }
        catch (Exception $e) {
            $this->app['monolog']->debug('Unable to get item.md:'.$e->getMessage());
        }
    }

    /**
     * let's get the markdownfiles
     * @param $name
     * @param $menu
     * @return string
     */
    public function getMarkDownFiles(){
        try {
            $markdownPath = loopMenu($this->name, $this->menu);

            $this->markdownPathFile = $markdownPath['markDownPath'];
            if($handle = opendir($this->markdownPathFile)) {
                while (false !== ($entry = readdir($handle))) {
                    if (substr(strrchr($entry, '.'), 1) == ltrim('.md', '.')) {

                        print_pre($entry);
//                        $this->markdownPathFile = file($this->markdownPathFile."/".$entry);
//                        $posts[] = $this->markdown;
                    }
                }

//                print_pre($posts);

            }
        }
        catch (Exception $e) {
            $this->app['monolog']->debug('Unable to get item.md:'.$e->getMessage());
        }
    }

    /**
     * read out the file
     * @param $path
     */
    public function readMarkdown(){
        try {
            if(isset($this->markdownPathFile)) {

                //no file... return false
                if (!file_exists($this->markdownPathFile)) {
                    return false;
                }
                $file = fopen($this->markdownPathFile, "r");
                $fileContent = fread($file, filesize($this->markdownPathFile));

                $pattern = '/(\#\-[\s\S]*?\-\#)/';
                $pattern2 = '/(title[\s\S]*?post_type.*)/';
                if(preg_match($pattern, $fileContent, $matches)){
                    $this->markdown = preg_replace($pattern, '', $fileContent);
                    preg_match($pattern, $fileContent,$this->rawMetaData);
                }elseif(preg_match($pattern2, $fileContent, $matches)){
                    $this->markdown = preg_replace($pattern2, '', $fileContent);
                    preg_match($pattern2, $fileContent,$this->rawMetaData);
                }

                fclose($file);
                return true;
            }else{
                throw new Exception('No Markdown file!.');
            }
        }
        catch (Exception $e) {
            $this->app['monolog']->debug('Unable to open file:'.$e->getMessage());
        }

    }

    /**
     * parse the HTML
     * @return string
     */
    public function getHTML(){
        try{
            $Parsedown = new Parsedown();
            return $Parsedown->text($this->markdown);
        }
        catch (Exception $e) {
            $this->app['monolog']->debug('Unable to parse markdown:'.$e->getMessage());
        }
    }


    function getFirstHTMLParagraph($count = 10, $title = null) {
        $Parsedown = new Parsedown();
        $text =  $Parsedown->text($this->markdown);
        $text = strip_tags($text);
        if(isset($title)) {
            $text = str_replace($title, "filler ", $text);
        }
        preg_match("/(?:[^\s,\.;\?\!]+(?:[\s,\.;\?\!]+|$)){0,$count}/", $text, $matches);
        $text = str_replace("filler ", "", $matches[0]);
        return $text;
    }

    /**
     * get the Meta Data from the markdown file
     * with a lot of funky regex stuff
     * put it in some vars
     */
    public function getPostMetaData(){
        try {
            if(isset($this->rawMetaData[1])){

                $metaData = $this->rawMetaData[1];
                $matches = explode("\n",$metaData);

                foreach($matches as $match){

                    //no need to process empty shizzle
                    if(empty($match) || $match == ''){
                        continue;
                    }

//link: http://vandersluijs.nl/blog/2002/02/canon-g3-eindelijk-een-digitale-camera.html
//post_id: 208
//created: 2002/02/21 15:54:00
//created_gmt: 2002/02/21 15:54:00
//post_name: canon-g3-eindelijk-een-digitale-camera

                    switch ($match) {
                        case (preg_match('/post_title\s*:/', $match) ? true : false) :
                            $this->metaData['post_title'] =
                            $this->post_title = trim(preg_replace('/post_title\s*:/', '', $match));
                            break;
                        case (preg_match('/^title\s*:/', $match) ? true : false) :
                            $this->metaData['post_title'] =
                            $this->post_title = trim(preg_replace('/^title\s*:/', '', $match));
                            break;
                        case (preg_match('/post_title\s*:/', $match) ? true : false) :
                            $this->metaData['post_title'] =
                            $this->post_title = trim(preg_replace('/post_title\s*:/', '', $match));
                            break;
                        case (preg_match('/post_author\s*:/', $match) ? true : false) :
                            $author = trim(preg_replace('/post_author\s*:/', '', $match));
                            $author = new Author($author);
                            //get the author informations
                            $this->metaData['post_author'] = $this->post_author =
                                (isset($author->author)) ? $author->author : null;
                            break;
                        case (preg_match('/author\s*:/', $match) ? true : false) :
                            $author = trim(preg_replace('/author\s*:/', '', $match));
                            $author = new Author($author);
                            //get the author informations
                            $this->metaData['post_author'] = $this->post_author =
                                (isset($author->author)) ? $author->author : null;

                            break;
                        case (preg_match('/post_intro\s*:/', $match) ? true : false) :
                            $this->metaData['post_intro'] =
                            $this->post_intro = htmlspecialchars(trim(preg_replace('/post_intro\s*:/', '', $match)));
                            break;
                        case (preg_match('/description\s*:/', $match) ? true : false) :
                            $this->metaData['post_intro'] =
                            $this->post_intro = htmlspecialchars(trim(preg_replace('/description\s*:/', '', $match)));
                            break;
                        case (preg_match('/post_image\s*:/', $match) ? true : false) :
                            $this->metaData['post_image'] =
                            $this->post_image = trim(preg_replace('/post_image\s*:/', '', $match));
                            break;
                        case (preg_match('/post_square_image\s*:/', $match) ? true : false) :
                            $this->metaData['post_square_image'] =
                            $this->post_square_image = trim(preg_replace('/post_square_image\s*:/', '', $match));
                            break;
                        case (preg_match('/post_twitter\s*:/', $match) ? true : false) :
                            $this->metaData['post_twitter'] =
                            $this->post_twitter = trim(preg_replace('/post_twitter\s*:/', '', $match));
                            break;
                        case (preg_match('/post_comments\s*:/', $match) ? true : false) :
                            $this->metaData['post_comments'] =
                            $this->post_twitter = trim(preg_replace('/post_comments\s*:/', '', $match));
                            break;
                        case (preg_match('/comment_status\s*:/', $match) ? true : false) :
                            $this->metaData['post_comments'] =
                            $this->post_twitter = trim(preg_replace('/comment_status\s*:/', '', $match));
                            break;
                        case (preg_match('/post_publish_date\s*:/', $match) ? true : false) :
                            $this->metaData['post_published_date'] =
                            $this->post_published_date = trim(preg_replace('/post_publish_date\s*:/', '', $match));
                            break;
                        case (preg_match('/post_created\s*:/', $match) ? true : false) :
                            $this->metaData['post_published_date'] =
                            $this->post_published_date = trim(preg_replace('/post_created\s*:/', '', $match));
                            break;
                        case (preg_match('/^created\s*:/', $match) ? true : false) :
                            $this->metaData['post_published_date'] =
                            $this->post_published_date = trim(preg_replace('/^created\s*:/', '', $match));
                            break;
                        case (preg_match('/post_categories\s*:/', $match) ? true : false) :
                            $this->metaData['post_categories'] =
                            $this->post_categories = trim(preg_replace('/post_categories\s*:/', '', $match));
                            break;
                        case (preg_match('/post_status\s*:/', $match) ? true : false) :
                            $this->metaData['post_status'] =
                            $this->post_status = trim(preg_replace('/post_status\s*:/', '', $match));
                            break;
                        case (preg_match('/status\s*:/', $match) ? true : false) :
                            $this->metaData['post_status'] =
                            $this->post_status = trim(preg_replace('/status\s*:/', '', $match));
                            break;
                        case (preg_match('/post_type\s*:/', $match) ? true : false) :
                            $this->metaData['post_type'] =
                            $this->post_type = trim(preg_replace('/post_type\s*:/', '', $match));
                            break;
                        case (preg_match('/post_contact_form\s*:/', $match) ? true : false) :
                            $this->metaData['post_contact_form'] =
                            $this->post_title = trim(preg_replace('/post_contact_form\s*:/', '', $match));
                            break;
                        default:
                            break;
                    }
                }
            }

        }
        catch (Exception $e) {
            $this->app['monolog']->debug('Unable to get item.md:'.$e->getMessage());
        }

//            // Get the post author.
//            $post_author = get_author(str_replace(array("\n", '-'), '', $fcontents[1]));
//            // Get the published date.
//            $published_iso_date = str_replace('-', '', $fcontents[3]);
//            // Generate the published date.
//            $metaData['published_date'] = date_format(date_create($published_iso_date), $date_format);
//
//            // Get the post categories.
//            $post_categories = explode(',', str_replace(array("\n", '-'), '', $fcontents[4]));
//            $metaData['post_categories'] = array_map(function($el) { return trim($el); }, $post_categories);
//

    }


}