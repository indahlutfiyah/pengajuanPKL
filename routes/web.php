<?php

use Faker\Provider\UserAgent;
use Illuminate\Support\Facades\Route;

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
    return view("welcome");
});

// Route::post('/auth/login', function () {
    
//     // $email = 'UserAgent';
//     // $pass = 'pass';

//     // // checkuserpass
//     // $msg='';

//     // if('passsalah'){
//     //     $msg="Password Salah";
//     // }

//     // if('passsalah'){
//     //     return view("login",['status'=>true,'msg'=>"Password Salah"]);
//     // }

//     // if('passsalah'){
//     //     return view("login",['status'=>true,'msg'=>"Password Salah"]);
//     // }
//     // return view("login",['status'=>true,'msg'=>$msg]);
   

//     // if("")






// });