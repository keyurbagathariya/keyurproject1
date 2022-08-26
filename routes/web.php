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

Route::get('/UserTable',[admincontroller::class,'UserTable'])->name('UserTable');
Route::post('/UserTable',[admincontroller::class,'UserTable'])->name('UserTable');


Route::get('/ProductTable',[admincontroller::class,'ProductTable'])->name('ProductTable');
Route::post('/ProductTable',[admincontroller::class,'ProductTable'])->name('ProductTable');

Route::get('/profile',[admincontroller::class,'profile'])->name('profile');
Route::get('/contact',[admincontroller::class,'contact'])->name('contact');

Route::get('/editprofile',[admincontroller::class,'editprofile'])->name('editprofile');
Route::post('/editprofile',[admincontroller::class,'editprofile'])->name('editprofile');

Route::get('/changepassword',[admincontroller::class,'changepassword'])->name('changepassword');
Route::post('/changepassword',[admincontroller::class,'changepassword'])->name('changepassword');





                                //INSERT
Route::get('/addproduct',[admincontroller::class,'addproduct'])->name('addproduct');
Route::post('/addproduct',[admincontroller::class,'addproduct'])->name('addproduct');

Route::get('/users',[admincontroller::class,'users'])->name('users');
Route::post('/users',[admincontroller::class,'users'])->name('users');


                                    //DELETE
Route::get('/deleteuser/{id}',[admincontroller::class,'deleteuser'])->name('deleteuser');
Route::get('/deleteproduct/{id}',[admincontroller::class,'deleteproduct'])->name('deleteproduct');

                                    //UPDATE
Route::get('/editproduct/{id}',[admincontroller::class,'editproduct'])->name('editproduct');
Route::post('/editproduct/{id}',[admincontroller::class,'editproduct'])->name('editproduct');


                                        // USERSIDE

Route::get('/',[landingcontroller::class,'home'])->name('home');
Route::post('/',[landingcontroller::class,'home'])->name('home');

Route::get('/manageprofile/{id}',[landingcontroller::class,'manageprofile'])->name('manageprofile');
Route::post('/manageprofile/{id}',[landingcontroller::class,'manageprofile'])->name('manageprofile');

Route::get('/contactus',[landingcontroller::class,'contactus'])->name('contactus');
Route::post('/contactus',[landingcontroller::class,'contactus'])->name('contactus');

Route::get('/login',[landingcontroller::class,'login'])->name('login');
Route::post('/login',[landingcontroller::class,'login'])->name('login');

Route::get('/register',[landingcontroller::class,'register'])->name('register');
Route::post('/register',[landingcontroller::class,'register'])->name('register');

Route::get('/confirmemail',[landingcontroller::class,'confirmemail'])->name('confirmemail');
Route::post('/confirmemail',[landingcontroller::class,'confirmemail'])->name('confirmemail');

Route::get('/forgotpassword',[landingcontroller::class,'forgotpassword'])->name('forgotpassword');
Route::post('/forgotpassword',[landingcontroller::class,'forgotpassword'])->name('forgotpassword');


// Route::get('/sendingmail',[landingcontroller::class,'sendingmail'])->name('sendingmail');
// Route::post('/sendingmail',[landingcontroller::class,'sendingmail'])->name('sendingmail');


Route::get('/sendmail',[landingcontroller::class,'sendmail'])->name('sendmail');



Route::get('/aboutus',[landingcontroller::class,'aboutus'])->name('aboutus');
Route::get('/ourchef',[landingcontroller::class,'ourchef'])->name('ourchef');
Route::get('/blog',[landingcontroller::class,'blog'])->name('blog');
Route::get('/logout',[landingcontroller::class,'logout'])->name('logout');
Route::get('/menu',[landingcontroller::class,'menu'])->name('menu');
Route::get('/services',[landingcontroller::class,'services'])->name('services');
Route::get('/single',[landingcontroller::class,'single'])->name('single');
Route::post('/addcart',[landingcontroller::class,'addcart'])->name('addcart');


// Route::get('/sendmail',function(){
//         $details=['name'=>'keyur'];
//         \Mail::to('bagathariyakeyur7600@gmail.com')->send(new \App\Mail\Mail($details));
//         dd('success...');
// });

use App\Events\MyEvent;

Route::get('/event',function(){
    $details=[
        'name'=>'keyur',
    ];
    return MyEvent::dispatch($details);
});