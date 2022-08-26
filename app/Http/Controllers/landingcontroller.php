<?php

namespace App\Http\Controllers;

use App\Models\TblProduct;
use App\Models\TblUser;
use App\Models\TblContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use App\Mail\Mail;
use Ferdous\OtpValidator\OtpValidator;
use App\Jobs\sendmail;

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
                        return redirect('/');
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


            $validated = $req->validate([
                'email' => 'required|unique:tbl_users',

            ]);         

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

    public function confirmemail(Request $req){

        $user=new TblUser;

        if($req->input('save')){

            $checkmail=DB::table('tbl_users')->where('email',$req->input('email'))->first();

            if($checkmail){
                $no=random_int(1000000, 9999999);
                
                TblUser::where('email',$checkmail->email)->update(['password'=>$no]);

                $details=['password'=>$no];
                
                \Mail::to($checkmail->email)->send(new \App\Mail\Mail($details));

                $check=$checkmail->email;

                return redirect()->route('forgotpassword')->with(['email'=>$check]);
            }else{

                $m="Email not found";
                return view('Mail/confirmemail');
            }

        }
        return view('Mail/confirmemail',compact('user'));
    }

    public function forgotpassword(Request $req){

        $email=$req->session()->get('email');
        $checkmail=DB::table('tbl_users')->where('email',$req->input('email'))->first();
       
        if($req->input('save')){

            $otp=$req->input('otp');
            
            $verifyOtp=TblUser::where('password',$otp)->first();
            
            $verifyOtp->password=Hash::make($req->input('password'));
            
            $verifyOtp->save();

            return redirect('/login');

        }
        return view('Mail/forgotpassword');
    }

    public function sendmail(Request $req){
        $details=['name'=>'keyur'];
        $this->dispatch(new sendmail($details));
    }

    public function menu()
    {
        $menu=TblProduct::all();
        return view('userside/menu',compact('menu'));
    }

    public function contactus(Request $req)
    {

      if($req->input('save')){

        $user=new TblContact;            

        $user->name=$req->input('Name');
        $user->email=$req->input('Email');
        $user->phone_num=$req->input('Phone');
        $user->message=$req->input('Message');

        $user->save();
    }
    return view('userside/contactus');
}

public function addcart(Request $req,$id){

    if(auth::id){
        $user=auth()->user();
        $product=TblProduct::find($id);
        $cart=new TblCart;

        $cart->name=$user->name;
        $cart->phone_num=$user->mobile_no;
        $cart->address=$user->email;
        $cart->product_title=$product->productname;
        $cart->price=$product->price;
    }
    return view('userside/addcart');
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

public function services()
{
    return view('userside/services');
}

public function single()
{
    return view('userside/single');
}
}
