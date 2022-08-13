<?php

use Illuminate\Support\Facades\Route;


/*HOME*/
    Route::get('/', function () {
        return view('index');
    });
    Route::get('/login', function () {
        return view('login');
    });

    Route::get('/register', function () {
        return view('register');
    });

/*ADMIN*/
    Route::get('/admin', function () {
        return view('admin/indexadmin');
    });
    Route::get('/rekap1', function () {
        return view('admin/rekapdata1');
    });
    Route::get('/rekap2', function () {
        return view('admin/rekapdata2');
    });
    Route::get('/Alogbook', function () {
        return view('admin/logbook');
    });

/*USER*/
    Route::get('/users', function () {
        return view('users/indexusers');
    });
    Route::get('/pendaftaran', function () {
        return view('users/pendaftaran');
    });
    Route::get('/cek', function () {
        return view('users/cekPendaftaran');
    });
    // Route::get('/addLogbook', function () {
    //     return view('users/tambahlogbook');
    // });
    Route::get('/logbook', function () {
        return view('users/logbook');
    });
    Route::get('/editLogbook', function () {
        return view('users/editLogbook');
    });
