<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function register(){
    // return dd(request()->all());
    return view('auth/register');   
     }
    public function store(Request $request){
        //    return dd(request()->all());

        // validation
$request->validate([
    'name' => 'required|min:2|max:100',
    'email' => 'required|min:6|email|unique:users,email',
    'password' => 'required',
]);
        // store user data in the database
        $user =User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);

        // log the user in
        // Auth::user( true);
        
Auth::login($user);
        // redirect to the home page
        return redirect('ideas')->with('success', 'Registration successful! You are now logged in.');
   
        }
    public function login(Request $request){
        // validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
   if (Auth::attempt([
    'email' => $request->email,
    'password' => $request->password
])) {
    return redirect('ideas')->with('success', 'Login successful!');
}

return back()->withErrors([
    'email' => 'Invalid credentials'
]);;
    }
    

    public function logout(){
        Auth::logout();
        return view('auth/login');
    }

}
