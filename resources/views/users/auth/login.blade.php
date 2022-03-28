@extends('users.layouts.main')

@section('container')

<section id="login-form">
    <div class="">
        <div class="row">
            <div class="col-lg-4">
                <div class="denote">
                    <p>De Note.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="registrasi-contact-home text center">
                    <a class="register-home" href="#">Home</a>
                    <a class="register-contact" href="#">Contact Us</a>
                </div>
            </div>
            <div class="col-lg-4">
                <table>
                    <tr>
                        <td>
                            <div class="punya-akun">
                                <a class="text center" href="{{ route('register') }}">Belum punya akun?</a>
                            </div>
                        </td>
                        <td>
                            <div class="tombol-masuk">
                                <a href="{{ route('register') }}">
                                    <div class="tombol-masuk2">
                                        Daftar
                                    </div>
                                </a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="nav2">

    </div>
    <div class="container">
        <div class="text center row">
            <div class="registrasi-form col-lg-6 col-md-12">
                <p class="judul">Selamat Datang Kembali Masuk Untuk Melanjutkan!</p>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <input class="Username @error('username') is-invalid @enderror" type="text" name="username"
                        placeholder="Username">
                    @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="Password @error('password') is-invalid @enderror" type="password" name="password"
                        placeholder="Password">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="lupa-pass">
                        <p>Lupa Password?</p>
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
    <div class="nav3">

    </div>
    <div class="registrasi-Copyright row">
        <div class="text center col-6">
            <p class="copy">Copyright © 2022 De Note. | All rights reserved</p>
        </div>
        <div class="text center col-6">
            <p class="dev">Develop By Tupai Tech Intern Team</p>
        </div>
    </div>
</section>

@endsection