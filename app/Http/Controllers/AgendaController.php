<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        $agenda = Agenda::all();
        return view('users.tambahNamaAgenda', [
            'agenda' => $agenda,
            'title' => 'Agenda'
        ]);
    }

    public function create()
    {
        return view('agenda.insert', [
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
