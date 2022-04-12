@extends('users.layouts.main')

@section('container')

<section id="login-form" style="padding-top: 16px;">
    @include('users.layouts.navbarLogin')
    <div class="container">
        <div class="text center row">
            <div class="registrasi-form col-lg-6 col-md-12">
                <p class="judul">Selamat Datang Kembali Masuk Untuk Melanjutkan!</p>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <input class="Username @error('username') is-invalid @enderror" type="text" name="username" placeholder="Username">
                    @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="Password @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="lupa-pass">
                        <a href="">Lupa Password?</a>
                    </div>
                    <button type="submit" class="tombol w-100">
                        <div class="tombol2">
                            Log In
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@include('users.layouts.copyright')

@endsection