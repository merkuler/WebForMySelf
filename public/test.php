<?php

require 'rb.php';
$db= require '../config/config_db.php';
R::setup( $db['dsn'], $db['user'], $db['pass']);
//var_dump(R::testConnection());


// $cat = R::dispense('category');
// $cat->title= 'Категория 2';
// $id = R::store( $cat );
// var_dump($id);


// $cat = R::load('category',2);
// echo $cat->title.'<br>';
// $cat->title='Категория 3';
// R::store($cat);
// echo $cat->title.'<br>';
