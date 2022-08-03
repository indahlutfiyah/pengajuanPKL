<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PengajuanController;

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