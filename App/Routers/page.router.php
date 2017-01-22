<?php
/**
 * Created by PhpStorm.
 * User: theovandersluijs
 * Date: 16/01/2017
 * Time: 22:11
 */
$app->get('/{name}', function($name) use($app) {
    $sitedata = $app['config']['sitedata'];
    $sitedata['year'] = $app['year'];
    $menu = $app['menu'];

    $markDownFile = getMarkDownFile($name, $app['menu']);

    $path = $markDownFile;

    $html = new \App\Models\Markdown\Markdown();
    $html->readMarkdown($path);
    $message = $html->getHTML();

    return $app['twig']->render('page.twig', array(
                    'message' => $message,
                    'sitedata' => $sitedata,
                    'menu' => $menu));
});