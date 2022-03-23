@extends('users.layouts.main')

@section('container')

<section id="login-form">
    <div class="login-login">
        <tr>
            <td><img src="image/login-log in.svg" alt=""></td>
            <td><a href="#"> &ensp;Log In</a></td>
        </tr>
    </div>
    <div class="login-bg">
        <div class="container">
            <div class="row">
                <div class=" col-lg-5 col-md-10">
                    <p class="de-note2">De Note</p>
                    <label>Username</label>
                    <input class="name" type="name" placeholder="Masukkan Email">
                    <label>Password</label>
                    <input class="email" type="email" placeholder="Masukkan Password">
                    <a class="lupa-pass" href="#">Lupa password?</a>
                    <div class="center">
                        <div class="tombol-login text center">
                            <a href="#">Login</a>
                        </div>
                    </div>
                    <div class="center">
                        <p class="textakun">Tidak punya akun? <a href="#">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>

@endsection