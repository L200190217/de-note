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
                            <input class="form-control" id="date" name="start" placeholder="pilih tanggal" type="text" autocomplete="off" />
                        </div>
                        <div class="akhir col-6">
                            <label for="end">Tanggal Akhir</label>
                            <input class="form-control" id="date" name="end" placeholder="pilih tanggal" type="text" autocomplete="off" />
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




    <section id="">
        <div class="limiter">
            <div class="container-table100">
                <div class="bungkus">
                    <div class="wrap-table100">
                        <div class="table100 ver1 m-b-110">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead id="boxes">
                                    <div class="tabel-atas">
                                        <div class="tabel-atas2 row">
                                            <div class="pencarian col-7">
                                                <div class="input-group pencarian mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                                                    <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="per-halaman">
                                                    <p>Rekam per halaman</p>
                                                </div>
                                            </div>
                                            <div class="tombol-catat1 col-3">

                                            </div>
                                            <div class="tombol-catat1 col-2">
                                                <!-- <a href="#">
                                                    <div class="tombol-catat">
                                                        <p><i class="fa-solid fa-plus"></i> Tambah Anggota</p>
                                                    </div>
                                                </a> -->
                                                <!-- <div id="hilang5">
                                                    <a href="#"><i class="fa-solid fa-trash-can" style="color: white;"></i></a>
                                                </div> -->
                                            </div>
                                        </div>
                                        <tr class="row100 head">

                                            <th class="cell100 column1">Nama Agenda</th>
                                            <th class="cell100 column2">Tanggal Mulai</th>
                                            <th class="cell100 column4">Tanggal Akhir</th>
                                        </tr>
                                    </div>
                                </thead>

                                <div class="table100-body js-pscroll" id="checkbox-wrap">
                                    <tbody id="boxes">
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Gaji Bulanan</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Gaji Bulanan</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Gaji Bulanan</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Bonus Gaji</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Bonus Gaji</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Bonus Gaji</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Bonus Gaji</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Listrik</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Listrik</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Listrik</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Listrik</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Listrik</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Listrik</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Listrik</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Listrik</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Listrik</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Listrik</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Listrik</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Listrik</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Listrik</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Listrik</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Listrik</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Listrik</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Listrik</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Listrik</td>
                                            <td class="cell100 column3">10 Maret 2022</td>
                                            <td class="cell100 column4">11 Maret 2022</td>
                                        </tr>
                                    </tbody>
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="laporanTransaksi-gambar1">
            <img src="image/laporanTransaksi-gambar1.svg" alt="">
        </div>
    </section>




    <div class="tambahNamaAgenda-gambar1">
        <img src="image/tambahNamaAgenda-gambar1.svg" alt="">
    </div>
</section>

@endsection