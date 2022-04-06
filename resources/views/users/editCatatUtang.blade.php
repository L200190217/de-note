@extends('users.layouts.main')

@section('container')

<section id="editCatatUtang">
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
                <h3 class="judul3">Edit Utang</h3>
            </div>
            <div class="registrasi-form col-lg-7 col-md-10">
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
        </div>
    </div>

    <div class="catatUtang-gambar2">
        <img src="image/catatUtang-gambar2.svg" alt="">
    </div>
</section>

@endsection