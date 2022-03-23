@extends('users.layouts.main')

@section('container')

<section id="registrasi">
    <div class="login-login">
        <tr>
            <td><img src="image/login-log in.svg" alt=""></td>
            <td><a href="#"> &ensp;Log In</a></td>
        </tr>
    </div>
    <div class="login-bg">
        <div class="container">
            <div class="">
                <div class="row">
                    <p class="de-note2">De Note</p>
                    <div class="nama-message col-lg-6 col-md-6">
                        <label>Nama Lengkap</label>
                        <input class="name" type="name" placeholder="Nama Lengkap">
                        <label>Email</label>
                        <input class="email" type="email" placeholder="example@example.com">
                        <label>No Telepon</label>
                        <input class="message" type="message" placeholder="No Telepon">
                    </div>
                    <div class="Username-Konfirmasi-pss col-lg-6 col-md-6">
                        <label>Username</label>
                        <input class="Username" type="Username" placeholder="Username">
                        <label>Password</label>
                        <input class="Password" type="Password" placeholder="Password">
                        <label>Konfirmasi Password</label>
                        <input class="Konfirmasi-pss" type="Konfimasi Password" placeholder="Konfimasi Password">
                    </div>
                    <div class="center">
                        <div class="tombol-registrasi text center">
                            <a href="#">Register</a>
                        </div>
                    </div>
                    <div class="center">
                        <p class="textakun">Sudah punya akun?? <a href="#">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection