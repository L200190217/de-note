@extends('users.layouts.main')

@section('container')

<section id="registrasi">
    <div class="bg-biru">
        <div class="container">
            <div class="">
                <div class="row">
                    <p class="de-note2 text center">De Note</p>
                    <div class="nama col-lg-6 col-md-12">
                        <label>Nama Depan</label>
                        <input class="contact-name" type="name">
                        <label>Nama Belakang</label>
                        <input class="contact-email" type="email">
                        <label>No Telepon</label>
                        <input class="contact-message" type="message">
                    </div>
                    <div class="email col-lg-6 col-md-12">
                        <label>Email</label>
                        <input class="contact-name" type="name">
                        <label>Password</label>
                        <input class="contact-email" type="email">
                        <label>Konfirmasi Password</label>
                        <input class="contact-message" type="message">
                    </div>
                    <div class="center">
                        <div class="tombol-registrasi text center">
                            <a href="#">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection