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
    private $select = null;
    private $entity = null;
    private $where = null;
    private $insertData = null;
    function __construct(){
        $this->db = $this->getConnection();
    }


    public function select($select = '*'){
        $this->select = $select;
        return $this;
    }

    public function setEntity($entity){
        $this->entity = $entity;
        return $this;
    }
    public function where($where = null){
        if($where != null){
            $this->where = "WHERE {$where}";
        }
        
        return $this;
    }

    public function setInsertData($data = []){
        
        echo "<pre/>";
       
        $_inQ = '';
        foreach($data as $key=>$inData){

            $_inQ.= "`$key`={$inData} ,";
        }
        $this->insertData = rtrim($_inQ,',');

       echo $this->insertData ; die;
        return $this;


    }

    private function prepareSelectQuery(){
        $query =  "SELECT  
                {$this->select}  FROM  
                {$this->table} {$this->where}";

        return $query;

    }

    private function prepareInsertQuery(){
        $query = "INSERT INTO {$this->table} VALUES ({$this->insertData})";
        return $query;

        
    }
    public function find(){

        $this->preapareStatement($this->prepareSelectQuery());
        return $this->fetchData($this->entity);

    }

    public function save(){
        $this->preapareStatement($this->prepareInsertQuery());
        return $this->fetchData($this->entity);
    }


}