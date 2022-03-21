@extends('users.layouts.main')

@section('container')

<section id="login-form">
    <div class="bg-biru">
        <div class="container">
            <div class="center row">
                <div class="login-kartu col-lg-7 col-md-10">
                    <p class="de-note2">De Note</p>
                    <input class="name" type="name" placeholder="Masukkan Email">
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