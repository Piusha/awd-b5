<?php
/**
 * All the Utility functions that required for application
 */
namespace Lib;

class Util{

    public static function prepareURL(){
        if(isset($_REQUEST["url"])){
            $url = ltrim($_REQUEST["url"],'/');
            $url    = rtrim($url,'/');
            $url    = explode('/' ,$url);

            return $url;
        }
        return null;
        
    }


}