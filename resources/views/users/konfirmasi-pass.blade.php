@extends('users.layouts.main')

@section('container')

<section id="konfirmasi-pass">
    @include('users.layouts.navbarLogin')
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
                <button class="tombol w-100" type="submit">
                    <div class="tombol2">
                        Kirim email pemulihan
                    </div>
                </button>
            </div>
        </div>
    </div>
</section>

@include('users.layouts.copyright')

@endsection