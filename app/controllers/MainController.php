<?php

namespace app\controllers;

use app\models\Main;

class MainController extends AppController {

    public function indexAction(){
        
      $model = new Main;
      $posts =\R::findAll('post');
      $posts2 = \R::findOne('post','id =1 ');
     
      $menu = $this->menu;
      $title = 'PAGE TITLE';
  //    $this->setMeta('Главная страница','Описание страницы', 'Ключевые слова');
      $this->setMeta($posts2->title,$posts2->decription, $posts2->keywords);

      $meta = $this->meta;
      $this->set(compact('title','posts','menu','meta'));
    }

    public function testAction(){
      $this->layout='test';
    }
}
