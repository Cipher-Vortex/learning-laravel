<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register(){
    // return dd(request()->all());
    return view('auth/register');   
     }
    public function store(){
        //    return dd(request()->all());
        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);
   
        }
    public function login(){
        return view('auth.login');
    }
    

    public function logout(){
        return view('auth.logout');
    }

}
