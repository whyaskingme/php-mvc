<?php

require_once __DIR__ . '/../vendor/autoload.php';

use ngt\mvc\Router;
use ngt\mvc\HomeController;
use ngt\mvc\ProductController;


Router::add('GET', '/products/([0-9a-zA-z]*)/categories/([0-9a-zA-z]*)', ProductController::class, 'categories');
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET','/hello', HomeController::class, 'hello');
Router::add('GET','/world', HomeController::class, 'world');
Router::add('GET', '/about', HomeController::class, "about");

Router::run();