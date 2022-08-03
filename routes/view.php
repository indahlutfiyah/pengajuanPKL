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
    Route::get('/admin/pkl1individu', function () {
        return view('admin/pkl1individu');
    });
    Route::get('/admin/pkl1kelompok', function () {
        return view('admin/pkl1kelompok');
    });
    Route::get('/admin/pkl2individu', function () {
        return view('admin/pkl2individu');
    });
    Route::get('/admin/pkl2kelompok', function () {
        return view('admin/pkl2kelompok');
    });
    Route::get('/admin/pklrekap', function () {
        return view('admin/pklrekap');
    });
    Route::get('/admin/magang1individu', function () {
        return view('admin/magang1individu');
    });
    Route::get('/admin/magang1kelompok', function () {
        return view('admin/magang1kelompok');
    });
    Route::get('/admin/magang2individu', function () {
        return view('admin/magang2individu');
    });
    Route::get('/admin/magang2kelompok', function () {
        return view('admin/magang2kelompok');
    });
    Route::get('/admin/logbookpkl', function () {
        return view('admin/logbookpkl');
    });

/*USER*/
    Route::get('/users', function () {
        return view('users/indexusers');
    });
    Route::get('/users/pengajuan1', function () {
        return view('users/pengajuan1');
    });
    Route::get('/users/pengajuan2', function () {
        return view('users/pengajuan2');
    });
    Route::get('/users/cekpengajuan', function () {
        return view('users/cekpengajuan');
    });
    Route::get('/users/isilogbook', function () {
        return view('users/isilogbook');
    });
    Route::get('/users/ceklogbook', function () {
        return view('users/ceklogbook');
    });
    Route::get('/users/home', function () {
        return view('users/home');
    });
