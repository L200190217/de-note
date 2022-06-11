<?php

namespace App\Http\Controllers;

use App\Models\Debt;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DebtController extends Controller
{
    public function index()
    {
        $debt = Debt::with('user')->where('user_id', Auth::user()->id)->get();
        $totalDebt = Debt::with('user')->where('user_id', Auth::user()->id)->sum('total_debt');
        return view('users.utang', [
            'debt' => $debt,
            'totalDebt' => $totalDebt,
            'title' => 'Debt'
        ]);
    }

    public function add()
    {
        $member = Member::with('user')->where('user_id', Auth::user()->id)->get();
        return view('users.catatUtang', [
            'member' => $member,
            'title' => 'Debt'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'member' => 'required',
            'date' => 'required',
            'total' => 'required',
            'note' => 'required'
        ]);

        Debt::create([
            'user_id' => Auth::id(),
            'member_id' => $request->member,
            'date' => $request->date,
            'total_debt' => $request->total,
            'note' => $request->note,
        ]);

        return redirect('/utang');
    }

    public function show(Debt $debt)
    {
        //
    }

    public function edit(Debt $debt)
    {
        $member = Member::with('user')->where('user_id', Auth::user()->id)->get();
        return view('users.editCatatUtang', ['debt' => $debt, 'member' => $member, 'title' => 'Debt']);
    }

    public function update(Request $request, Debt $debt)
    {
        $request->validate([
            'member' => 'required',
            'date' => 'required',
            'total' => 'required',
            'note' => 'required'
        ]);

        $debt->update([
            'user_id' => Auth::id(),
            'member_id' => $request->member,
            'date' => $request->date,
            'total_debt' => $request->total,
            'note' => $request->note,
        ]);

        return redirect('/debt');
    }

    public function destroy(Request $request)
    {
        $data = $request->data;
        $response = [
            'status' => 'success'
        ];
        // return $data;
        Debt::whereIn('id', $data)->delete();
        return $response;
    }
}
