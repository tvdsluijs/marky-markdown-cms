<?php
/**
 * Created by PhpStorm.
 * User: theovandersluijs
 * Date: 07/07/16
 * Time: 06:22
 */

try{
    // Automatically load router files
    $routers = glob(__DIR__.'/Routers/*.router.php');
    foreach ($routers as $router) {
        require $router;
    }
} catch (Exception $e) {
    $this->ci['logger']->error($e->getMessage());
}