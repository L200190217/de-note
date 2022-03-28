@extends('users.layouts.main')

@section('container')

<section id="transaksi">
    <!-- tgl2 -->





    <div class="card-up aqua-gradient">
        <h1>Transaksi<img class="kuning1" src="image/kuning.png" alt=""></h1>
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
                                <p class="rupiah-masuk">Rp 5.000.000,-</p>
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
                                <h3 class="text">Total Pemasukan</h3>
                                <p class="rupiah-keluar">Rp 5.000.000,-</p>
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
                                <img src="image/transaksi-dollar.png" alt="">
                                <h3 class="text">Total Pemasukan</h3>
                                <p class="rupiah-total">Rp 5.000.000,-</p>
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
            <div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <div class="">
                        <table>
                            <thead>
                                <div class="tabel-atas">
                                    <div class="tabel-atas2 row">
                                        <div class="col-2">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-filter"></i></span>
                                                <!-- <input id="input-date" type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"> -->
                                                <input class="form-control" id="date" name="date" placeholder="Masukan" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-filter"></i></span>
                                                <input id="input-date" type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="pencarian col-4">
                                            <div class="input-group pencarian mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                                                <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <a href="#">
                                                <div class="tombol-catat">
                                                    <p>Catat Transaksi</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <a href="#">
                                                <div class="tombol-laporan">
                                                    <p>Laporan Transaksi</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <tr class="row100 head">
                                        <th class="cell100 column0"><input class="form-check-input checkbox-1x ml-3" type="checkbox" id="vehicle1" onchange="checkAll(this)" name="chk[]" value="Bike"></th>
                                        <th class="cell100 column1">Tanggal</th>
                                        <th class="cell100 column2">Pemasukan</th>
                                        <th class="cell100 column3">Pengeluaran</th>
                                        <th class="cell100 column4">Catatan</th>
                                        <th class="cell100 column4"></th>
                                    </tr>
                                </div>
                            </thead>
                        </table>
                    </div>

                    <div class="table100-body js-pscroll">
                        <table>
                            <tbody>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">10 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5">
                                        <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-titik3.svg" alt=""></div>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>


    <!-- tanggal start -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

    <script>
        $(document).ready(function() {
            var date_input = $('input[name="date"]'); //our date input has the name "date"
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
            var date_input = $('input[name="date-akhir"]'); //our date input has the name "date"
            var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'mm/dd/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
    </script>

    <script type="text/javascript">
        function checkAll(ele) {
            var checkboxes = document.getElementsByTagName('input');
            if (ele.checked) {
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = true;
                    }
                }
            } else {
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = false;
                    }
                }
            }
        }
    </script>
    <!-- tanggal end -->


</section>

@endsection