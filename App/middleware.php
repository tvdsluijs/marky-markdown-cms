<?php
/**
 * Created by PhpStorm.
 * User: theovandersluijs
 * Date: 16/01/2017
 * Time: 21:27
 */

use Symfony\Component\Yaml\Yaml;
use Silex\Provider;

$app->register(new Silex\Provider\HttpFragmentServiceProvider());
$app->register(new Silex\Provider\ServiceControllerServiceProvider());


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
} catch (ParseException $e) {
    $app['monolog']->debug('Unable to parse the YAML string:'.$e->getMessage());
}

//for caching
$app->register(new Moust\Silex\Provider\CacheServiceProvider(), array(
    'cache.options' => array(
        'driver' => $app['config']['cache']['driver'],
        'cache_dir' => __DIR__.$app['config']['cache']['cache_dir']
    )
));


//let put the twig views in place!
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../App/Views',
    'twig.options'    => array(
        'cache' => __DIR__ . '/../App/Cache',
    ),
));

if(isset($app['config']['ssl']) && $app['config']['ssl']){
    $app['ssl'] = "https";
}else{
    $app['ssl'] = "http";
}

//debugging on or off!
//Silex-WebProfiler on off
if($app['config']['debug'] == true){
    $app['debug'] = true;
    $app->register(new Silex\Provider\WebProfilerServiceProvider(), array(
        'profiler.cache_dir' => __DIR__.'/../App/cache/profiler',
        'profiler.mount_prefix' => '/_profiler', // this is the default
    ));
}

if($app['cache']->fetch('menu') && $app['cache']->fetch('blogitems')) {
    $app['menu'] = $app['cache']->fetch('menu');
}else{
    $menu = new App\Models\Buildmenu\Buildmenu($app['markdownfolder'], $app['config']['sitedata']['blog-slug']);
    $menu->readMenu();
    $app['cache']->store('menu', $menu->menu, 60);

    $app['cache']->store('blogitems', $menu->blogitems, 60);
    $app['menu'] = $app['cache']->fetch('menu');
}

/**
 * get theme config file
 */
try {
    if(isset($app['config']['sitedata']['themename'])){
        $app['theme'] = Yaml::parse(file_get_contents(__DIR__."/../public_html/themes/{$app['config']['sitedata']['themename']}/theme.yml"));
    }
} catch (ParseException $e) {
    $app['monolog']->debug('Unable to parse the theme YAML string:'.$e->getMessage());
}

//set site page url
$app['url'] = "{$app['ssl']}://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

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
        echo "[ {$n} elements] ";
    }
    print_r($arg);
    echo "</pre>";
}