<?php
/**
 * Created by PhpStorm.
 * User: theovandersluijs
 * Date: 18/10/2016
 * Time: 10:20
 */

//let's load some models
try{
    // Automatically load router files
    $models = glob(__DIR__.'/Models/*/*.php');
    foreach ($models as $model) {
        require $model;
    }
} catch (Exception $e) {
    $this->ci['logger']->error($e->getMessage());
}
