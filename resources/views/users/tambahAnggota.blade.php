@extends('users.layouts.main')

@section('container')

<section id="tambahAnggota">
    <div class="catatUtang-gambar1">
        <img src="image/catatUtang-gambar1.svg" alt="">
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
    <div class="container">
        <div class="text center row">
            <div>
                <h3 class="judul3">Tambah Anggota</h3>
            </div>
            <div class="registrasi-form col-lg-7 col-md-10">
                <form action="" method="POST">
                    <label for="date">Tanggal</label>
                    <input class="form-control" id="date" name="date" placeholder="pilih tanggal" type="text" autocomplete="off" />
                    <label for="total">Total Iuran</label>
                    <input class="tanggal" type="number" name="total" placeholder="masukkan iuran">
                    <label for="total">Nama Pelanggan</label>
                    <div class="bagitabel row">
                        <div class="col-10">
                            <input class="pelanggan" type="text" name="" placeholder="tambahkan nama pelanggan">
                        </div>
                        <div class="tombol3-1 col-2">
                            <a class="" href="">
                                <div class="tombol3">
                                    <p><img src="image/catatUtang-plus.svg" alt=""></p>
                                </div>
                            </a>
                        </div>
                    </div>
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

    <div class="catatUtang-gambar2">
        <img src="image/catatUtang-gambar2.svg" alt="">
    </div>
</section>

@endsection