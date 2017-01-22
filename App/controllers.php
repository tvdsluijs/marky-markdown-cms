<?php
/**
 * Created by PhpStorm.
 * User: theovandersluijs
 * Date: 24/07/16
 * Time: 17:27
 */

try{
    // Automatically load router files
    $controllers = glob(__DIR__.'/Controllers/*/*.php');
    foreach ($controllers as $controller) {
        require $controller;
    }
} catch (Exception $e) {
    $this->ci['logger']->error($e->getMessage());
}