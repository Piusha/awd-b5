<?php
namespace Entity;

class UserEntity{
    public $id ;
    public $first_name;
    public $last_name;
    public $avatar;

    function __construct($id,$first_name,$last_name,$avatar){
        $this->id           = $id;
        $this->first_name   = $first_name;
        $this->last_name    = $last_name;
        $this->avatar       = $avatar;
    }

    public function getFullName(){
        return $this->first_name . ' '. $this->last_name; 
    }

}