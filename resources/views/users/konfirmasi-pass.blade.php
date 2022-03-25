@extends('users.layouts.main')

@section('container')

<section id="konfirmasi-pass">
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
                                <a class="text center" href="#">Sudah punya akun?</a>
                            </div>
                        </td>
                        <td>
                            <div class="tombol-masuk">
                                <a href="">
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
                <p class="judul">Lupa Password Anda?</p>
                <p class="konfirmasi-pass-text">Masukkan alamat email Anda di bawah ini dan
                    kami akan mengirimkan email dengan kata sandi
                </p>
                <form action="">
                    <input class="Username" type="text" placeholder="Masukkan Email Anda">
                </form>
                <div class="tombol">
                    <a href="#">
                        <div class="tombol2">
                            Kirim email pemulihan
                        </div>
                    </a>
                </div>
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