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
            $sitedata = $app['config']['sitedata'];

            return $app['twig']->render('404.twig', array(
                'message' => $message, 'sitedata' => $sitedata,
            ));
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