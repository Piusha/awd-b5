<?php

/**
 * top layer of the MVC application
 */
namespace Core;


class Bootstrap {


    function __construct(){

    
        $url    = isset($_GET["url"]) ? $_GET["url"] : null;
        $url    = rtrim($url,'/');
        $url    = explode('/' ,$url);

        echo "<pre>";

        print_r($url);


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

                $c->index();





            }else{

                echo "Controller file not found";
            }
            
        }




    }


}