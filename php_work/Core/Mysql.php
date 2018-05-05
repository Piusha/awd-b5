<?php
namespace Core\DB;
use \PDO;

/**
 * Base mysql class where connect to the MySql Database
 */
abstract class MySql{



    private $conn = null;
    private $statement = null;
    /**
     * Get Mysql connection string
     */
    private static function prepareConnectionString(){
        $servername     = DB_HOST;
        $dbname         = DB_NAME;
        return "mysql:host=$servername;dbname=$dbname";
    }


    /**
     * get the connection
     */
    public function getConnection(){
        $username       = DB_USER_NAME;
        $password       = DB_PASSWORD;
        try {
            $this->conn = new PDO(self::prepareConnectionString(), $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return true;
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        return false;
    }


    /**
     * Prepare mysql statement
     * @param $query
     */
    public function preapareStatement($query){

        $this->statement = $this->conn->prepare($query); 
        $this->statement->execute();

    }
    public function fetchData(){
        $this->statement->setFetchMode(PDO::FETCH_ASSOC); 
        return $this->statement->fetchAll();
    }


}