@extends('users.layouts.main')

@section('container')

<section id="catatTransaksi">
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
                <h3 class="judul3">Catat Transaksi</h3>
            </div>
            <div class="col-lg-7 col-md-10">
                <div class="center">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="btn-group" role="presentation">
                            <button type="button" class="btn active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Pemasukan</button>
                            <button type="button" class="btn" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Pengeluaran</button>
                        </li>
                    </ul>
                </div>
                <div class="registrasi-form">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <form action="">
                                <label for="">Tanggal</label>
                                <input class="form-control" id="date" name="date" placeholder="pilih tanggal" type="text" />
                                <label for="">Total Pemasukan</label>
                                <input class="tanggal" type="text" placeholder="masukkan pemasukan">
                                <label for="">Catatan</label>
                                <textarea class="catatan" name="" id="" cols="30" rows="10" placeholder="tambahkan catatan"></textarea>
                            </form>
                            <div class="tombol">
                                <a href="#">
                                    <div class="tombol2">
                                        Simpan
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <form action="">
                                <label for="">Tanggal</label>
                                <input class="form-control" id="date" name="date" placeholder="pilih tanggal" type="text" />
                                <label for="">Total Pengeluaran</label>
                                <input class="tanggal" type="text" placeholder="masukkan pengeluaran">
                                <label for="">Catatan</label>
                                <textarea class="catatan" name="" id="" cols="30" rows="10" placeholder="tambahkan catatan"></textarea>
                            </form>
                            <div class="tombol">
                                <a href="#">
                                    <div class="tombol2">
                                        Simpan
                                    </div>
                                </a>
                            </div>
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
        <img src="image/catatTransaksi-gambar2.svg" alt="">
    </div>
</section>

@endsection