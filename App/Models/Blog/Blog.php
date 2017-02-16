<?php

/**
 * Created by PhpStorm.
 * User: theovandersluijs
 * Date: 08/02/2017
 * Time: 12:08
 */
namespace App\Models\Blog;
use App\Models\Markdown\Markdown;

class Blog
{
    public $blogitems = null;
    public $blogitempaths = array();


    public function __construct($blogitems)
    {
        $this->blogitems = $blogitems;
    }

    public function getBlogs($first = 0, $last = 10)
    {
        $items = array_slice($this->blogitempaths, $first, $last);

        $blogs = array();
        $md  = new Markdown();

        foreach($items as $dir){
            $dh = scandir($dir['markDownPath']);

            foreach ($dh as $folder) {
                if ($folder != '.' && $folder != '..') {
                    $path = $dir['markDownPath'].'/'.$folder;
                    if (!is_dir($path)) {
                        $md->markdownPathFile = $dir['markDownPath'].'/'.$folder;
                        $md->readMarkdown();
                        $md->getPostMetaData();
                        $blogs[$dir['key']]['title'] = $md->metaData['post_title'];
                        $blogs[$dir['key']]['text'] = $md->getFirstHTMLParagraph(100, $md->metaData['post_title']);
                    }
                }
            }
        }

        print_pre($blogs);
        die();

    }


    function get_words($sentence, $count = 10) {
        preg_match("/(?:\w+(?:\W+|$)){0,$count}/", $sentence, $matches);
        return $matches[0];
    }

    public function procesBlogsFromArray(){
        $this->getBlogsFromArray($this->blogitems);
        $this->sortBlogsArray();
    }

    public function sortBlogsArray(){
        krsort($this->blogitempaths);
    }

    public function getBlogsFromArray($items, $prefix = ''){
        $blog = array();
        foreach($items as $key => $item) {
            if(isset($item['children'])){
                $blog[] = $this->getBlogsFromArray($item['children'], $prefix . $key );
            }else{
                $this->blogitempaths[$prefix . $key]['markDownPath'] = $item['markDownPath'];
                $this->blogitempaths[$prefix . $key]['key'] = $prefix . $key;
            }
        }
        return $blog;
    }

}

//anno1975.org