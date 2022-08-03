<?php

namespace App\Http\Controllers;

use App\Models\TblProduct;
use App\Models\TblUser;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class admincontroller extends Controller
{
    public function home()
    {
        $tbl_u=TblUser::all();
        $tbl_p=TblProduct::all();
        return view('Admin/home',compact('tbl_u','tbl_p'));
    }
 
   
    public function ProductTable(Request $req)
    {
        $tbl_p=TblProduct::all();
        return view('Admin/ProductTable',compact('tbl_p'));
    }
  
    public function UserTable(Request $req)
    {
        $tbl_u=TblUser::all();
 
        return view('Admin/UserTable',compact('tbl_u'));
    }

    public function contact(){
        return view('Admin/contact');
    }

    public function profile(){
        return view('Admin/profile');
    }


                    //INSERT

    public function addproduct(Request $req)
    {
        
        if($req->input('save')){
           
            $product->productname=$req->input('name');
            $product->price=$req->input('price');
            $product->descriptions=$req->input('description');

            if($req->file('image')){
                $img=$req->file('image');
                $fname=$req->file('image')->getClientOriginalName();
                $path="upload/";
                $img->move($path,$fname);
                $product->img=$fname;
           }
            $product->save();
        }

        return view('Admin/addproduct');
    }

    public function users(Request $req)
    {
        $u=new TblUser();

        if($req->input('save')){
           
           $u->name=$req->input('name');
            $u->email=$req->input('email');
            $u->password=$req->input('password');
            $u->image=$req->input('image');
            $u->roleid=1;
            if($req->file('file')){
                $image=$req->file('image');
                $fname=$req->file('image')->getClientOriginalName();
                $path="upload/";
                $image->move($path,$fname);
                $u->image=$fname;
           }
           $u->save();

        }

        return view('Admin/users',compact('u'));
    }
      
     
                    //UPDATE


    public function edituser(Request $req,$id){
       
        $user=TblUser::find($id);
        if($req->input('save')){
        
            $user->name=$req->get('name');
            $user->email=$req->get('email');
            $user->password=$req->get('password');
            $user->image=$req->get('image');
            
            if($req->file('image')){
                $img=$req->file('image');
                $fname=$req->file('image')->getClientOriginalName();
                $path="upload/";
                $img->move($path,$fname);
                $user->img=$fname;
            }
            $user->save();
        }
        return view('Admin/users',compact('user'));
    }

    public function editproduct(Request $req,$id){
       
        $product=TblProduct::find($id);
        if($req->input('save')){
        
            $product->productname=$req->get('name');
            $product->price=$req->get('price');
            $product->img=$req->get('image');
            $product->descriptions=$req->get('description');

            if($req->file('image')){
                $img=$req->file('image');
                $fname=$req->file('image')->getClientOriginalName();
                $path="upload/";
                $img->move($path,$fname);
                $product->img=$fname;
            }
            $product->save();
        }
        return view('Admin/addproduct',compact('product'));
    }                   

                       //DELETE

    public function deleteuser(Request $req ,$id){
        
        $tbl_u=TblUser::find($id);
        $tbl_u->delete();  

        return redirect('UserTable');
    }

    public function deleteproduct(Request $req,$id){

        $tbl_u=TblProduct::find($id);
        $tbl_u->delete();  

        return redirect('ProductTable');
    }
}
