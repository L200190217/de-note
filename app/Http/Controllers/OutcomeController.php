<?php

namespace App\Http\Controllers;

use App\Models\Outcome;
use Illuminate\Http\Request;

class OutcomeController extends Controller
{
    public function index()
    {
        $outcome = Outcome::all();
        return view('outcome.index', [
            'outcome' => $outcome,
            'title' => 'Outcome'
        ]);
    }

    public function create()
    {
        return view('outcome.insert', [
            'title' => 'Outcome'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'total' => 'required',
            'note' => 'required|max:150'
        ]);

        Outcome::create([
            'date' => date('Y-m-d', strtotime($request->date)),
            'total_outcome' => $request->total,
            'note' => $request->note,
        ]);

        return redirect()->route('laporanTransaksi');
    }

    public function show(Outcome $outcome)
    {
        //
    }

    public function edit(Outcome $outcome)
    {
        return view('outcome.edit', ['outcome' => $outcome, 'title' => 'Outcome']);
    }

    public function update(Request $request, Outcome $outcome)
    {
        $request->validate([
            'date' => 'required',
            'total' => 'required',
            'note' => 'required|max:150'
        ]);

        $outcome->update([
            'date' => $request->date,
            'total_outcome' => $request->total,
            'note' => $request->note,
        ]);

        return redirect('/ubahTransaksiPengeluaran');
    }

    public function destroy(Outcome $outcome)
    {
        $outcome->delete();
        return redirect('/ubahTransaksiPengeluaran');
    }
}
