<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftarController;

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

// Route::get('/pendaftar', 'App\Http\Controllers\PendaftarController@get');

Route::get('/showPendaftar', 'App\Http\Controllers\PendaftarController@index');
Route::post('/createPendaftar', 'App\Http\Controllers\PendaftarController@store');
Route::post('/ubahPendaftar', 'App\Http\Controllers\PendaftarController@update');
Route::post('/deletePendaftar', 'App\Http\Controllers\PendaftarController@destroy');

// Route::put('/pendaftar/{id}', 'App\Http\Controllers\PendaftarController@put');

// Route::delete('/pendaftar/{id}', 'App\Http\Controllers\PendaftarController@delete');

