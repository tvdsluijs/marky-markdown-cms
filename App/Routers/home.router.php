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
    $sitedata['url'] = "{$app['ssl']}://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $menu = $app['menu'];

    $post = new \App\Models\Markdown\Markdown('/', $app['menu']);
    $post->getMarkDownFile();
    $post->readMarkdown();
    $post->getPostMetaData();
    $metaData = $post->metaData;
    $message = $post->getHTML();

    $schema = new App\Models\SchemaOrg\SchemaOrg($metaData, $sitedata);
    $schemaorg = $schema->schemaType();

    if(empty($metaData['post_title']) || $metaData['post_title'] == '' ){
        $metaData['post_title'] = $sitedata['sitename'];
    }

    $params = array();

    $params['message']      = (isset($message)) ? $message : NULL;
    $params['sitedata']     = (isset($sitedata)) ? $sitedata : NULL;
    $params['metaData']     = (isset($metaData)) ? $metaData : NULL;
    $params['menu']         = (isset($menu)) ? $menu : NULL;
    $params['schema']       = (isset($schemaorg)) ? $schemaorg : NULL;
    $params['theme']        = (isset($app['theme'])) ? $app['theme']: NULL;
    
    return $app['twig']->render('homepage.twig', $params);
});