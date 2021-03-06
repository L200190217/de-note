@extends('users.layouts.main')

@section('container')

<section id="tambahNamaPelanggan">
    <div class="container">
        <div class="text center row">
            <div>
                <h3 class="judul3">Tambah Nama</h3>
                <h3 class="judul3-1">Pelanggan.</h3>
            </div>
            <div class="registrasi-form col-lg-7 col-md-10">
                <form action="{{ route('memberStore') }}" method="POST">
                    @csrf
                    <label for="name">Nama Pelanggan</label>
                    <input class="pelanggan" type="text" name="name" placeholder="masukkan nama pelanggan baru">
                    <button class="tombol w-100" type="submit">
                        <div class="tombol2">
                            Simpan
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="limiter">
        <div class="container-table100">
            <div class="bungkus">
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <div class="tabel-atas">
                                    <div class="tabel-atas2 row">
                                        <div class="col-3">
                                            <div class="nama">
                                                <p>Daftar Pelanggan</p>
                                            </div>
                                            <div class="per-halaman">
                                                <p>Rekam per halaman</p>
                                            </div>
                                        </div>
                                        <div class="col-5">

                                        </div>
                                        <div class="pencarian col-4">
                                            <div class="input-group pencarian mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                                                <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                    </div>
                                    <tr class="row100 head">
                                        <th class="cell100 column1">Nama</th>
                                    </tr>
                                </div>
                            </thead>

                            <div class="table100-body js-pscroll" id="checkbox-wrap">
                                <tbody>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Didi</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Haru</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Adi</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Muhammad</td>
                                    </tr>
                                </tbody>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tambahNamaPelanggan-gambar1">
        <img src="image/tambahNamaPelanggan-gambar1.svg" alt="">
    </div>
</section>

@endsection