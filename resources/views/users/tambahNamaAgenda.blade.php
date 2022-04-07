@extends('users.layouts.main')

@section('container')

<section id="tambahNamaAgenda">
    <div class="container">
        <div class="text center row">
            <div>
                <h3 class="judul3">Tambah Nama</h3>
                <h3 class="judul3-1">Agenda.</h3>
            </div>
            <div class="registrasi-form col-lg-7 col-md-10">
                <form action="{{ route('agendaStore') }}" method="POST">
                    @csrf
                    <label for="name">Nama Agenda</label>
                    <input class="pelanggan" type="text" name="name" placeholder="masukkan nama agenda baru">
                    <div class="row">
                        <div class="mulai col-6">
                            <label for="start">Tanggal Mulai</label>
                            <input class="form-control" id="date" name="start" placeholder="pilih tanggal" type="text"
                                autocomplete="off" />
                        </div>
                        <div class="akhir col-6">
                            <label for="end">Tanggal Akhir</label>
                            <input class="form-control" id="date" name="end" placeholder="pilih tanggal" type="text"
                                autocomplete="off" />
                        </div>
                    </div>
                    <button class="tombol w-100" type="submit">
                        <div class="tombol2">
                            Simpan
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="tambahNamaAgenda-gambar1">
        <img src="image/tambahNamaAgenda-gambar1.svg" alt="">
    </div>
</section>

@endsection