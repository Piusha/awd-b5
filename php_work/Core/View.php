<?php

namespace Core;

abstract class View {

    protected $layout = 'zeta';
    private $viewName;

    public function render($viewName){

        
        $this->viewName = $viewName;

        require("App/View/layout/{$this->layout}.php");
    }


    public function content(){
        echo $this->viewName ."<br/>";
        require_once "App/View/{$this->viewName}.php";
    }
}