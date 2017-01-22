<?php
/**
 * Created by PhpStorm.
 * User: theovandersluijs
 * Date: 16/01/2017
 * Time: 21:09
 */
namespace App\Models\Markdown;

use Parsedown;

class Markdown
{
    public $markdown = null;


    public function readMarkdown($path){
        try {
            $file = fopen($path, "r");
            $this->markdown = fread($file,filesize($path));
            fclose($file);
        }
        catch (Exception $e) {
            $this->app['monolog']->debug('Unable to open file:'.$e->getMessage());
        }

    }

    public function getHTML(){
        try{
            $Parsedown = new Parsedown();
            return $Parsedown->text($this->markdown);
        }
        catch (Exception $e) {
            $this->app['monolog']->debug('Unable to parse markdown:'.$e->getMessage());
        }
    }

}