@extends('users.layouts.main')

@include('users.layouts.navbar')

@section('container')

<!-- <div class="coba">
    <p>hallo</p>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Log Out</button>
    </form>
</div> -->

<section id="home">
    <div class="row">
        <div class="bg-color col-lg-6 col-md-12">
            <img class="kotak-biru" src="image/home-bg-biru2.png" alt="">
            <h2 class="judul1">Yuk, mulai kembangkan bisnismu</h2>
            <p class="text-lg">Kelola keunganmu dengan lebih mudah dan agendakan rencanamu dengan lebih cepat!</p>
            <div class="tombol">
                <a href="#">Mulai</a>
            </div>
        </div>
        <div class="bg-kotakWarna col-lg-6 col-md-12">
            <img class="kuning2" src="image/kuning.png" alt="">
            <img class="kuning3" src="image/home-bg-biru.png" alt="">
        </div>
    </div>
</section>

<section id="home-feature">
    <div class="bg-biru">

    </div>
    <div class="container">
        <div class="center">
            <div class="row">
                <div class="kotak col-lg-4 col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-6">
                            <img src="image/home-feature-shield 1.png" alt="">
                        </div>
                        <div class="col-6">
                            <p class="text"> Cepat dan Efisien </p>
                        </div>
                    </div>
                </div>
                <div class="kotak col-lg-4 col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-6">
                            <img src="image/home-feature-checklist 1.png" alt="">
                        </div>
                        <div class="col-6">
                            <p class="text"> Cepat dan Efisien</p>
                        </div>
                    </div>
                    <div class="line1"></div>
                </div>
                <div class="kotak col-lg-4 col-md-4 col-sm-12">
                    <div class="row">
                        <div class="tangan col-6">
                            <img class="tangan" src="image/home-feature-easy-use 1.png" alt="">
                        </div>
                        <div class="tangan2 col-6">
                            <p class="text"> Kemudahan Akses</p>
                        </div>
                    </div>
                    <div class="line2"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('users.layouts.footer')

@endsection