<?php

namespace Boutik\Core;

class Controller{


    public function __construct(){
        // Session::open();
        // $this->authorize();

    }


   public function loadView(string $view, array $data=[]){
        extract($data);
        // var_dump($data);
        require_once ROOT . $view;
    }
}