<?php
namespace Controller;

class HomeController{

    function index(){
        echo "This is index from home controller";
    }


    public function getUsers($data){
        
        echo "Found Method and  called<br/> Data = {$data}";
    }
}