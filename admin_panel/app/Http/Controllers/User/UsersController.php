<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Repositories\User\UserInterface;
class UsersController extends Controller
{


    private $user = null;
    function __construct(UserInterface $user){
        $this->user = $user;

    }

    //
    public function index(){
        
        
        return view('pages.user.index');
    }
 
    public function loginView(){
        return view('auth.login');
    }
    
    public function getUser($id){
        $user = User::where('id',$id)->first(['name','id','email']);
        return view('pages.user.profile')->with('user',$user);
    }

    public function edit(Request $request, $id){
        $user = User::where('id',$id)->first(['name','id','email']);
        $user->name = $request->name;
        $user->save();
        return view('pages.user.profile')->with('user',$user);
        
        
        
        
    }

    public function getUsers(Request $request){


        $userId = ($request->filled('id'))?$request->id:null;
        $users =  $this->user->getUsers($userId);

        return response()->json([
            'status'=>'success',
            'users'=>$users
        ]);
    }

    public function create(Request $request ){
        return $this->user->create($request->all());
    }


    public function doLogin(Request $request ){
        
        if(!$request->filled('email')){
            return response()->json([
                'status'=>'error',
                'error'=>'Email is required'
            ]);
        }
        if(!$request->filled('password')){
            return response()->json([
                'status'=>'error',
                'error'=>'Password is required'
            ]);
        }

        $user = $this->user->getUserByEmail($request->email);

        if(!$user){
            return response()->json([
                'status'=>'error',
                'error'=>'Cannot find user from the system'
            ]);
        }

        //Create Token
        $token = $this->user->generateToken($user->id);
        $user->token = $token;

        return response()->json([
            'status'=>'success',
            'user'=>$user
        ]);

    }

}
