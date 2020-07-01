<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;


class usercontroller extends Controller
{
    function index(){
        return view('login');
    }

    function checklogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        );

        if(Auth::attempt($user_data)){
            return redirect('login/succeslogin');
        }else{
            return back()->with('error', 'wrong login details');
        }
    }
    function succeslogin(){
        return view('succeslogin');
    }
    function logout(){
        Auth::logout();
        return redirect('/');
    }
    function store(request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $hashed = Hash::make($password);
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        DB::insert('insert into users (username,password,firstname,lastname,email) VALUES(?,?,?,?,?)', [$username,$hashed,$firstname,$lastname,$email]);
        if($request->method() == 'POST'){
            return redirect('login');
            }
        
    }
    }

