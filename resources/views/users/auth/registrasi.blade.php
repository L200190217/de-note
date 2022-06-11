@extends('users.layouts.main')

@section('container')

<section id="registrasi">
    @include('users.layouts.navbarLogin2')
    <div class="container">
        <div class="text center row">
            <div class="registrasi-form col-lg-6 col-md-12">
                <p class="judul">Buat Akun Baru Anda!</p>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <input class="name @error('name') is-invalid @enderror" name="name" type="text" placeholder="Nama Lengkap">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="email @error('email') is-invalid @enderror" name="email" type="email" placeholder="Email">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="message @error('no_telp') is-invalid @enderror" name="no_telp" type="number" placeholder="No Telepon">
                    @error('no_telp')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="Username @error('username') is-invalid @enderror" name="username" type="text" placeholder="Username">
                    @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="Password @error('password') is-invalid @enderror" name="password" type="password" placeholder="Password">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="Konfirmasi-pss @error('password_confirmation') is-invalid @enderror" name="password_confirmation" type="password" placeholder="Konfimasi Password">
                    @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button class="tombol w-100" type="submit">
                        <div class="tombol2">
                            Buat Akun
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@include('users.layouts.copyright')

@endsection