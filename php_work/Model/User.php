<?php
namespace Model;

use Core\Model;
use Lib\ApiExecutor;
use Entity\UserEntity;

class User extends Model{

    
    private $users = [];

    public $age = 0;
    function __construct(){
        parent::__construct();
    }


    /**
     * Get Full Name 
     */
    public function getFullName(){
        echo $this->getConnection();
        return $this->firstName . ' '. $this->lastName.'<br/>';


    }

    public function addUsers($userEntity){
        $this->users[] = $userEntity;
    }

    public function getAllUsers($page =1){
        $api = new ApiExecutor();
        $apiUserData = $api->execute('https://reqres.in/api/users?page='.$page,'GET');

        if(isset($apiUserData['data'])){
            
            foreach($apiUserData['data'] as  $user){
                
                $this->users[] =  new UserEntity(
                    $user['id'],
                    $user['first_name'],
                    $user['last_name'],
                    $user['avatar']
                );
            }
            return [
                'total_pages'=>$apiUserData['total_pages'],
                'current_page'=>$apiUserData['page'],
                'users'=>$this->users
            ];

        }
        return null;
        
    }




}

