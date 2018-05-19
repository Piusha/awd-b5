<?php
namespace Core;

use \Core\View;
class Controller extends View{

    protected $view = null;

    public function loadViewLayer(){
        $this->view = "View";
    }

}