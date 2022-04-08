@extends('users.layouts.main')

@section('container')

<section id="catatUtang2">
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
    <div class="container">
        <div class="text center row">
            <div>
                <h3 class="judul3">
                    <!-- Catat Utang -->
                    <!-- Catatan -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home2">
                            <h3>Catat Utang</h3>
                        </div>
                        <div class="tab-pane fade" id="pills-profile2">
                            <h3>Catat Bayar</h3>
                        </div>
                    </div>
                </h3>
            </div>
            <div class="kotak2">
                <div class="kotak row">
                    <div class="kotak3 col-xl-6 col-lg-12">
                        <p class="utang"><img src="image/catatUtang2-gambar1.svg" alt=""> Total Utang</p>
                    </div>
                    <div class="kotak3 col-xl-6 col-lg-12">
                        <p class="rupiah">Rp 3.000.000,-</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-10">
                <div class="center">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="btn-group" role="presentation">
                            <button type="button" class="btn active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Utang</button>
                            <button type="button" class="btn" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Bayar</button>
                        </li>
                    </ul>
                </div>
                <div class="registrasi-form">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <form action="" method="POST">
                                <label for="date">Tanggal</label>
                                <input class="form-control" id="date" name="date" placeholder="pilih tanggal" type="text" autocomplete="off" />
                                <label for="total">Jumlah Utang</label>
                                <input class="tanggal" type="number" name="total" placeholder="masukkan jumlah utang">
                                <label for="note">Catatan</label>
                                <textarea class="catatan" name="note" id="note" cols="30" rows="10" placeholder="tambahkan catatan"></textarea>
                                <button class="tombol w-100" type="submit">
                                    <div class="tombol2">
                                        Simpan
                                    </div>
                                </button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <form action="" method="POST">
                                <label for="date">Tanggal</label>
                                <input class="form-control" id="date" name="date" placeholder="pilih tanggal" type="text" autocomplete="off" />
                                <label for="total">Jumlah Terbayar</label>
                                <input class="tanggal" type="number" name="total" placeholder="masukkan jumlah terbayar">
                                <label for="note">Catatan</label>
                                <textarea class="catatan" name="note" id="note" cols="30" rows="10" placeholder="tambahkan catatan"></textarea>
                                <button class="tombol w-100" type="submit">
                                    <div class="tombol2">
                                        Simpan
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="transaksi">
        <div class="limiter">
            <div class="container-table100">
                <div class="bungkus">
                    <div class="wrap-table100">
                        <div class="table100 ver1 m-b-110">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">


                                <thead id="boxes">

                                    <div class="tabel-atas">
                                        <div class="tabel-atas2 row">
                                            <div class="col-2">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-filter"></i></span>
                                                    <input class="form-control" id="date" name="date" placeholder="Tanggal Mulai" type="text" />
                                                </div>
                                                <div class="per-halaman">
                                                    <p>Rekam per halaman</p>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-filter"></i></span>
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

                                                <div id="hilang5">
                                                    <!-- <div id="result"></div> -->
                                                    <a href="#"><i class="fa-solid fa-trash-can" style="color: white;"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                        <tr class="row100 head">
                                            <th class="cell100 column0">
                                                <input class="form-check-input checkbox-1x ml-3" type="checkbox" id="vehicle1" onchange="checkAll(this)" name="chk[]" value="Bike" data-exval="1">
                                            </th>
                                            <th class="cell100 column1">Tanggal</th>
                                            <th class="cell100 column2">Utang</th>
                                            <th class="cell100 column3">Bayar</th>
                                            <th class="cell100 column4">Catatan</th>
                                            <th class="cell100 column4"></th>
                                        </tr>
                                    </div>
                                </thead>


                                <div class="table100-body js-pscroll" id="checkbox-wrap">
                                    <tbody id="boxes">
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">10 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle3" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">11 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 250.000,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">12 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">13 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">14 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">15 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">16 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">17 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">18 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">18 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">18 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">18 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">10 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">10 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">10 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">10 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">10 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">10 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">10 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">10 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">10 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">10 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">10 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">10 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="1" data-exval="1"></td>
                                            <td class="cell100 column1">10 Maret 2022</td>
                                            <td class="cell100 column2">Rp 900.000,-</td>
                                            <td class="cell100 column3">Rp 0,-</td>
                                            <td class="cell100 column4">Gaji Bulanan</td>
                                            <td class="cell100 column5"><a href="#">
                                                    <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </div>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="ubahTransaksiPemasukan-gambar1">
        <img src="image/catatTransaksi-gambar1.svg" alt="">
    </div>
    <div class="ubahTransaksiPemasukan-gambar2">
        <img src="image/catatUtang2-gambar2.svg" alt="">
    </div>

</section>



@endsection