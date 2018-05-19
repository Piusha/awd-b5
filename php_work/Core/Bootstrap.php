<?php

/**
 * top layer of the MVC application
 */
namespace Core;

use \Lib\Util;

class Bootstrap {


    function __construct(){

        $url = Util::prepareURL();


        $cntrllFileLocation = 'App/Controller';


        if(isset($url[0])){
            //Check is file exist

            $fileName   = $url[0].'Controller';
            $fileName   = ucwords($fileName);


            $cntrllFileName = $cntrllFileLocation.'/'.$fileName.'.php';
            
            if(file_exists($cntrllFileName)){

                require_once $cntrllFileName;
                $className = "\Controller\\".$fileName;
                $c = new $className;
                //$c->loadViewLayer();
                $this->invokeControllerAction($c,$url);




            }else{

                echo "Controller file not found";
            }
            
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