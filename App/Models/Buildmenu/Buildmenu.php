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
    public $blogslug = NULL;
    public $blogitems = NULL;
    public $folders = array();

    /**
     * Buildmenu constructor.
     * @param $markdownfolder
     * @param null $blogslug
     */
    public function __construct($markdownfolder, $blogslug = null)
    {
        try{
            $this->markdownfolder = $markdownfolder;
            $this->blogslug = $blogslug;
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
            $menu = $this->listFolders($this->markdownfolder);

            if(isset($this->blogslug) && isset($menu['blog']['children'])){
                $this->blogitems = $menu['blog']['children'];
                unset($menu['blog']['children']);
            }
            $this->menu = $menu;
        }
        catch (Exception $e) {
            $this->app['monolog']->debug('Unable to build the menu:'.$e->getMessage());
        }
    }

    /**
     * let loop thru the MD folder structure
     * @param $dir
     * @return array
     */
    public function listFolders($dir)
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

    /**
     * if this is the home page menu
     * @param $menuName
     * @return bool
     */
    private function isHome($menuName){
        try{
            preg_match('/01\./s', $menuName,$matches);
            if($matches){
                return true;
            }
            return false;
        }
        catch (Exception $e) {
            $this->app['monolog']->debug('Unable to build home:'.$e->getMessage());
        }
    }

    /**
     * way to get pathName slug
     * @param $menuName
     * @return string
     */
    private function pathName($menuName){
        $menuName = strtolower(preg_replace('/[0-9][0-9]\./s', '', $menuName));
        return $menuName;
    }

    /**
     * lets cleanup the menu name
     * @param $menuName
     * @return mixed|string
     */
    private function menuName($menuName){
        $menuName = $this->pathName($menuName);
        $menuName = str_replace('-', ' ', $menuName);
        $menuName = ucfirst($menuName);

        return $menuName;
    }

}