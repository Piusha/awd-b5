<?php
namespace Entity;


class Department{
    private $dept_no;
    private $dept_name;


    public function getName(){
        return $this->dept_name;
    }
}