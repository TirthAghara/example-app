<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Database;
use App\Http\Controllers\Modeldemo;
use App\Http\Controllers\Upload;
use App\Http\Controllers\Clientcontroller;
use App\Http\Controllers\Sessioncontroller;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\StudentinfoController;
use App\Http\Controllers\DeviceController;
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
//dynamic
// Route::get('/{name}', function ($name) {
//     return view('welcome',['name'=>$name]);
// });

// Route::get("/about/{name}", function($name)
// {
//     return view("about",['name'=>$name]);
// });

//first is key name and second is url name

// Route::view("wel",'welcome');

// Route::get("/contact", [Contact::class,'loadview']);
// Route::get("/", function()
// {
//     return view("about");
// });

// Route::get("/welcome", function()
// {
//     return view("welcome");
// });

// Route::get("/hello", function()
// {
//     return view("hello");
// });

// Route::post("admin",[Admin::class,'getData']);
// Route::view("login","admin");

// Route::get('data',[Database::class,'index']);
// Route::get('model',[Modeldemo::class,'getModel']);

// Route::get("upload",[Upload::class,'store']);

Route::view("uploadimage",'uploadfile');
Route::post("uploadimage", [Upload::class, 'store']);
Route::get("/client",[Clientcontroller::class, 'http']);

Route::post("sess",[Sessioncontroller::class, 'login']);
// Route::match(['GET', 'POST'], '/sess', [Sessioncontroller::class, 'login']);

Route::view("sess",'session');
Route::view("profile",'profile');

Route::get('/login',function(){
    if(session()->has('user'))
    {
        return redirect('profile');
    }
    return view('session');
});

Route::get('/logout',function(){
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return redirect('sess');
});


// // Route::view("edit",'edit');
// // Route::get('add',[MemberController::class,'add']);
Route::get('addmember', function()
{
    return view('addmember');
});

Route::get('/list', [MemberController::class, 'showMembers'])->name('list');
Route::post('/addmember', [MemberController::class, 'member_store'])->name('member.store');
Route::get('/delete/{id}', [MemberController::class, 'delete'])->name('member.delete');
Route::get('/edit/{id}', [MemberController::class, 'edit'])->name('member.edit');
Route::put('/update/{id}', [MemberController::class, 'update'])->name('member.update');
Route::get('/detail/{id}', [MemberController::class, 'detail'])->name('member.show');




// Route::get('student',[StudentinfoController::class,'Student']);
// Route::get('/search/{firstname}',[DeviceController::class,'Searchdata']);
Route::view("layout",'layout');
Route::view("home",'home');
Route::view("login",'login');