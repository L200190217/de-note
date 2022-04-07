@extends('users.layouts.main')

@section('container')

<section id="transaksi">

    <div class="card-up aqua-gradient">
        <h1>Transaksi<img class="kuning1" src="image/kuning.svg" alt=""></h1>
        <img class="kuning2" src="image/kuning.png" alt="">

        <div class="container">
            <div class="products-card-1 row">

                <div class="products-card col-lg-4 col-md-6">
                    <div class="products-card-2">
                        <img src="image/our-products1.png" alt="" class="products-card-2-foto">
                        <div class="products-card-3">
                            <div class="products-judul2">
                                <img src="image/transaksi-profits.png" alt="">
                                <h3 class="text">Total Pemasukan</h3>
                                <p class="rupiah-masuk">Rp {{ $jumlahIncome }},-</p>
                                <img class="foto-g" src="image/transaksi-galaeri1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="products-card col-lg-4 col-md-6">
                    <div class="products-card-2">
                        <img src="image/our-products2.png" alt="" class="products-card-2-foto">
                        <div class="products-card-3">
                            <div class="products-judul2">
                                <img src="image/transaksi-loss.png" alt="">
                                <h3 class="text">Total Pengeluaran</h3>
                                <p class="rupiah-keluar">Rp {{ $jumlahOutcome }},-</p>
                                <img class="foto-g" src="image/transaksi-galaeri2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="products-card col-lg-4 col-md-6">
                    <div class="products-card-2">
                        <img src="image/our-products3.png" alt="" class="products-card-2-foto">
                        <div class="products-card-3">
                            <div class="products-judul2">
                                <img src="image/transaksi-dollar.svg" alt="">
                                <h3 class="text">Total Keseluruhan</h3>
                                <p class="rupiah-total">Rp {{ $jumlah }},-</p>
                                <img class="foto-g" src="image/transaksi-galaeri3.png" alt="">
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


                            <thead id="boxes">

                                <div class="tabel-atas">
                                    <div class="tabel-atas2 row">
                                        <div class="col-2">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fa-solid fa-filter"></i></span>
                                                <input class="form-control" id="date" name="date"
                                                    placeholder="Tanggal Mulai" type="text" />
                                            </div>
                                            <div class="per-halaman">
                                                <p>Rekam per halaman</p>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fa-solid fa-filter"></i></span>
                                                <input class="form-control" id="date" name="date"
                                                    placeholder="Tanggal Mulai" type="text" />
                                            </div>
                                        </div>
                                        <div class="pencarian col-4">
                                            <div class="input-group pencarian mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fa-solid fa-magnifying-glass"></i></span>
                                                <input type="text" class="form-control" placeholder="Search"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="tombol-catat1 col-2">
                                            <a href="{{ route('transaction') }}">
                                                <div class="tombol-catat">
                                                    <p>Catat Transaksi</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <a href="{{ route('laporanTransaksi') }}">
                                                <div class="tombol-laporan">
                                                    <p>Laporan Transaksi</p>
                                                </div>
                                            </a>
                                            <div id="hilang5">
                                                <!-- <div id="result"></div> -->
                                                <a href="#"><i class="fa-solid fa-trash-can"
                                                        style="color: white;"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                    <tr class="row100 head">
                                        <th class="cell100 column0">
                                            <input class="form-check-input checkbox-1x ml-3" type="checkbox"
                                                id="vehicle1" onchange="checkAll(this)" name="chk[]" value="Bike"
                                                data-exval="1">
                                        </th>
                                        <th class="cell100 column1">Tanggal</th>
                                        <th class="cell100 column2">Pemasukan</th>
                                        <th class="cell100 column3">Pengeluaran</th>
                                        <th class="cell100 column4">Catatan</th>
                                        <th class="cell100 column4"></th>
                                    </tr>
                                </div>
                            </thead>


                            <div class="table100-body js-pscroll" id="checkbox-wrap">
                                <tbody id="boxes">
                                    @foreach ($transaksi as $tr)
                                    <tr class="row100 body">
                                        <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox"
                                                id="vehicle2" name="chk[]" value="{{ $tr->id }}" data-exval="1"></td>
                                        <td class="cell100 column1">{{ $tr->date }}</td>
                                        <td class="cell100 column2">Rp {{ $tr->total_income }},-</td>
                                        <td class="cell100 column3">Rp {{ $tr->total_outcome }},-</td>
                                        <td class="cell100 column4">{{ $tr->note }}</td>
                                        <td class="cell100 column5"><a href="<?php 
                                            if($tr->status == 'Pemasukan'){
                                                echo route('editIncome', ['transaksi' => $tr->id]);
                                            }else{
                                                echo route('editOutcome', ['transaksi' => $tr->id]);
                                            }
                                        ?>">
                                                <div class="transaksi-titik2"> <img class="transaksi-titik"
                                                        src="image/transaksi-edit.svg" alt=""></div>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </div>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>


    <script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script> -->


    <!-- tanggal start -->
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script> -->

    <!-- Include Date Range Picker -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" /> -->

    <!-- <script>
        $(document).ready(function() {
            var date_input = $('input[name="date"]');
            var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'mm/dd/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            var date_input = $('input[name="date-akhir"]');
            var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'mm/dd/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
    </script> -->


    <!-- tanggal end -->

    <!-- bar page start -->
    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.bootstrap.js"></script> -->
    <!-- <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable({
                "lengthMenu": [
                    [-1, 10, 25, 50],
                    ["All", 10, 25, 50]
                ] //buat nambahin tambol  filter all
            });

        });
    </script> -->
    <!-- <script src="assets/js/anchor.min.js"></script> -->
    <!-- bar page end -->

    <!-- hilangkan tombol hapus -->
    <!-- <script type="text/javascript">
        function checkAll(ele) {
            var checkboxes = document.getElementsByTagName('input');
            let check = document.querySelectorAll('input[type=checkbox]');

            let hilang5 = document.getElementById('hilang5')

            console.log(check);
            // console.log(checkboxes);/
            if (ele.checked) {

                hilang5.classList.add('hilang5');
                console.log("benar");

                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = true;
                    }
                }
            } else {

                hilang5.classList.remove('hilang5');
                console.log("salah");

                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = false;
                    }
                }
            }


        }

        $(document).ready(function() {
            $("#boxes input[type='checkbox']").click(function() {
                var total = 0;
                $("#boxes input[type='checkbox']:checked").each(function() {
                    total += parseInt($(this).data("exval"), 10);
                });
                $("#result").text(total);

                var x = total;
                let hilang5 = document.getElementById('hilang5')
                if (x > 0) {
                    hilang5.classList.add('hilang5');
                    console.log("benar");
                } else {
                    hilang5.classList.remove('hilang5');
                    console.log("salah")
                }

            });
        });
    </script> -->



</section>

@endsection