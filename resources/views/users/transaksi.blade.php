@extends('users.layouts.main')

@section('container')

<section id="transaksi">
    <!-- tgl2 -->
    <div class=" mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-filter"></i></span>
        <input id="input-date" type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-filter"></i></span>
        <input id="input-date" type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>




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
                                            <div class="bootstrap-iso">
                                                <div class="container-fluid">
                                                    <form class="form-horizontal" method="post">
                                                        <div class="form-group ">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-filter">
                                                                    </i>
                                                                </div>
                                                                <input class="form-control" id="date" name="date" placeholder="Tanggal Mulai" type="text" />
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="bootstrap-iso">
                                                <div class="container-fluid">
                                                    <form class="form-horizontal" method="post">
                                                        <div class="form-group ">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-filter">
                                                                    </i>
                                                                </div>
                                                                <input class="form-control" id="date-akhir" name="date-akhir" placeholder="Tanggal Akhir" type="text" />
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pencarian col-2">
                                            <input class="Search" type="Search" placeholder="Search">
                                        </div>
                                        <div class="col-3">
                                            <a href="#">
                                                <div class="tombol-laporan">
                                                    <p>Laporan Transaksi</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <a href="#">
                                                <div class="tombol-catat">
                                                    <p>Catat Transaksi</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <tr class="row100 head">
                                        <th class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></th>
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
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Mind & Body</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                    <td class="cell100 column4">Adam Stewart</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Crit Cardio</td>
                                    <td class="cell100 column2">Gym</td>
                                    <td class="cell100 column3">9:00 AM - 10:00 AM</td>
                                    <td class="cell100 column4">Aaron Chapman</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Wheel Pose Full Posture</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">7:00 AM - 8:30 AM</td>
                                    <td class="cell100 column4">Donna Wilson</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Playful Dancer's Flow</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                    <td class="cell100 column4">Donna Wilson</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Zumba Dance</td>
                                    <td class="cell100 column2">Dance</td>
                                    <td class="cell100 column3">5:00 PM - 7:00 PM</td>
                                    <td class="cell100 column4">Donna Wilson</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Cardio Blast</td>
                                    <td class="cell100 column2">Gym</td>
                                    <td class="cell100 column3">5:00 PM - 7:00 PM</td>
                                    <td class="cell100 column4">Randy Porter</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Pilates Reformer</td>
                                    <td class="cell100 column2">Gym</td>
                                    <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                    <td class="cell100 column4">Randy Porter</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Supple Spine and Shoulders</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">6:30 AM - 8:00 AM</td>
                                    <td class="cell100 column4">Randy Porter</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Yoga for Divas</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                                    <td class="cell100 column4">Donna Wilson</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Virtual Cycle</td>
                                    <td class="cell100 column2">Gym</td>
                                    <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                    <td class="cell100 column4">Randy Porter</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Like a butterfly</td>
                                    <td class="cell100 column2">Boxing</td>
                                    <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                                    <td class="cell100 column4">Aaron Chapman</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Mind & Body</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                    <td class="cell100 column4">Adam Stewart</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Crit Cardio</td>
                                    <td class="cell100 column2">Gym</td>
                                    <td class="cell100 column3">9:00 AM - 10:00 AM</td>
                                    <td class="cell100 column4">Aaron Chapman</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Wheel Pose Full Posture</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">7:00 AM - 8:30 AM</td>
                                    <td class="cell100 column4">Donna Wilson</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Playful Dancer's Flow</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                    <td class="cell100 column4">Donna Wilson</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Zumba Dance</td>
                                    <td class="cell100 column2">Dance</td>
                                    <td class="cell100 column3">5:00 PM - 7:00 PM</td>
                                    <td class="cell100 column4">Donna Wilson</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Cardio Blast</td>
                                    <td class="cell100 column2">Gym</td>
                                    <td class="cell100 column3">5:00 PM - 7:00 PM</td>
                                    <td class="cell100 column4">Randy Porter</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Pilates Reformer</td>
                                    <td class="cell100 column2">Gym</td>
                                    <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                    <td class="cell100 column4">Randy Porter</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Supple Spine and Shoulders</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">6:30 AM - 8:00 AM</td>
                                    <td class="cell100 column4">Randy Porter</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Yoga for Divas</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                                    <td class="cell100 column4">Donna Wilson</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
                                </tr>

                                <tr class="row100 body">
                                    <td class="cell100 column0"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">Virtual Cycle</td>
                                    <td class="cell100 column2">Gym</td>
                                    <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                    <td class="cell100 column4">Randy Porter</td>
                                    <td class="cell100 column5"> <img src="image/transaksi-titik3.svg" alt=""> </td>
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
    <!-- tanggal end -->


</section>

@endsection