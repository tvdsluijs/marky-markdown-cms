<?php
/**
 * Created by PhpStorm.
 * User: theovandersluijs
 * Date: 16/01/2017
 * Time: 21:27
 */

use Symfony\Component\Yaml\Yaml;

//do you nees some logging sir?
$app->register(new Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/Log/development.log',
));

//don't you think its yml that was nog called jmr :-)
//Let set some app params
try {
    $app['config'] = Yaml::parse(file_get_contents(__DIR__.'/../App/config.yml'));
    $app['markdownfolder'] = __DIR__ . $app['config']['markdownfolder'];
    $app['year'] = date('Y');
    unset($app['config']['markdownfolder']); // not needed so please go away :-)
} catch (ParseException $e) {
    $app['monolog']->debug('Unable to parse the YAML string:'.$e->getMessage());
}

//let put the twig views in place!
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../App/Views',
    'twig.options'    => array(
        'cache' => __DIR__ . '/App/Cache',
    ),
));

//debugging on or off!
if($app['config']['debug'] == true){
    $app['debug'] = true;
}

$menu = new App\Models\Buildmenu\Buildmenu($app['markdownfolder']);
$menu->readMenu();
$app['menu'] = $menu->menu;

/**
 * let's get the markdownfile
 * @param $name
 * @param $menu
 * @return string
 */
function getMarkDownFile($name, $menu){
    try {
        $markdownPath = loopMenu($name, $menu);
        return $markdownPath['markDownPath'].'/item.md';
    }
    catch (Exception $e) {
        $this->app['monolog']->debug('Unable to get item.md:'.$e->getMessage());
    }
}

/**
 * loop thru menu items and give me back the markdown path
 * @param $name
 * @param $menu
 * @return mixed
 */
function loopMenu($name, $menu){
    try {
        foreach($menu as $key => $m){
            if($name == $key){
                return $m;
                break;
            }else{
                if(isset($m['children'])){
                  if($p = loopMenu($name, $m['children'])){
                      return $p;
                  };
                }
            }
        }
    }
    catch (Exception $e) {
        $this->app['monolog']->debug('Unable to loop menu:'.$e->getMessage());
    }

}

/**
 * Like a var dump but better for arrays
 * @param $arg
 * @param string $title
 */
function print_pre($arg, $title = '')
{
    $bt = debug_backtrace();
    $file = $bt[0]['file'];
    $line = $bt[0]['line'];
    echo "<pre>[$file:$line]\n";
    if ($title) {
        echo "$title:";
    }
    if (is_array($arg)) {
        $n = count($arg);
        echo "[$n elements] ";
    }
    print_r($arg);
    echo "</pre>";
}