<?php
namespace App\Repositories\User;

use App\User;
use App\Models\UsersToken;
use \Exception;
use \Config;
use Illuminate\Http\Request;
use \DB;
use Illuminate\Support\Facades\Hash;
class UserRepository implements UserInterface{

    public function create($user = []){
        return User::create([
            'name' => $user['name'],
            'email' => $user['email'],
            'password' => bcrypt($user['password']),
        ]);
    }

    public function getUsers($id = null){

        $query = DB::table('users');
        $query->select('name','email','created_at','users.id');

        if($id != null){
            $query->where('users.id','=',$id);
        }

        return $query->get();
    }

    public function getUserByEmail($email){
        $query = DB::table('users');
        $query->select('users.name','users.email','users.created_at','users.id');
      
        $query->where('users.email','=',$email);

        return $query->first();

    }

    public function generateToken($userId){

        $token = md5(uniqid(rand(), true));
       
        $userToken  = new UsersToken();
        $userToken->user_id = $userId;
        $userToken->token = $token;
        $userToken->save();
        return $token;
    }

    public function validateToken($token){
        $query = DB::table('user_tokens');
        $query->select('user_tokens.id');
      
        $query->where('user_tokens.token','=',$token);

        return $query->count();
    }
}