@extends('users.layouts.main')

@section('container')

<section id="settingAkun">
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
                <li class="spasi" role="presentation"><a href="" id="pills-home-tab3" data-bs-toggle="pill" data-bs-target="#pills-home3" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><img src="image/dashboardPengguna-dashboard.svg" alt=""><span>Dashboard</span></a></li>
                <li role="presentation"><a href="" id="pills-profile-tab3" data-bs-toggle="pill" data-bs-target="#pills-profile3" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><img src="image/dashboardPengguna-file.svg" alt=""><span>Data Pengguna</span></a></li>
            </ul>
        </div>

        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>

        <ul>
            <div class="kotak">
                <li class="spasi"><a href=""><img src="image/dashboardPengguna-setting.svg" alt=""><span>setting</span></a></li>
                <li><a href=""><img src="image/dashboardPengguna-keluar.svg" alt=""><span>keluar</span></a></li>
            </div>
        </ul>

        <div class="garis1">
            <div class="garis2">

            </div>
        </div>
        <p class="copy">Copyright © 2022 De Note.
            | All rights reserved</p>
    </div>

    <div class="container2">
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
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td class="name">Username</td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td class="name">No Hp</td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td class="name">Email</td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td class="name">Password</td>
                                <td><input type="text"></td>
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
                                <button type="button" class="btn active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Ubah Akun</button>
                                <button type="button" class="btn" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Ubah Password</button>
                            </li>
                        </ul>

                    </div>
                    <div class="registrasi-form">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
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
</section>


@endsection