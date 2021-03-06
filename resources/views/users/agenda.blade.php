@extends('users.layouts.main')

@section('container')

<section id="agenda">
    <div class="gambar2">
        <img src="image/agenda-gambar2.svg" alt="">
    </div>

    <div class="bg-biru">
        <h3 class="judul2"><img class="gambar4" src="image/agenda-gambar4.svg" alt="">Agenda <img class="gambar5" src="image/agenda-gambar3.svg" alt=""></h3>

        <div class="container">
            <div class="kotak3">
                <div class="row">
                    <div class="kotak2 col-lg-5 col-nd-12">
                        <img src="image/agenda-foto1.svg" alt="">
                    </div>
                    <div class="kotak col-lg-7 col-nd-12">
                        <p class="text-lg2">Total Iuran</p>
                        <p class="rupiah">Rp 3.000.000,-</p>
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
                                            <a href="#">
                                                <div class="tombol-catat">
                                                    <p><i class="fa-solid fa-plus"></i> Catat Iuran</p>
                                                </div>
                                            </a>
                                            <div id="hilang5">
                                                <a href="#"><i class="fa-solid fa-trash-can" style="color: white;"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                    <tr class="row100 head">
                                        <th class="cell100 column0">
                                            <input class="form-check-input checkbox-1x ml-3" type="checkbox" id="vehicle1" onchange="checkAll(this)" name="chk[]" value="Bike" data-exval="1">
                                        </th>
                                        <th class="cell100 column1">Agenda</th>
                                        <th class="cell100 column2">Durasi</th>
                                        <th class="cell100 column3">Jumlah Anggota</th>
                                        <th class="cell100 column4"></th>
                                    </tr>
                                </div>
                            </thead>


                            <div class="table100-body js-pscroll" id="checkbox-wrap">
                                <tbody id="boxes">
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 2</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">12 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">19 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="1" data-exval="1"></td>
                                        <td class="cell100 column1">Agenda 1</td>
                                        <td class="cell100 column3">10 hari lagi</td>
                                        <td class="cell100 column2">10 anggota</td>
                                        <td class="cell100 column4">
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img class="transaksi-titik" src="image/transaksi-edit.svg" alt="">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#1">Lihat Item</a></li>
                                                        <li><a class="dropdown-item" href="#2">Edit Agenda</a></li>
                                                    </ul>
                                                </div>
                                            </div>
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

    <div class="gambar3">
        <img src="image/agenda-gambar1.svg" alt="">
    </div>

</section>

@endsection