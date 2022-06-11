@extends('users.layouts.main')

@section('container')

<section id="tambahNamaAnggota">
    <div class="container">
        <div class="text center row">
            <div>
                <h3 class="judul3">Edit Nama</h3>
                <h3 class="judul3-1">Anggota.</h3>
            </div>
            <div class="registrasi-form col-lg-7 col-md-10">
                <form action="{{ route('memberStore') }}" method="POST">
                    @csrf
                    <label for="name">Nama Anggota</label>
                    <input class="pelanggan" type="text" name="name" placeholder="masukkan nama anggota baru">
                    <button class="tombol w-100" type="submit">
                        <div class="tombol2">
                            Simpan
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="tambahNamaPelanggan-gambar1">
        <img src="image/tambahNamaPelanggan-gambar1.svg" alt="">
    </div>

</section>

@endsection