@extends('users.layouts.main')

@section('container')

<section id="ubahTransaksiPemasukan">
    <div class="tombol-kembali">
        <a href="{{ route('laporanTransaksi') }}">
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
                <form action="{{ route('incomeEdit') }}" method="POST">
                    @csrf
                    <label for="date">Tanggal</label>
                    <input class="form-control @error('date') is-invalid @enderror" id="date" name="date"
                        placeholder="pilih tanggal" type="text" autocomplete="off" />
                    @error('date')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="total">Total Pemasukan</label>
                    <input class="tanggal @error('total') is-invalid @enderror" type="number" name="total"
                        placeholder="masukkan pemasukan">
                    @error('total')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="note">Catatan</label>
                    <textarea class="catatan @error('note') is-invalid @enderror" name="note" id="note" cols="30"
                        rows="10" placeholder="tambahkan catatan"></textarea>
                    @error('note')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!-- <input class="catatan" type="text" placeholder="tambahkan catatan"> -->
                    <button class="tombol w-100" type="submit">
                        <div class="tombol2">
                            Simpan
                        </div>
                    </button>
                </form>
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