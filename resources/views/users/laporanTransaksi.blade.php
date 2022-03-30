@extends('users.layouts.main')

@section('container')

<section id="laporanTransaksi">
    <div class="laporanTransaksi-gambar2">
        <img src="image/laporanTransaksi-gambar2.svg" alt="">
    </div>
    <div class="tombol-kembali">
        <a href="#">
            <table>
                <tr>
                    <td><img src="image/kembali.svg" alt=""></td>
                    <td>kembali</td>
                </tr>
            </table>
        </a>
    </div>
    <div class="kotak">
        <h1 class="judul">Laporan Transaksi</h1>

        <div class="container">
            <div class="products-card-1 row">
                <div class="products-card col-lg-4 col-md-6">
                    <div class="products-card-2">
                        <div class="products-card-3">
                            <div class="products-judul2">
                                <img src="image/laporanTransaksi-profits 2.svg" alt="">
                                <h3 class="text">Total Pemasukan</h3>
                                <p class="rupiah">Rp 5.000.000,-</p>
                                <img class="foto-g" src="image/laporanTransaksi-profits 1.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="products-card col-lg-4 col-md-6">
                    <div class="products-card-2">
                        <div class="products-card-3">
                            <div class="products-judul2">
                                <img src="image/laporanTransaksi-loss 2.svg" alt="">
                                <h3 class="text">Total Pengeluaran</h3>
                                <p class="rupiah">Rp 1.000.000,-</p>
                                <img class="foto-g" src="image/laporanTransaksi-loss 1.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="products-card col-lg-4 col-md-6">
                    <div class="products-card-2">
                        <div class="products-card-3">
                            <div class="products-judul2">
                                <img src="image/laporanTransaksi-dollar 2.svg" alt="">
                                <h3 class="text">Total Keseluruhan</h3>
                                <p class="rupiah">Rp 4.000.000,-</p>
                                <img class="foto-g" src="image/laporanTransaksi-dollar 1.svg" alt="">
                            </div>

                        </div>
                    </div>
                </div>


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
                                        <div class="col-2">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-filter"></i></span>
                                                <!-- <input id="input-date" type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"> -->
                                                <input class="form-control" id="date" name="date" placeholder="Tanggal Mulai" type="text" />
                                            </div>
                                            <div class="per-halaman">
                                                <p>Rekam per halaman</p>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-filter"></i></span>
                                                <!-- <input id="input-date" type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"> -->
                                                <input class="form-control" id="date" name="date" placeholder="Tanggal Akhir" type="text" />
                                            </div>
                                        </div>
                                        <div class="pencarian col-6">
                                            <div class="input-group pencarian mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                                                <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="tombol-catat1 col-2">
                                            <a href="#">
                                                <div class="tombol-catat">
                                                    <p><img src="image/laporanTransaksi-print.svg" alt="">Cetak</p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <tr class="row100 head">
                                        <th class="cell100 column1">Tanggal</th>
                                        <th class="cell100 column2">Pemasukan</th>
                                        <th class="cell100 column3">Pengeluaran</th>
                                        <th class="cell100 column4">Catatan</th>
                                    </tr>
                                </div>
                            </thead>


                            <div class="table100-body js-pscroll" id="checkbox-wrap">
                                <tbody>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">10 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">11 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">12 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">13 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">14 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">15 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">16 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">17 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">18 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">19 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">20 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">30 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">10 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">10 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">10 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">10 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">10 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">10 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">10 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">10 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">10 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">10 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">10 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">10 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">10 Maret 2022</td>
                                        <td class="cell100 column2">Rp 900.000,-</td>
                                        <td class="cell100 column3">Rp 0,-</td>
                                        <td class="cell100 column4">Gaji Bulanan</td>
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

@endsection