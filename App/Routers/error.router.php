<?php
/**
 * Created by PhpStorm.
 * User: theovandersluijs
 * Date: 16/01/2017
 * Time: 22:07
 */
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

$app->error(function (\Exception $e, Request $request, $code) use($app) {
    switch ($code) {
        case 404:
            $message = 'Oh oh... de pagina kon niet worden gevonden!';
            $params = array();

            $params['message']      = (isset($message)) ? $message : NULL;
            $params['sitedata']     = (isset($app['config']['sitedata'])) ? $app['config']['sitedata'] : NULL;
            $params['menu']         = (isset($app['menu'])) ? $app['menu'] : NULL;
            $params['theme']        = (isset($app['theme'])) ? $app['theme']: NULL;
            $params['url']        = (isset($app['url'])) ? $app['url']: NULL;

            return $app['twig']->render('404.twig', $params);
            break;
        case 500:
            $message = 'We are sorry, but something went terribly wrong.'.'<br/>';

            $app['monolog']->debug("We've got ourselves a little problem!");
            $app['monolog']->debug("Code : {$code}");
            $app['monolog']->debug("Message :  {$e->getMessage()}");
            $app['monolog']->debug("File :  {$e->getFile()}");
            $app['monolog']->debug("Line :  {$e->getLine()}");
            break;
        default:
            $app['monolog']->debug("We've got ourselves a little problem!");
            $app['monolog']->debug("Code : {$code}");
            $app['monolog']->debug("Message :  {$e->getMessage()}");
            $app['monolog']->debug("File :  {$e->getFile()}");
            $app['monolog']->debug("Line :  {$e->getLine()}");

            $message = 'We are sorry, but something went terribly wrong.'.'<br/>';
            $message .= $e->getMessage()."<br/>";
            $message .= $e->getFile() ."<br/>";
            $message .= $e->getLine() ."<br/>";
            $message .= $e->getCode() ."<br/>";
    }

    return new Response($message);
});