<?php
namespace Lib;

class AutloLoader{

    private static $omitedFiles = ['.','..'];

    /**
     * Load Models 
     *
     * @return void
     */
    public static function requires($path){
        $files = scandir($path);
        foreach($files as $file){

            if(!in_array($file,AutloLoader::$omitedFiles)){
               $fileName = $path."/".$file;
               require_once $fileName;
            }
        }
    }



}