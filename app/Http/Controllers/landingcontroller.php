<?php

namespace App\Http\Controllers;

use App\Models\TblProduct;
use App\Models\TblUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class landingcontroller extends Controller
{
    public function home()
    {
        $menu=TblProduct::all();
        return view('userside/home',compact('menu'));
    }

    public function login(Request $req)
    {
        if($req->input('login')){
            $email=$req->input('email');
            $password=$req->input('password');
            $user=TblUser::where('email',$email)->first();

            if($user){
                if(Hash::check($password,$user->password)){
                    
                    if($user->roleid == 2){
                        echo"WELCOME TO THIS WEBSITE";
                        $req->session()->put('admin',$user);
                        return redirect('/Admin');
                    }
                }else{
                    
                    $req->session()->put('user',$user);
                    return redirect('/menu');
                }
            }
        }
        return view('userside/login');
    }

    
    function register(Request $req)
    {
        if($req->input('register')){
            
                $user=new TblUser;            
               
                $user->name=$req->input('name');
                $user->email=$req->input('email');
                $user->password=Hash::make($req->input('password'));
                $user->roleid=1;

                if($req->file('image')){
                    $img=$req->file('image');
                    $fname=$req->file('image')->getClientOriginalName();
                    $path="upload/";
                    $img->move($path,$fname);
                    $user->image=$fname;
                    
               }
                $user->save();

                return redirect('/');
        }
        return view('userside/register');
    }

    public function logout(Request $req)
    {
        if($req->session()->has('user')){
            $req->session()->forget('user');
            return redirect('/');
        }else{
            
        }

    }
    public function menu()
    {
        $menu=TblProduct::all();
        return view('userside/menu',compact('menu'));
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


    public function services()
    {
        return view('userside/services');
    }

    public function single()
    {
        return view('userside/single');
    }
}
