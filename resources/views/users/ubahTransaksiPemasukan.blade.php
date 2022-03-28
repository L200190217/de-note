@extends('users.layouts.main')

@section('container')

<section id="ubahTransaksiPemasukan">
    <div class="tombol-kembali">
        <a href="#">
            <table>
                <tr>
                    <td><img src="image/kembali.svg" alt=""></td>
                    <td>kembali</td>
                </tr>
            </table>
        </a>
        <!-- <tr>
            <a href="">
                <td><img src="image/kembali.svg" alt=""></td>
                <td>&ensp;Log In</td>
            </a>
        </tr> -->
    </div>
    <div class="container">
        <div class="text center row">
            <div>
                <h3 class="judul3">Ubah Transaksi</h3>
                <h3 class="judul3-1">Pemasukan.</h3>
            </div>
            <div class="registrasi-form col-lg-7 col-md-10">
                <form action="">
                    <label for="">Tanggal</label>
                    <input class="form-control" id="date" name="date" placeholder="pilih tanggal" type="text" />
                    <label for="">Total Pemasukan</label>
                    <input class="tanggal" type="text" placeholder="masukkan pemasukan">
                    <label for="">Catatan</label>
                    <textarea class="catatan" name="" id="" cols="30" rows="10" placeholder="tambahkan catatan"></textarea>
                    <!-- <input class="catatan" type="text" placeholder="tambahkan catatan"> -->
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
    <div class="ubahTransaksiPemasukan-gambar1">
        <img src="image/ubahTransaksiPemasukan-gambar1.svg" alt="">
    </div>
    <div class="ubahTransaksiPemasukan-gambar2">
        <img src="image/ubahTransaksiPemasukan-gambar2.svg" alt="">
    </div>
</section>

@endsection