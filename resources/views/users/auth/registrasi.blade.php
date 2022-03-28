@extends('users.layouts.main')

@section('container')

<section id="registrasi">
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
                                <a class="text center" href="{{ route('login') }}">Sudah punya akun?</a>
                            </div>
                        </td>
                        <td>
                            <div class="tombol-masuk">
                                <a href="{{route('login')}}">
                                    <div class="tombol-masuk2">
                                        Masuk
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
                <p class="judul">Buat Akun Baru Anda!</p>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <input class="name @error('name') is-invalid @enderror" name="name" type="text"
                        placeholder="Nama Lengkap">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="email @error('email') is-invalid @enderror" name="email" type="email"
                        placeholder="Email">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="message @error('no_telp') is-invalid @enderror" name="no_telp" type="number"
                        placeholder="No Telepon">
                    @error('no_telp')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="Username @error('username') is-invalid @enderror" name="username" type="text"
                        placeholder="Username">
                    @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="Password @error('password') is-invalid @enderror" name="password" type="password"
                        placeholder="Password">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="Konfirmasi-pss @error('password_confirmation') is-invalid @enderror"
                        name="password_confirmation" type="password" placeholder="Konfimasi Password">
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