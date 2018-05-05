<?php
namespace Model;

use Core\Model;
class Department extends Model{


    protected $table = "departments";
    function __construct(){
        parent::__construct();
    }
    public function getAllDepartments(){
        return $this->select('*')->find();
    }
}