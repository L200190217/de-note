<?php

use App\Http\Controllers\AdminController;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\DebtController;
use App\Http\Controllers\HomeController;
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

Route::get('/home', [HomeController::class, 'home'])->name('home');

// Route::get('/transaksi', function () {
//     return view('users.transaksi');
// });

// Route::get('/transaksi2', function () {
//     return view('users.transaksi2');
// });

// Route::get('/transaksi3', function () {
//     return view('users.transaksi3');
// });

Route::get('/transaksi', [TransactionController::class, 'transaction'])->name('index');
Route::delete('/deleteTransaksi', [TransactionController::class, 'destroyAll'])->name('deleteAll');

Route::get('/lupa-password', function () {
    return view('users.konfirmasi-pass');
});

Route::get('/ubahTransaksiPemasukan/{transaksi}', [TransactionController::class, 'editIncome'])->name('editIncome');
Route::post('/ubahTransaksiPemasukan/{transaksi}', [TransactionController::class, 'updateIncome'])->name('incomeEdit');

Route::get('/ubahTransaksiPengeluaran/{transaksi}',  [TransactionController::class, 'editOutcome'])->name('editOutcome');
Route::post('/ubahTransaksiPengeluaran/{transaksi}', [TransactionController::class, 'updateOutcome'])->name('outcomeEdit');

Route::get('/catatTransaksi', [TransactionController::class, 'create'])->name('transaction');
Route::post('/catatTransaksi/income', [TransactionController::class, 'income'])->name('incomeStore');
Route::post('/catatTransaksi/outcome', [TransactionController::class, 'outcome'])->name('outcomeStore');

Route::get('/laporanTransaksi', [TransactionController::class, 'index'])->name('laporanTransaksi');

// Route::get('/utang', function () {
//     return view('users.utang');
// });
Route::get('/utang', [DebtController::class, 'index'])->name('debt');
Route::get('/catatUtang', [DebtController::class, 'add'])->name('addDebt');
Route::post('/catatUtang', [DebtController::class, 'store'])->name('debtStore');
Route::delete('/deleteUtang', [DebtController::class, 'destroy'])->name('deleteDebt');


Route::get('/catatUtang2', function () {
    return view('users.catatUtang2');
});

Route::get('/tambahNamaPelanggan', function () {
    return view('users.tambahNamaPelanggan');
});

Route::get('/editNamaPelanggan', function () {
    return view('users.editNamaPelanggan');
});

Route::get('/catatIuran', function () {
    return view('users.catatIuran');
});

Route::get('/tambahNamaAnggota', [MemberController::class, 'index'])->name('memberAdd');
Route::post('/tambahNamaAnggota', [MemberController::class, 'store'])->name('memberStore');

Route::get('/tambahNamaAgenda', [AgendaController::class, 'create'])->name('agendaAdd');
Route::post('/tambahNamaAgenda', [AgendaController::class, 'store'])->name('agendaStore');


Route::get('/laporanAgenda', function () {
    return view('users.laporanAgenda');
});

Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
Route::get('/tambahNamaAgenda', [AgendaController::class, 'create'])->name('agendaAdd');

Route::get('/editNamaAgenda', function () {
    return view('users.editNamaAgenda');
});


Route::get('/editCatatUtang', function () {
    return view('users.editCatatUtang');
});

Route::get('/editCatatBayar', function () {
    return view('users.editCatatBayar');
});

Route::get('/dashboardPengguna', [AdminController::class, 'index'])->name('adminDashboard');

Route::get('/detailPelanggan', function () {
    return view('users.detailPelanggan');
});

Route::get('/detailNamaAgenda', function () {
    return view('users.detailNamaAgenda');
});

Route::get('/tambahAnggota', function () {
    return view('users.tambahAnggota');
});
