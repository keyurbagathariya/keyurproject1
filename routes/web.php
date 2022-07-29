<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\landingcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/Admin', function () {
    return view('Admin/home');
});
                                        // ADMINSIDE

Route::get('/Admin',[admincontroller::class,'home'])->name('Admin');
Route::get('/addproduct',[admincontroller::class,'addproduct'])->name('addproduct');
Route::post('/addproduct',[admincontroller::class,'addproduct'])->name('addproduct');

Route::get('/users',[admincontroller::class,'users'])->name('users');
Route::post('/users',[admincontroller::class,'users'])->name('users');

Route::get('/UserTable',[admincontroller::class,'UserTable'])->name('UserTable');
Route::post('/UserTable',[admincontroller::class,'UserTable'])->name('UserTable');

                                    //DELETE
Route::get('/deleteuser/{id}',[admincontroller::class,'deleteuser'])->name('deleteuser');
Route::get('/deleteproduct/{id}',[admincontroller::class,'deleteproduct'])->name('deleteproduct');

                                    //UPDATE
Route::get('/editproduct/{id}',[admincontroller::class,'editproduct'])->name('editproduct');
Route::post('/editproduct/{id}',[admincontroller::class,'editproduct'])->name('editproduct');

Route::get('/edituser/{id}',[admincontroller::class,'edituser'])->name('edituser');
Route::post('/edituser/{id}',[admincontroller::class,'edituser'])->name('edituser');




Route::get('/ProductTable',[admincontroller::class,'ProductTable'])->name('ProductTable');
Route::post('/ProductTable',[admincontroller::class,'ProductTable'])->name('ProductTable');

Route::get('/profile',[admincontroller::class,'profile'])->name('profile');
Route::get('/contact',[admincontroller::class,'contact'])->name('contact');

                                        // USERSIDE

Route::get('/',[landingcontroller::class,'home'])->name('home');
Route::get('/aboutus',[landingcontroller::class,'aboutus'])->name('aboutus');
Route::get('/blog',[landingcontroller::class,'blog'])->name('blog');
Route::get('/contactus',[landingcontroller::class,'contactus'])->name('contactus');
Route::get('/logout',[landingcontroller::class,'logout'])->name('logout');

Route::get('/login',[landingcontroller::class,'login'])->name('login');
Route::post('/login',[landingcontroller::class,'login'])->name('login');

Route::get('/menu',[landingcontroller::class,'menu'])->name('menu');

Route::get('/register',[landingcontroller::class,'register'])->name('register');
Route::post('/register',[landingcontroller::class,'register'])->name('register');

Route::get('/services',[landingcontroller::class,'services'])->name('services');
Route::get('/single',[landingcontroller::class,'single'])->name('single');

