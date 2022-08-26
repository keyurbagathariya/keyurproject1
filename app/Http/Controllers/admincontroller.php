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
    
    public function editprofile(Request $req){

         // $user=TblUser::
        $admin= new TblUser();
        if($req->input('save')){
            
            $admin->name=$req->get('name');
            $admin->email=$req->get('email');
            $admin->password=$req->get('password');
            $admin->image=$req->get('image');

            if($req->file('image')){
                $image=$req->file('image');
                $fname=$req->file('image')->getClientOriginalName();
                $path="upload/";
                $image->move($path,$fname);
                $product->image=$fname;
            }
            $admin->save();
        }

        return view('Admin/editprofile',compact('admin'));
    }

    public function changepassword(Request $req){
        return view('Admin/changepassword');
    }



                    //INSERT

    public function addproduct(Request $req)
    {
        
        if($req->input('save')){
           $product=new TblProduct();
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
