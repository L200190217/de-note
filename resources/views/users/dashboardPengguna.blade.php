@extends('users.layouts.main')

@section('container')

<section id="dashboardPengguna">
    <div class="samping-menu">
        <div class="brand-name">
            <h1>De Note.</h1>
        </div>

        <div class="garis1">
            <div class="garis">

            </div>
        </div>

        <div class="kotak2">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="spasi" role="presentation"><a class="active" href="" id="pills-home-tab3"
                        data-bs-toggle="pill" data-bs-target="#pills-home3" type="button" role="tab"
                        aria-controls="pills-home" aria-selected="true"><img src="image/dashboardPengguna-dashboard.svg"
                            alt=""><span>Dashboard</span></a></li>
                <li role="presentation"><a href="" id="pills-profile-tab3" data-bs-toggle="pill"
                        data-bs-target="#pills-profile3" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false"><img src="image/dashboardPengguna-file.svg" alt=""><span>Data
                            Pengguna</span></a></li>

                <li class="setting" role="presentation"><a href="" id="pills-profile-tab3" data-bs-toggle="pill"
                        data-bs-target="#pills-setting3" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false"><img src="image/dashboardPengguna-setting.svg"
                            alt=""><span>Setting</span></a></li>
                <li><a href=""><img src="image/dashboardPengguna-keluar.svg" alt=""><span>keluar</span></a></li>
            </ul>
        </div>

        <div class="garis1">
            <div class="garis2">

            </div>
        </div>
        <p class="copy">Copyright © 2022 De Note.
            | All rights reserved</p>
    </div>

    <div class="container2">

        <div class="registrasi-form">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home3" role="tabpanel2"
                    aria-labelledby="pills-home-tab3">

                    <div class="header1">
                        <div class="navbar1">
                            <div class="search">
                                <p>Selamat Datang, <b>Sahira</b></p>
                            </div>
                            <div class="user">
                                <p class="nama"><span>Sahira Bachdim</span></p>
                                <p class="admin"><span>Administrator</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="konten">
                        <p class="dash">Dashboard</p>
                        <div class="kartu">
                            <div class="kartu2">
                                <div class="">
                                    <img src="image/dashboardPengguna-Users.svg" alt="">
                                </div>
                                <div class="">
                                    <p class="total">Total Pengguna</p>
                                    <p class="jumlah">{{ $user->count() }}</p>
                                </div>

                            </div>
                            {{-- <div class="kartu2">
                                <div class="">
                                    <img src="image/dashboardPengguna-Users.svg" alt="">
                                </div>
                                <div class="">
                                    <p class="total">Total Pengunjung</p>
                                    <p class="jumlah">200</p>
                                </div>
                            </div> --}}
                        </div>
                        <p class="dash">History</p>
                        <div class="konten2">
                            <div class="tabel1">
                                <div class="bungkus">
                                    <div class="text3">
                                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                            <li class="btn-group" role="presentation">
                                                <button type="button" class="btn active" id="pills-home-tab"
                                                    data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
                                                    role="tab" aria-controls="pills-home" aria-selected="true">Data
                                                    Pengguna</button>
                                                {{-- <button type="button" class="btn" id="pills-profile-tab"
                                                    data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
                                                    role="tab" aria-controls="pills-profile" aria-selected="false">Data
                                                    Pengunjung</button> --}}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="registrasi-form">
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                                aria-labelledby="pills-home-tab">
                                                <table>
                                                    <tr>
                                                        <th>Today</th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    @foreach ($user as $us)
                                                    <tr>
                                                        <td>{{ $us->name }}</td>
                                                        <td>{{ $us->email }}</td>
                                                        <td>2 menit lalu</td>
                                                    </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                            {{-- <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                aria-labelledby="pills-profile-tab">
                                                <table>
                                                    <tr>
                                                        <th>Today</th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Jane Maria</td>
                                                        <td>2 menit lalu</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jane Maria</td>
                                                        <td>2 menit lalu</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jane Maria</td>
                                                        <td>2 menit lalu</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jane Maria</td>
                                                        <td>2 menit lalu</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jane Maria</td>
                                                        <td>2 menit lalu</td>
                                                    </tr>
                                                </table>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade show" id="pills-profile3" role="tabpanel2" aria-labelledby="pills-home-tab3">
                    <div class="header1">
                        <div class="navbar1">
                            <div class="search">
                                <p>Data Pengguna</p>
                            </div>
                            <div class="user">
                                <p class="nama"><span>Sahira Bachdim</span></p>
                                <p class="admin"><span>Administrator</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="konten">
                        <form action="">
                            <div class="employee">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping"><button><i
                                                class="fa-solid fa-magnifying-glass"></i></button></span>
                                    <input type="text" class="form-control" placeholder="Employee" aria-label="Username"
                                        aria-describedby="addon-wrapping">
                                    <span class="input-group-text" id="addon-wrapping"><button><i
                                                class="fa-solid fa-xmark"></i></button></span>
                                </div>
                            </div>
                        </form>
                        <div class="konten2">
                            <div class="tabel2">
                                <div class="bungkus">
                                    <div class="registrasi-form">
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                                aria-labelledby="pills-home-tab">
                                                <table>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Email</th>
                                                        <th>Username</th>
                                                        <th>No HP</th>
                                                    </tr>
                                                    @foreach ($user as $us)
                                                    <tr>
                                                        <td>{{ $us->name }}</td>
                                                        <td>{{ $us->email }}</td>
                                                        <td>{{ $us->username }}</td>
                                                        <td>{{ $us->no_telp }}</td>
                                                    </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade show" id="pills-setting3" role="tabpanel2" aria-labelledby="pills-home-tab3">
                    <div id="settingAkun">
                        <div class="header1">
                            <div class="navbar1">
                                <div class="search">
                                    <p>Selamat Datang, <b>Sahira</b></p>
                                </div>
                                <div class="user">
                                    <p class="nama"><span>Sahira Bachdim</span></p>
                                    <p class="admin"><span>Administrator</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="konten">
                            <div class="konten2">
                                <div class="tabel1">
                                    <div class="text3">
                                        <p>Setting Profil</p>
                                    </div>
                                    <form class="inputan" action="" method="POST">
                                        <table>
                                            <tr>
                                                <td class="name">Email</td>
                                                <td><input type="text" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="name">Username</td>
                                                <td><input type="text" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="name">No Hp</td>
                                                <td><input type="text" readonly></td>
                                            </tr>
                                            <tr>
                                                <td class="name">Email</td>
                                                <td><input type="text" readonly></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>

                            <div class="konten2">
                                <div class="tabel1">
                                    <div class="text3">
                                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                            <li class="btn-group" role="presentation">
                                                <button type="button" class="btn active" id="pills-home-tab"
                                                    data-bs-toggle="pill" data-bs-target="#pills-home5" type="button"
                                                    role="tab" aria-controls="pills-home" aria-selected="true">Ubah
                                                    Akun</button>
                                                <button type="button" class="btn" id="pills-profile-tab"
                                                    data-bs-toggle="pill" data-bs-target="#pills-profile5" type="button"
                                                    role="tab" aria-controls="pills-profile" aria-selected="false">Ubah
                                                    Password</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="registrasi-form">
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home5" role="tabpanel"
                                                aria-labelledby="pills-home-tab">
                                                <form action="" method="POST">
                                                    <table>
                                                        <tr>
                                                            <td class="name">Email</td>
                                                            <td><input type="text"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="name">Username</td>
                                                            <td><input type="text"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="name">No. Hp</td>
                                                            <td><input type="text"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="name">Email</td>
                                                            <td><input type="text"></td>
                                                        </tr>
                                                    </table>
                                                </form>
                                                <div class="simpanakun1">
                                                    <button class="simpanakun">simpan</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-profile5" role="tabpanel"
                                                aria-labelledby="pills-profile-tab">
                                                <form action="" method="POST">
                                                    <table>
                                                        <tr>
                                                            <td class="name">Email</td>
                                                            <td><input type="text"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="name">Password Lama</td>
                                                            <td><input type="text"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="name">Password Baru</td>
                                                            <td><input type="text"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="name">Ulangi Password Baru</td>
                                                            <td><input type="text"></td>
                                                        </tr>
                                                    </table>
                                                </form>
                                                <div class="simpanakun1">
                                                    <button class="simpanakun">simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection