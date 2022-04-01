<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::all();
        return view('users.laporanTransaksi', [
            'transaksi' => $transaction,
            'title' => 'Transaction'
        ]);
    }

    public function create()
    {
        return view('outcome.insert', [
            'title' => 'Transaction'
        ]);
    }

    public function outcome(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'total' => 'required',
            'note' => 'required|max:150'
        ]);

        Transaction::create([
            'date' => date('Y-m-d', strtotime($request->date)),
            'total_income' => 0,
            'total_outcome' => $request->total,
            'note' => $request->note,
            'status' => 'Pengeluaran'
        ]);

        return redirect()->route('laporanTransaksi');
    }

    public function income(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'total' => 'required',
            'note' => 'required|max:150'
        ]);

        Transaction::create([
            'date' => date('Y-m-d', strtotime($request->date)),
            'total_income' => $request->total,
            'total_outcome' => 0,
            'note' => $request->note,
            'status' => 'Pemasukan'
        ]);

        return redirect()->route('laporanTransaksi');
    }

    public function show(Transaction $outcome)
    {
        //
    }

    public function edit(Transaction $outcome)
    {
        return view('outcome.edit', ['outcome' => $outcome, 'title' => 'Transaction']);
    }

    public function update(Request $request, Transaction $outcome)
    {
        $request->validate([
            'date' => 'required',
            'total' => 'required',
            'note' => 'required|max:150'
        ]);

        $outcome->update([
            'date' => date('Y-m-d', strtotime($request->date)),
            'total_income' => 0,
            'total_outcome' => $request->total,
            'note' => $request->note,
            'status' => 'Pengeluaran'
        ]);

        return redirect('/ubahTransaksiPengeluaran');
    }

    public function destroy(Transaction $outcome)
    {
        $outcome->delete();
        return redirect('/ubahTransaksiPengeluaran');
    }
}
