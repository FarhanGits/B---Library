<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Buku</title>
    <link rel="stylesheet" href="{{ asset('style/style-admin/styleKeterlambatan.css') }}">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://kit.fontawesome.com/e9e26f3697.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">

        <!-- Side Navbar -->
        <div class="navside">
            <ul>
                <li class="webname">
                    <a href="/dashboard">
                        <span class="icon"><img src="{{asset('img/img-admin/Logo_Kabupaten_Bojonegoro 2.png')}}" alt=""></span>
                        <span class="title">B-Library Admin</span>
                    </a>
                </li>
                <li class="navDashboard">
                    <a href="/dashboard">
                        <span class="icon"><ion-icon name="grid-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="navMember">
                    <a href="/dfanggota">
                        <span class="icon"><ion-icon name="people"></ion-icon></span>
                        <span class="title">Anggota</span>
                    </a>
                </li>
                <li class="navCollection">
                    <a href="/dashboard">
                        <span class="icon"><ion-icon name="list-circle"></ion-icon></span>
                        <span class="title">Daftar Koleksi</span>
                    </a>
                </li>
                <li class="navAdd">
                    <a href="/dfbuku">
                        <span class="icon"><ion-icon name="add-circle"></ion-icon></span>
                        <span class="title">Tambah Buku</span>
                    </a>
                </li>
                <li class="navDue">
                    <a href="/keterlambatan">
                        <span class="icon"><ion-icon name="hourglass"></ion-icon></span>
                        <span class="title">Keterlambatan</span>
                    </a>
                </li>
                <li class="navAccount">
                    <a href="/akun">
                        <span class="icon"><ion-icon name="person-sharp"></ion-icon></span>
                        <span class="title">Akun Admin</span>
                    </a>
                </li>
                <div class="devider">
                    <span></span>
                </div>
                <li class="navOut">
                    <a href="/logout-admin">
                        <span class="icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                        <span class="title">Sign-Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="content">

            <!-- Top Navbar -->
            <div class="navtop">
                <div class="toggle">
                    <ion-icon name="list"></ion-icon>
                </div>

                <!-- Search Box -->
                <div class="search">
                    <label for="">
                        <input type="text" placeholder="Cari">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <!-- Admin Image -->
                <div class="admins">
                    <img src="{{asset('img/img-admin/Logo_Kabupaten_Bojonegoro 2.png')}}" alt="">
                </div>
            </div>

            <!-- Table Section  -->
            <div class="contentTable">

                <!-- Library Visit History's Table -->
                <div class="bookHistory">
                    <div class="title">
                        <h2>Riwayat Buku</h2>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Nama Buku</th>
                                <th>Peminjam</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Status Denda</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rentang Kisah</td>
                                <td>Fariska Dwi</td>
                                <td>2 Maret 2023</td>
                                <td>9 Maret 2023</td>
                                <td class="on-time">Tidak Denda</td>
                            </tr>
                            <tr>
                                <td>Manusia Setengah Salmon</td>
                                <td>Daffa Farhan</td>
                                <td>12 Januari 2023</td>
                                <td>17 Januari 2023</td>
                                <td class="on-time">Tidak Denda</td>
                            </tr>
                            <tr>
                                <td>Filsafat Pendidikan</td>
                                <td>Daffa Farhan</td>
                                <td>20 Desember 2022</td>
                                <td>29 Desember 2022</td>
                                <td class="due-late">Didenda</td>
                            </tr>
                            <tr>
                                <td>Laut Bercerita</td>
                                <td>Daffa Farhan</td>
                                <td>7 Desember 2022</td>
                                <td>13 Maret 2023</td>
                                <td class="on-time">Tidak Denda</td>
                            </tr>
                            <tr>
                                <td>Pulang</td>
                                <td>Fariska Dwi</td>
                                <td>23 November 2022</td>
                                <td>30 November 2022</td>
                                <td class="on-time">Tidak Denda</td>
                            </tr>
                            <tr>
                                <td>Filosofi Kopi</td>
                                <td>Fariska Dwi</td>
                                <td>15 November 2022</td>
                                <td>22 November 2022</td>
                                <td class="on-time">Tidak Denda</td>
                            </tr>
                            <tr>
                                <td>Cinta Brontosaurus</td>
                                <td>Daffa Farhan</td>
                                <td>2 November 2022</td>
                                <td>16 November 2022</td>
                                <td class="on-time">Tidak Denda</td>
                            </tr>
                            <tr>
                                <td>Rentang Kisah</td>
                                <td>Daffa Farhan</td>
                                <td>17 Oktober 2022</td>
                                <td>24 Oktober 2022</td>
                                <td class="on-time">Tidak Denda</td>
                            </tr>
                            <tr>
                                <td>Rentang Kisah</td>
                                <td>Fariska Dwi</td>
                                <td>10 September 2022</td>
                                <td>19 September 2022</td>
                                <td class="due-late">Didenda</td>
                            </tr>
                            <tr>
                                <td>Rentang Kisah</td>
                                <td>Fariska Dwi</td>
                                <td>10 Agustus 2022</td>
                                <td>17 Agustus 2022</td>
                                <td class="on-time">Tidak Denda</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('script/scriptDA.js')}}"></script>
</body>
</html>