<?php

use Faker\Provider\UserAgent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PengajuanController;

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
    return view('index');
});
Route::post('/register', [AuthController::class, 'register']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

//USERVIEW

Route::get('/indexuser', function () {
    return view('users.indexusers');
});



// ADD TO GITHUB

Route::get('/showPengajuan', [PengajuanController::class, 'index']);
Route::post('/createPengajuan', [PengajuanController::class, 'store']);
Route::post('/ubahPengajuan', [PengajuanController::class, 'update']);
Route::post('/deletePengajuan', [PengajuanController::class, 'destroy']);

Route::post('/auth/login', function () {

    $email = 'UserAgent';
    $pass = 'pass';

    // // checkuserpass
    $msg = '';

    // if('passsalah'){
    //     $msg="Password Salah";
    // }

    // if('passsalah'){
    //     return view("login",['status'=>true,'msg'=>"Password Salah"]);
    // }

    // if('passsalah'){
    //     return view("login",['status'=>true,'msg'=>"Password Salah"]);
    // }
    // return view("login",['status'=>true,'msg'=>$msg]);


    // if("")

});

Route::get('/magang1individu', [PendaftarController::class, 'index'] );
Route::get('/decline', [PendaftarController::class, 'decline'] );
Route::get('/accept', [PendaftarController::class, 'accept'] );
Route::get('/change-status/{ID_PENDAFTAR}', [PendaftarController::class, 'changeStatus']);

Route::get('/cekPengajuan', function(){
    return view('/users/cekPengajuan');
});