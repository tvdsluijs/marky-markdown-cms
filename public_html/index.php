<?php
/**
 * Created by PhpStorm.
 * User: theovandersluijs
 * Date: 16/01/2017
 * Time: 20:19
 */
session_start();
setlocale(LC_ALL, 'nl_NL.UTF8');
date_default_timezone_set('Europe/Amsterdam');

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// Set up models
require_once(__DIR__.'/../App/models.php');

// Register middleware
require_once(__DIR__.'/../App/middleware.php');

// Set up controllers
require_once(__DIR__.'/../App/controllers.php');

// Set up dependencies
require_once(__DIR__.'/../App/dependencies.php');
// Register routes
require_once(__DIR__.'/../App/routers.php');

$app->run();