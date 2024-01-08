<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function show(User $user){
        
        $user->posts()->create([
            'title'=>'meu primeiro post',
            'body'=>'teste',
    
        ]);
        dd($user->posts);
        return view('user', 
        [
            'user' => $user,
            'name' => 'Jon Snow',
        ]);
     }

     public function index(){
        
        $users = User::all();
        return view('users', 
    ['users' => $users,]);
     }
}

