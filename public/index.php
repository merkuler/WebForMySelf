<?php

ini_set('display_errors', 1);
error_reporting(-1);

use vendor\core\Router;



$query = rtrim($_SERVER['QUERY_STRING'],'/');

define('WWW', __DIR__);
define('CORE',dirname( __DIR__).'/vendor/core');
define('ROOT',dirname(__DIR__));
define('LIBS',dirname(__DIR__).'/vendor/libs');
define('APP',dirname(__DIR__).'/app');
define('LAYOUT', 'default');


// require '../vendor/core/Router.php';
require '../vendor/libs/functions.php';
// require '../app/controllers/Main.php';
// require '../app/controllers/Posts.php';
// require '../app/controllers/PostsNew.php';
spl_autoload_register(function($class){
    $file= ROOT . '/' . str_replace('\\','/',$class) . '.php';
    // $file= APP."/controllers/$class.php";
    if(is_file($file)){
        require_once $file;
    }
});


Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller'=> 'Page']);

Router::add('^page/(?P<alias>[a-z-]+)$', ['controller'=> 'Page','action'=>'view']);


Router::add('^$', ['controller'=> 'Main', 'action'=> 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');



Router::dispatch($query);