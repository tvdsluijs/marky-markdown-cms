<?php
/**
 * Created by PhpStorm.
 * User: theovandersluijs
 * Date: 16/01/2017
 * Time: 22:11
 */
$app->get("/{$app['config']['sitedata']['blog-slug']}", function() use($app) {

    $blogs = new \App\Models\Blog\Blog($app['cache']->fetch('blogitems'));

    if($app['cache']->fetch('blogs')) {
        $blogs->blogitempaths = $app['cache']->fetch('blogs');
    }else{
        $blogs->procesBlogsFromArray();
        $app['cache']->store('blogs', $blogs->blogitempaths, 600);
    }

    $items = $blogs->getBlogs("1","10");

    print_pre($items);
    die();
    //don't show on subpage, only on homepage
    unset($app['config']['sitedata']['sitesubname']);

    $params = array();

    $params['message']      = (isset($message)) ? $message : NULL;
    $params['sitedata']     = (isset($app['config']['sitedata'])) ? $app['config']['sitedata'] : NULL;
    $params['metaData']     = (isset($metaData)) ? $metaData : NULL;
    $params['menu']         = (isset($app['menu'])) ? $app['menu'] : NULL;
    $params['schema']       = (isset($schemaorg)) ? $schemaorg : NULL;
    $params['theme']        = (isset($app['theme'])) ? $app['theme']: NULL;
    $params['url']        = (isset($app['url'])) ? $app['url']: NULL;

    return $app['twig']->render('blog.twig', $params);

});

$app->get("/{$app['config']['sitedata']['blog-slug']}/{name}", function() use($app) {
    $sitedata = $app['config']['sitedata'];
    $sitedata['year'] = $app['year'];
    $sitedata['url'] = "{$app['ssl']}://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $menu = $app['menu'];

    $html = new \App\Models\Markdown\Markdown('blog', $app['menu']);
    $metaData = $html->metaData;
    $message = $html->getHTML();

    //don't show on subpage, only on homepage
    unset($sitedata['sitesubname']);

    $params = array();

    $params['message']      = (isset($message)) ? $message : NULL;
    $params['sitedata']     = (isset($sitedata)) ? $sitedata : NULL;
    $params['metaData']     = (isset($metaData)) ? $metaData : NULL;
    $params['menu']         = (isset($menu)) ? $menu : NULL;
    $params['schema']       = (isset($schemaorg)) ? $schemaorg : NULL;
    $params['theme']        = (isset($app['theme'])) ? $app['theme']: NULL;

    return $app['twig']->render('blog.twig', $params);

});