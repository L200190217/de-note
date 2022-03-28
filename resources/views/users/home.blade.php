@extends('users.layouts.main')

@section('container')

<div class="coba">
    <p>hallo</p>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Log Out</button>
    </form>
</div>

@endsection