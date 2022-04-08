<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ubah transaksi pemasukan tanggal -->
    <!--formden.js akan membuat output data AJAX-->
    <script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>
    <!-- bootstrap-iso digunakan untuk mengatur tampilan -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <!--Menambahkan libray font awesome karena kita menggunakan ikon untuk tampilannya-->
    <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

    <!-- transaksi start -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/users/transaksi-main.css') }}">
    <!-- tanggal start -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

    <!--Font Awesome (added because you use icons in your prepend/append)-->
    <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Inline CSS based on choices in "Settings" tab -->
    <style>
        .bootstrap-iso .formden_header h2,
        .bootstrap-iso .formden_header p,
        .bootstrap-iso form {
            font-family: Arial, Helvetica, sans-serif;
            color: black
        }

        .bootstrap-iso form button,
        .bootstrap-iso form button:hover {
            color: white !important;
        }

        .asteriskField {
            color: red;
        }
    </style>
    <!-- tanggal end -->

    <!-- transaksi end -->

    <link href=" assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    {{--
    <!-- Bootstrap CSS --> --}}

    <link rel="stylesheet" href="{{ asset('assets/css/users/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/users/style3.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/users/style.css') }}"> -->


    <title>Document</title>
</head>

<body>

    <div class="">
        @yield('container')
    </div>


    <!-- ubah transaksi pemasukan tanggal start -->
    <!-- Menambahkan jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Menambahakan Date Range Picker -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
    <!-- ubah transaksi pemasukan tanggal end -->

    <!-- untuk catatTransaksi start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- untuk catatTransaksi end -->

    <!-- catat utang2 -->
    <script>
        $('#pills-home-tab').click(function() {
            $('#pills-home2').addClass('show active')
            $('#pills-profile2').removeClass('show active')
            // console.log('tes1');
        })
        $('#pills-profile-tab').click(function() {
            $('#pills-home2').removeClass('show active')
            $('#pills-profile2').addClass('show active')

        })
    </script>


    <script>
        //tabel transaksi
        $('.js-pscroll').each(function() {
            var ps = new PerfectScrollbar(this);

            $(window).on('resize', function() {
                ps.update();
            })
        });
    </script>



    <!-- bar page start -->
    <script src="{{ asset('assets/js/transaksiJs/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/transaksiJs/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/transaksiJs/dataTables.bootstrap.js') }}"></script>
    <!-- <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
    </script> -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable({
                "lengthMenu": [
                    [-1, 10, 25, 50],
                    ["All", 10, 25, 50]
                ] //buat nambahin tambol  filter all
            });

        });
    </script>
    <!-- bar page end -->



    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

    <script>
        $(document).ready(function() {
            var date_input = $('input[id="date"]');
            var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'mm/dd/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
    </script>

    <!-- hilangkan tombol hapus -->
    <script type="text/javascript">
        var checked = [];
        var checkedAll = [];

        $(document).ready(function (){
            // function delete() {
            //     var _token = "{{ csrf_token() }}";
            //     var url = '{!! route('deleteAll') !!}';
            //     $.ajax({
            //         url: url,
            //         type:'DELETE',
            //         data: {_token:_token, data:checked},
            //         dataType: 'JSON',
            //         success: function(data) {
            //             table.ajax.reload();
            //             if (data.status == 'success') {
            //                 alert('Success delete transaction');
            //             } else {
            //                 alert('Failed delete transaction');
            //             }
            //         },
            //     }); 
            // }
            $("#dataTables-example .checkData").each(function (){
                console.log($(this).val());
                checkedAll.push($(this).val());
            });
        });

        function arrayRemove(arr, value){
            return arr.filter(function(ele){
                return ele != value;
            });
        }

        function checkAll(ele) {
            var checkboxes = document.getElementsByTagName('input');
            let check = document.querySelectorAll('input[type=checkbox]');
            let hilang5 = document.getElementById('hilang5');

            console.log(check);
            // console.log(checkboxes);/
            if (ele.checked) {

                hilang5.classList.add('hilang5');
                console.log("benar");

                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = true;
                        // checkAll.push(checkboxes[i].value);
                        checked = checkedAll;
                    }
                }
            } else {

                hilang5.classList.remove('hilang5');
                console.log("salah");

                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = false;
                        checked = [];
                    }
                }
            }
            console.log(checked);
        }

        // $(document).ready(function() {
        //     $("#boxes input[type='checkbox']").click(function() {
        //         var total = 0;
        //         $("#boxes input[type='checkbox']:checked").each(function() {
        //             total += parseInt($(this).data("exval"), 10);
        //         });
        //         $("#result").text(total);

        //         var x = total;
        //         let hilang5 = document.getElementById('hilang5')
        //         if (x > 0) {
        //             hilang5.classList.add('hilang5');
        //             console.log("benar");
        //         } else {
        //             hilang5.classList.remove('hilang5');
        //             console.log("salah")
        //         }

        //     });
        // });
        

        $(document).ready(function() {
            var total = 0;
            $("#dataTables-example").on('click', "#boxes input[type='checkbox']",function() {
                if (jQuery.inArray($(this).val(), checked) !== -1) {
                    checked = arrayRemove(checked, $(this).val());
                }else{
                    if($(this).prop("checked") == true){
                        checked.push($(this).val());
                    }
                    else if($(this).prop("checked") == false){
                        checked = arrayRemove(checked, $(this).val());
                    }
                }
                console.log(checked);
                
                // $("#boxes input[type='checkbox']:checked").each(function() {
                //     total += parseInt($(this).data("exval"), 10);
                // });
                // $("#result").text(total);

                // var x = total;
                let hilang5 = document.getElementById('hilang5')
                if (checked.length > 0) {
                    hilang5.classList.add('hilang5');
                    console.log("benar");
                } else {
                    hilang5.classList.remove('hilang5');
                    console.log("salah")
                }

            });
        });
    </script>
</body>

</html>