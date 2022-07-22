<?php

namespace App\Http\Controllers;

use App\Models\db_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class landingcontroller extends Controller
{
    public function home()
    {
        return view('userside/home');
    }

    public function aboutus()
    {
        return view('userside/aboutus');
    }

    public function blog()
    {
        return view('userside/blog');
    }

    public function contactus()
    {
        return view('userside/contactus');
    }

    // public function login(Request,$req)
    // {
    //     if($req->input('login')){
    //         $email=$req->input('email');
    //         $password=$req->input('password');
    //         $user=db_user::where('email',$email)->first();

    //         if($user){
    //             if(Hash::check($password,$user->$password)){
    //                 if($user->role_id == 2){
    //                     echo"WELCOME TO THIS WEBSITE";
    //                     $req->session()->put('user',$user);
    //                     return redirect('/');
    //                 }
    //             }else{
    //                 echo "THIS IS ADMIN SIDE";
    //             }
    //         }
    //     }
    //     return view('userside/login');
    // }

    public function login(){
        return view('userside/login');
    }

    public function menu()
    {
        return view('userside/menu');
    }

    public function register()
    {
        return view('userside/register');
    }

    public function services()
    {
        return view('userside/services');
    }

    public function single()
    {
        return view('userside/single');
    }
}
