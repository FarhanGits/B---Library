<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Buku</title>
    <link rel="stylesheet" href="{{asset('style/style-user/styleRiwayatBuku.css')}}">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://kit.fontawesome.com/e9e26f3697.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">

        <!-- Side Navbar -->
        <div class="navside">
            <ul>
                <li class="webname">
                    <a href="/userhome">
                        <span class="icon"><img src="{{asset('img/img-user/profile.jpeg')}}" alt=""></span>
                        <span class="title">{{Auth::user()->namaAnggota}}!</span>
                    </a>
                </li>
                <!-- <li class="navDashboard">
                    <a href="dashboard-user.html">
                        <span class="icon"><ion-icon name="grid-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li> -->
                <li class="navBookHistory">
                    <a href="/dashboardriwayatbuku">
                        <span class="icon"><ion-icon name="newspaper-sharp"></ion-icon></span>
                        <span class="title">Riwayat Buku</span>
                    </a>
                </li>
                <li class="navSchedule">
                    <a href="/dashboardpusling">
                        <span class="icon"><ion-icon name="bus-sharp"></ion-icon></span>
                        <span class="title">Jadwal Pusling</span>
                    </a>
                </li>
                <li class="navAccount">
                    <a href="/dashboardakunuser">
                        <span class="icon"><ion-icon name="person-sharp"></ion-icon></span>
                        <span class="title">Akun Saya</span>
                    </a>
                </li>
                <div class="devider">
                    <span></span>
                </div>
                <li class="navOut">
                    <a href="/logout-user">
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
                    <img src="{{asset('img/img-user/profile.jpeg')}}" alt="">
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
                                <th>Penulis</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Status Denda</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rentang Kisah</td>
                                <td>Gita Savitri</td>
                                <td>2 Maret 2023</td>
                                <td>9 Maret 2023</td>
                                <td class="on-time">Tidak Denda</td>
                            </tr>
                            <tr>
                                <td>Manusia Setengah Salmon</td>
                                <td>Raditya Dika</td>
                                <td>12 Januari 2023</td>
                                <td>17 Januari 2023</td>
                                <td class="on-time">Tidak Denda</td>
                            </tr>
                            <tr>
                                <td>Filsafat Pendidikan</td>
                                <td>Muhammad Anwar</td>
                                <td>20 Desember 2022</td>
                                <td>29 Desember 2022</td>
                                <td class="due-late">Didenda</td>
                            </tr>
                            <tr>
                                <td>Laut Bercerita</td>
                                <td>Leila S. Chudori</td>
                                <td>7 Desember 2022</td>
                                <td>13 Maret 2023</td>
                                <td class="on-time">Tidak Denda</td>
                            </tr>
                            <tr>
                                <td>Pulang</td>
                                <td>Leila S. Chudori</td>
                                <td>23 November 2022</td>
                                <td>30 November 2022</td>
                                <td class="on-time">Tidak Denda</td>
                            </tr>
                            <tr>
                                <td>Filosofi Kopi</td>
                                <td>Dewi Puji Lestari</td>
                                <td>15 November 2022</td>
                                <td>22 November 2022</td>
                                <td class="on-time">Tidak Denda</td>
                            </tr>
                            <tr>
                                <td>Cinta Brontosaurus</td>
                                <td>Raditya Dika</td>
                                <td>2 November 2022</td>
                                <td>16 November 2022</td>
                                <td class="on-time">Tidak Denda</td>
                            </tr>
                            <tr>
                                <td>Rentang Kisah</td>
                                <td>Gita Savitri</td>
                                <td>17 Oktober 2022</td>
                                <td>24 Oktober 2022</td>
                                <td class="on-time">Tidak Denda</td>
                            </tr>
                            <tr>
                                <td>Rentang Kisah</td>
                                <td>Gita Savitri</td>
                                <td>10 September 2022</td>
                                <td>19 September 2022</td>
                                <td class="due-late">Didenda</td>
                            </tr>
                            <tr>
                                <td>Rentang Kisah</td>
                                <td>Gita Savitri</td>
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

    <script src="script/scriptDU.js"></script>
</body>
</html>