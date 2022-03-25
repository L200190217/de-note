<?php

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
    return view('users.home');
});

Route::get('/registrasi', function () {
    return view('users.registrasi');
});

Route::get('/login', function () {
    return view('users.login');
});

Route::get('/transaksi', function () {
    return view('users.transaksi');
});
Route::get('/transaksi2', function () {
    return view('users.transaksi2');
});

Route::get('/konfirmasi-pass', function () {
    return view('users.konfirmasi-pass');
});
