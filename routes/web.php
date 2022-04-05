<?php

use App\Models\Transaction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransactionController;

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

Route::get('/transaksi4', [TransactionController::class, 'transaction'])->name('index');

Route::get('/lupa-password', function () {
    return view('users.konfirmasi-pass');
});

Route::get('/ubahTransaksiPemasukan', [TransactionController::class, 'editIncomeView'])->name('editIncome');
Route::post('/ubahTransaksiPemasukan/{id}', [TransactionController::class, 'edit'])->name('incomeEdit');

Route::get('/ubahTransaksiPengeluaran',  [TransactionController::class, 'editOutcomeView'])->name('editOutcome');
Route::post('/ubahTransaksiPengeluaran/{id}', [TransactionController::class, 'edit'])->name('outcomeEdit');

Route::get('/catatTransaksi', [TransactionController::class, 'create'])->name('transaction');
Route::post('/catatTransaksi/income', [TransactionController::class, 'income'])->name('incomeStore');
Route::post('/catatTransaksi/outcome', [TransactionController::class, 'outcome'])->name('outcomeStore');

Route::get('/laporanTransaksi', [TransactionController::class, 'index'])->name('laporanTransaksi');

Route::get('/utang', function () {
    return view('users.utang');
});

Route::get('/catatUtang', function () {
    return view('users.catatUtang');
});

Route::get('/catatUtang2', function () {
    return view('users.catatUtang2');
});

Route::get('/tambahNamaPelanggan', function () {
    return view('users.tambahNamaPelanggan');
});

Route::get('/catatIuran', function () {
    return view('users.catatIuran');
});

Route::get('/tambahNamaAnggota', function () {
    return view('users.tambahNamaAnggota');
});
Route::post('/tambahNamaAnggota', [MemberController::class, 'store'])->name('memberStore');

<<<<<<< HEAD
Route::get('/tambahNamaAgenda', [AgendaController::class, 'index'])->name('agenda');
Route::post('/tambahNamaAgenda', [AgendaController::class, 'store'])->name('agendaStore');
=======
Route::get('/tambahNamaAgenda', function () {
    return view('users.tambahNamaAgenda');
});


Route::get('/coba', function () {
    return view('users.coba');
});
>>>>>>> 655deb4fdf1e9acf6fc90193fe9517eb4f1bcb8b
