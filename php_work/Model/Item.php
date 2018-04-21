<?php
namespace Model;
use Core\Model;

class Item extends Model{
    
    protected $table = "items";

    public $age = 0;
    function __construct(){
        parent::__construct();
         
    }




}

