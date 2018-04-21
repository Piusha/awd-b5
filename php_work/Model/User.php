<?php
namespace Model;
use Core\Model;

class User extends Model{

    private $firstName  = "";
    private $lastName   = "";
    protected $table = "users";

    public $age = 0;
    function __construct($_firstName = "" , $_lastName = ""){
        parent::__construct();
        $this->firstName    = $_firstName;
        $this->lastName     = $_lastName;     
    }


    /**
     * Get Full Name 
     */
    public function getFullName(){
        echo $this->getConnection();
        return $this->firstName . ' '. $this->lastName.'<br/>';


    }


}

