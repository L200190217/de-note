<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index()
    {
        $member = Member::all();
        return view('users.member', [
            'member' => $member,
            'title' => 'Member'
        ]);
    }

    public function create()
    {
        return view('member.insert', [
            'title' => 'Member'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:60',
        ]);

        Member::create([
            'user_id' => Auth::id(),
            'name' => $request->name
        ]);

        return redirect()->route('member');
    }

    public function show(Member $member)
    {
        //
    }

    public function edit(Member $member)
    {
        return view('member.edit', ['member' => $member, 'title' => 'Member']);
    }

    public function update(Request $request, Member $member)
    {
        $request->validate([
            'user_id' => Auth::id(),
            'name' => 'required|max:60',
        ]);

        $member->update([
            'date' => $request->name
        ]);

        return redirect('/ubahTransaksiPengeluaran');
    }

    public function destroy(Member $member)
    {
        $member->delete();
        return redirect('/ubahTransaksiPengeluaran');
    }
}
