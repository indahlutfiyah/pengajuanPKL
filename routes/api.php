<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PengajuanController;
=======
use App\Http\Controllers\PendaftarController;
>>>>>>> 7c1be7612743abba87f3fc1a6da8e39a127d8fc9

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
<<<<<<< HEAD
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    Route::post('/register',[AuthController::class,'register']);
    Route::post('login',[AuthController::class,'login']);
    Route::post('logout',[AuthController::class,'logout']);
    Route::post('me', [AuthController::class,'me']);
// });

Route::get('/showPengajuan', [PengajuanContyroller::class,'index']);
Route::post('/createPengajuan', [PengajuanController::class,'store']);
Route::post('/ubahPengajuan', [PengajuanController::class,'update']);
Route::post('/deletePengajuan', [PengajuanController::class,'destroy']);
=======

// Route::get('/pendaftar', 'App\Http\Controllers\PendaftarController@get');

Route::get('/showPendaftar', 'App\Http\Controllers\PendaftarController@index');
Route::post('/createPendaftar', 'App\Http\Controllers\PendaftarController@store');
Route::post('/ubahPendaftar', 'App\Http\Controllers\PendaftarController@update');
Route::post('/deletePendaftar', 'App\Http\Controllers\PendaftarController@destroy');

// Route::put('/pendaftar/{id}', 'App\Http\Controllers\PendaftarController@put');

// Route::delete('/pendaftar/{id}', 'App\Http\Controllers\PendaftarController@delete');

>>>>>>> 7c1be7612743abba87f3fc1a6da8e39a127d8fc9
