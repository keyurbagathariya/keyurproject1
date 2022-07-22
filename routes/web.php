<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\admincontroller;
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

Route::get('users',[admincontroller::class,'users'])->name('users');

// USERSIDE
Route::get('/',[landingcontroller::class,'home'])->name('home');
Route::get('/aboutus',[landingcontroller::class,'aboutus'])->name('aboutus');
Route::get('/blog',[landingcontroller::class,'blog'])->name('blog');
Route::get('/contactus',[landingcontroller::class,'contactus'])->name('contactus');
Route::get('/login',[landingcontroller::class,'login'])->name('login');
Route::get('/menu',[landingcontroller::class,'menu'])->name('menu');
Route::get('/register',[landingcontroller::class,'register'])->name('register');
Route::get('/services',[landingcontroller::class,'services'])->name('services');
Route::get('/single',[landingcontroller::class,'single'])->name('single');

