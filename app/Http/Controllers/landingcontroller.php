<?php

namespace App\Http\Controllers;

use App\Models\TblProduct;
use App\Models\TblUser;
use App\Models\TblContactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use DB;

class landingcontroller extends Controller
{
    public function home()
    {
        $menu=TblProduct::all();
        $user=TblUser::all();
        return view('userside/home',compact('menu','user'));
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
                    }else{
                    
                    $req->session()->put('user',$user);
                    return redirect('/menu');
                    }
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

                echo "You Are Register succeessfull";
                return redirect('/login');
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

    public function manageprofile(Request $req,$id){
        
        // $user =DB::table('tbl_users')
        //                 ->where('id',$id)->first();

            $user=TblUser::find($id);

        if($req->input('save')){
             
            $user->name=$req->get('name');
            $user->email=$req->get('email');
            $user->password=$req->get('password');
            $user->image=$req->get('image');
            
            if($req->file('image')){
                $image=$req->file('image');
                $fname=$req->file('image')->getClientOriginalName();
                $path="upload/";
                $image->move($path,$fname);
                $user->image=$fname;
            }
            $user->save();
        }
        return view('userside/manageprofile',compact('user'));
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

    public function ourchef()
    {
        return view('userside/ourchef');
    }

    public function blog()
    {
        return view('userside/blog');
    }

    public function contactus(Request $req)
    {

          if($req->input('save')){
            
                $user=new TblContactus;            
               
                $user->name=$req->input('Name');
                $user->email=$req->input('Email');
                $user->phone_num=$req->input('Phone');
                $user->message=$req->input('Message');

                $user->save();
          }
                
      
        return view('userside/contactus');
    }

    public function addcart(Request $req){

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
