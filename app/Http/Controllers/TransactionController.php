<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::with('user')->where('user_id', Auth::user()->id)->get();
        $jumlahIncome = Transaction::with('user')->where('user_id', Auth::user()->id)->sum('total_income');
        $jumlahOutcome = Transaction::with('user')->where('user_id', Auth::user()->id)->sum('total_outcome');
        $jumlah = $jumlahIncome - $jumlahOutcome;
        return view('users.laporanTransaksi', [
            'transaksi' => $transaction,
            'jumlahIncome' => $jumlahIncome,
            'jumlahOutcome' => $jumlahOutcome,
            'jumlah' => $jumlah,
            'title' => 'Transaction'
        ]);
    }

    public function transaction()
    {
        $transaction = Transaction::with('user')->where('user_id', Auth::user()->id)->get();
        $jumlahIncome = Transaction::with('user')->where('user_id', Auth::user()->id)->sum('total_income');
        $jumlahOutcome = Transaction::with('user')->where('user_id', Auth::user()->id)->sum('total_outcome');
        $jumlah = $jumlahIncome - $jumlahOutcome;
        return view('users.transaksi4', [
            'transaksi' => $transaction,
            'jumlahIncome' => $jumlahIncome,
            'jumlahOutcome' => $jumlahOutcome,
            'jumlah' => $jumlah,
            'title' => 'Transaction'
        ]);
    }

    public function create()
    {
        return view('users.catatTransaksi', [
            'title' => 'Transaction'
        ]);
    }

    public function editIncomeView()
    {
        return view('users.ubahTransaksiPemasukan');
    }

    public function editOutcomeView()
    {
        return view('users.ubahTransaksiPengeluaran');
    }

    public function outcome(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'total' => 'required',
            'note' => 'required|max:150'
        ]);

        Transaction::create([
            'user_id' => Auth::id(),
            'date' => date('Y-m-d', strtotime($request->date)),
            'total_income' => 0,
            'total_outcome' => $request->total,
            'note' => $request->note,
            'status' => 'Pengeluaran'
        ]);

        return redirect()->route('index');
    }

    public function income(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'total' => 'required',
            'note' => 'required|max:150'
        ]);

        Transaction::create([
            'user_id' => Auth::id(),
            'date' => date('Y-m-d', strtotime($request->date)),
            'total_income' => $request->total,
            'total_outcome' => 0,
            'note' => $request->note,
            'status' => 'Pemasukan'
        ]);

        return redirect()->route('index');
    }

    public function show(Transaction $outcome)
    {
        //
    }

    public function editIncome(Transaction $transaksi)
    {
        return view('users.ubahTransaksiPemasukan', ['income' => $transaksi, 'title' => 'Pemasukan']);
    }

    public function editOutcome(Transaction $transaksi)
    {
        return view('users.ubahTransaksiPengeluaran', ['outcome' => $transaksi, 'title' => 'Pengeluaran']);
    }

    public function updateIncome(Request $request, Transaction $transaksi)
    {
        $request->validate([
            'date' => 'required',
            'total' => 'required',
            'note' => 'required|max:150'
        ]);

        $transaksi->update([
            'user_id' => Auth::id(),
            'date' => date('Y-m-d', strtotime($request->date)),
            'total_income' => 0,
            'total_outcome' => $request->total,
            'note' => $request->note,
            'status' => 'Pengeluaran'
        ]);

        return redirect('/ubahTransaksiPemasukan', ['income' => $transaksi]);
    }

    public function updateOutcome(Request $request, Transaction $transaksi)
    {
        $request->validate([
            'date' => 'required',
            'total' => 'required',
            'note' => 'required|max:150'
        ]);

        $transaksi->update([
            'user_id' => Auth::id(),
            'date' => date('Y-m-d', strtotime($request->date)),
            'total_income' => 0,
            'total_outcome' => $request->total,
            'note' => $request->note,
            'status' => 'Pengeluaran'
        ]);

        return redirect('/ubahTransaksiPengeluaran', ['outcome' => $transaksi]);
    }

    public function destroy(Transaction $outcome)
    {
        $outcome->delete();
        return redirect('/ubahTransaksiPengeluaran');
    }
}
