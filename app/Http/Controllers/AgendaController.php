<?php

namespace App\Http\Controllers;

use App\Models\Debt;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{
    public function index()
    {
        $agenda = Debt::with('user')->where('user_id', Auth::user()->id)->get();
        return view('users.agenda', [
            'agenda' => $agenda,
            'title' => 'Agenda'
        ]);
    }

    public function create()
    {
        return view('users.tambahNamaAgenda', [
            'title' => 'Agenda'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:25',
            'start' => 'required',
            'end' => 'required'
        ]);

        Agenda::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'start_date' => date('Y-m-d', strtotime($request->start)),
            'end_date' => date('Y-m-d', strtotime($request->end))
        ]);

        return redirect()->route('agenda');
    }

    public function show(Agenda $agenda)
    {
        //
    }

    public function edit(Agenda $agenda)
    {
        return view('agenda.edit', ['agenda' => $agenda, 'title' => 'Agenda']);
    }

    public function update(Request $request, Agenda $agenda)
    {
        $request->validate([
            'name' => 'required|max:25',
            'start' => 'required',
            'end' => 'required'
        ]);

        $agenda->update([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'start_date' => $request->start,
            'end_date' => $request->end
        ]);

        return redirect('/ubahTransaksiPengeluaran');
    }

    public function destroy(Agenda $agenda)
    {
        $agenda->delete();
        return redirect('/ubahTransaksiPengeluaran');
    }
}
