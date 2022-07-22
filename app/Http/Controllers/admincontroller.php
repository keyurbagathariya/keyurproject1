<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function home()
    {
        return view('Admin/home');
    }

    
    public function contact()
    {
        return view('Admin/contact');
    }

    
    public function menu()
    {
        return view('Admin/menu');
    }

    
    public function ProductTable()
    {
        return view('Admin/ProductTable');
    }

    
    public function profile()
    {
        return view('Admin/profile');
    }

    
    public function users()
    {
        return view('Admin/users');
    }

    
    public function UserTable()
    {
        return view('Admin/UserTable');
    }
}
