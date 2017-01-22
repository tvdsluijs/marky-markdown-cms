<?php
/**
 * Created by PhpStorm.
 * User: theovandersluijs
 * Date: 18/01/2017
 * Time: 07:04
 */

namespace App\Models\Buildmenu;

class Buildmenu
{

    public $menu = NULL;
    public $menuname = NULL;
    public $menuslug = NULL;
    public $menuurl = NULL;
    public $menuparent = NULL;
    public $markdownfolder = NULL;
    public $folders = array();

    public function __construct($markdownfolder)
    {
        try{
        $this->markdownfolder = $markdownfolder;
        }
        catch (Exception $e) {
            $this->app['monolog']->debug('unable to create the markdown variable:'.$e->getMessage());
        }
    }

    /**
     * menu builder
     * uses markdownfolder
     * returns array
     */
    public function readMenu(){
        try{
            $this->menu = $this->listFolders($this->markdownfolder);
        }
        catch (Exception $e) {
            $this->app['monolog']->debug('Unable to build the menu:'.$e->getMessage());
        }
    }

    function listFolders($dir)
    {
        $dh = scandir($dir);
        $return = array();

        foreach ($dh as $folder) {
            if ($folder != '.' && $folder != '..') {
                $path = $dir . '/' . $folder;
                if (is_dir($path)) {
                    if($this->isHome($folder)){
                        $pathUrl = "/";
                    }else{
                        $pathUrl = $this->pathName($folder);
                    }



                    $return[$pathUrl] = array(
                        'pathName' => $folder,
                        'menuName' => $this->menuName($folder),
                        'pathUrl' => $pathUrl,
                        'markDownPath' => $path
                    );
                        if($children = $this->listFolders($dir . '/' . $folder)){
                            $return[$pathUrl]['children'] = $children;
                        };
                }
            }
        }
        return $return;
    }

    private function isHome($menuName){
        preg_match('/01\./s', $menuName,$matches);
        if($matches){
            return true;
        }
        return false;
    }

    private function pathName($menuName){
        $menuName = preg_replace('/[0-9][0-9]\./s', '', $menuName);
        return $menuName;
    }

    private function menuName($menuName){
        $menuName = $this->pathName($menuName);
        $menuName = str_replace('-', ' ', $menuName);
        $menuName = ucfirst($menuName);

        return $menuName;
    }

}