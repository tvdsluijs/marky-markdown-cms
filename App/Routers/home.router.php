<?php
/**
 * Created by PhpStorm.
 * User: theovandersluijs
 * Date: 16/01/2017
 * Time: 21:40
 */

$app->get('/', function() use ($app) {
    $sitedata = $app['config']['sitedata'];
    $sitedata['year'] = $app['year'];
    $menu = $app['menu'];

    $markDownFile = getMarkDownFile("/", $app['menu']);

    $path = $markDownFile;

    $html = new \App\Models\Markdown\Markdown();
    $html->readMarkdown($path);
    $message = $html->getHTML();

    return $app['twig']->render('homepage.twig', array(
        'message' => $message,
        'sitedata' => $sitedata,
        'menu' => $menu
    ));
});