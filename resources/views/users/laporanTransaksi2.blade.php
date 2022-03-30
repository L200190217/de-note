@extends('users.layouts.main')

@section('container')
<section id="transaksi">
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <div class="tabel-atas">
                                <div class="tabel-atas2 row">
                                    <div class="col-2">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-filter"></i></span>
                                            <input id="input-date" type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="per-halaman">
                                            <p>Rekam per halaman</p>
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
                                    <div class="tombol-catat1 col-2">
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
                                        <button id="hilang">hapus</button>
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


                        <div class="table100-body js-pscroll" id="checkbox-wrap">
                            <tbody>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle2" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle3" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">11 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5"><a href="#">
                                            <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">19 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5"><a href="#">
                                            <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">20 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5"><a href="#">
                                            <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
                                    <td class="cell100 column1">30 Maret 2022</td>
                                    <td class="cell100 column2">Rp 900.000,-</td>
                                    <td class="cell100 column3">Rp 0,-</td>
                                    <td class="cell100 column4">Gaji Bulanan</td>
                                    <td class="cell100 column5"><a href="#">
                                            <div class="transaksi-titik2"> <img class="transaksi-titik" src="image/transaksi-edit.svg" alt=""></div>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="row100 body">
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
                                    <td class="cell100 column0"><input class="form-check-input ml-3" type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
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
</section>





<script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>


<!-- tanggal start -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

<script>
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

<!-- bar page start -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.js"></script>
<script src="js/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
</script>
<script src="assets/js/anchor.min.js"></script>
<!-- bar page end -->

<!-- hilangkan tombol hapus -->

<script>
    // checkbox
    $('input[type="checkbox"]').click(function() {
        let hilang = document.getElementById('hilang')
        if ($(this).prop("checked") == true) {
            // console.log("Checkbox is checked.");
            hilang.classList.add('hilang');
        } else if ($(this).prop("checked") == false) {
            hilang.classList.remove('hilang');
            // console.log("Checkbox is unchecked.");
        }
    });
</script>




@endsection