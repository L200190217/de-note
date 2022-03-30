<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index()
    {
        $income = Income::all();
        return view('income.index', [
            'income' => $income,
            'title' => 'Income'
        ]);
    }

    public function create()
    {
        return view('income.insert', [
            'title' => 'Income'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'total' => 'required',
            'note' => 'required|max:150'
        ]);

        Income::create([
            'date' => date('Y-m-d', strtotime($request->date)),
            'total_income' => $request->total,
            'note' => $request->note,
        ]);

        return redirect()->route('laporanTransaksi');
    }

    public function show(Income $income)
    {
        //
    }

    public function edit(Income $income)
    {
        return view('income.edit', ['income' => $income, 'title' => 'Income']);
    }

    public function update(Request $request, Income $income)
    {
        $request->validate([
            'date' => 'required',
            'total' => 'required',
            'note' => 'required|max:150'
        ]);

        $income->update([
            'date' => $request->date,
            'total_income' => $request->total,
            'note' => $request->note,
        ]);

        return redirect('/ubahTransaksiPemasukan');
    }

    public function destroy(Income $income)
    {
        $income->delete();
        return redirect('/ubahTransaksiPemasukan');
    }
}
