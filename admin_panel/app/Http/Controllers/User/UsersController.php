<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class UsersController extends Controller
{
    //
    public function index(){
        
        $users = User::all();
        return view('pages.user.index')->with('users',$users);
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
}
