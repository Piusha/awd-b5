<?php
/**
 * This Core model class is for communicate with the 
 * database 
 * This Core classes can be accessed throu its namespace
 * i.e Code\ClassName::....
 */

namespace Core;

use Core\DB\MySql;
abstract class Model extends Mysql{
    
    protected $table = null;
    private $db = null;
    private $select = "";
    function __construct(){
        $this->db = $this->getConnection();
    }


    public function select($select = '*'){
        $this->select = $select;
        return $this;
    }

    private function prepareSelectQuery(){
        return  "SELECT  $this->select  FROM  $this->table ";
    }
    public function find(){

        $this->preapareStatement($this->prepareSelectQuery());
        return $this->fetchData();

    }


}