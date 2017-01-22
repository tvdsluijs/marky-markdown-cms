<?php
/**
 * Created by PhpStorm.
 * User: theovandersluijs
 * Date: 16/01/2017
 * Time: 21:40
 */

$app->get('/', function() use ($app) {
    $message = 'homepagessssss';
    $sitedata = $app['config']['sitedata'];
    $sitedata['year'] = $app['year'];
    $menu = $app['menu'];
    return $app['twig']->render('homepage.twig', array(
        'message' => $message,
        'sitedata' => $sitedata,
        'menu' => $menu
    ));
});