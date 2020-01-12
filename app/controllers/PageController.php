<?php

namespace app\controllers;

class PageController  extends AppController {

    public function viewAction(){
    //    debug($this->route);
    $menu = $this->menu;
    $title = 'страница';
    $this->set(compact('title','menu'));

    }
}
