<?php
/**
 * This Core model class is for communicate with the 
 * database 
 * This Core classes can be accessed throu its namespace
 * i.e Code\ClassName::....
 */

namespace Core;

class Model{

    private $con = null;
    protected $table = null;
    function __construct(){
        $this->con = 'Connection Stablished <br/>';
    }


    /**
     * Get current opned connection
     */
    protected function getConnection(){
        return $this->con;
    }

    public function getTableName(){
        return $this->table;
    }

}