<?php

use App\Http\Controllers\IncomeController;
use App\Http\Controllers\OutcomeController;
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

Route::get('/lupa-password', function () {
    return view('users.konfirmasi-pass');
});

Route::get('/ubahTransaksiPemasukan', function () {
    return view('users.ubahTransaksiPemasukan');
});
Route::post('/ubahTransaksiPemasukan', [IncomeController::class, 'edit'])->name('incomeEdit');

Route::get('/ubahTransaksiPengeluaran', function () {
    return view('users.ubahTransaksiPengeluaran');
});
Route::post('/ubahTransaksiPengeluaran', [OutcomeController::class, 'edit'])->name('outcomeEdit');

Route::get('/catatTransaksi', function () {
    return view('users.catatTransaksi');
});
Route::post('/catatTransaksi/income', [IncomeController::class, 'store'])->name('incomeStore');
Route::post('/catatTransaksi/outcome', [OutcomeController::class, 'store'])->name('outcomeStore');

Route::get('/laporanTransaksi', function () {
    return view('users.laporanTransaksi');
})->name('laporanTransaksi');

Route::get('/utang', function () {
    return view('users.utang');
});
