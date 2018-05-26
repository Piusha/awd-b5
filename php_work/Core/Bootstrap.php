<?php

/**
 * top layer of the MVC application
 */
namespace Core;

use \Lib\Util;

class Bootstrap {


    private static $cntrllFileLocation = 'App/Controller';
    function __construct(){

        $url = Util::prepareURL();

        if($url == null){
            $controller = $this->loadController('Home');
            $controller->index();
        }
        if(isset($url[0])){
            //Check is file exist
            $controller = $this->loadController($url[0]);
             //$c->loadViewLayer();
            $this->invokeControllerAction($controller,$url);
        }

    }
    /**
     * Load Controller 
     *
     * @param [type] $fileName
     * @return void
     */
    private function loadController($fileName){
        $strControllerName = "{$fileName}Controller";
        $fileName   = ucwords($strControllerName);
        $cntrllFileName = Bootstrap::$cntrllFileLocation.'/'.$fileName.'.php';
        if(file_exists($cntrllFileName)){
            require_once $cntrllFileName;
            $className = "\Controller\\".$fileName;
            return  new $className;
           

        }else{

            echo "Controller file not found";
            exit;
        }
    }
    /**
     * Invoke Controller actions
     *
     * @param [type] $controller
     * @param [type] $url
     * @return void
     */
    public function invokeControllerAction($controller,$url){


        //Check for the 2nd parameter
        // We assumed that is for URL parameter

        
        if(isset($url[1])){

            $actionMethod = $url[1];
            if(method_exists($controller,$actionMethod)){
            
                $urlData = (isset($url[2]))?$url[2]:null;
                $controller->{$actionMethod}($urlData);
            }else{
                $this->error404();
            }
            //
        }else{

            $controller->index();
        }

    }

    public function error404(){
        
        echo "OOPs Page not found";
    }
    


}