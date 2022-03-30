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
    return view('users.auth.login');
});

Route::get('/home', function () {
    return view('users.home');
});

Route::get('/transaksi', function () {
    return view('users.transaksi');
});

Route::get('/transaksi2', function () {
    return view('users.transaksi2');
});

Route::get('/transaksi3', function () {
    return view('users.transaksi3');
});

Route::get('/konfirmasi-pass', function () {
    return view('users.konfirmasi-pass');
});

Route::get('/ubahTransaksiPemasukan', function () {
    return view('users.ubahTransaksiPemasukan');
});

Route::get('/ubahTransaksiPengeluaran', function () {
    return view('users.ubahTransaksiPengeluaran');
});

Route::get('/catatTransaksi', function () {
    return view('users.catatTransaksi');
});

Route::get('/laporanTransaksi', function () {
    return view('users.laporanTransaksi');
});

Route::get('/laporanTransaksi2', function () {
    return view('users.laporanTransaksi2');
});
