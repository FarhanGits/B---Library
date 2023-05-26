<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome User</title>
    <link rel="stylesheet" href="{{asset('style/style-user/styleDbUser.css')}}">
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
                        <span class="icon"><img src="{{asset('img/img-user/user.png')}}" alt=""></span>
                        <span class="title">{{Auth::user()->namaAnggota}}</span>
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
                    <img src="{{asset('img/img-user/user.png')}}" alt="">
                </div>
            </div>

            <!-- Highlight in Cards -->
            <div class="cardHighlights">

                <a href="" class="card">
                    <div class="contain">
                        <div class="amount">100</div>
                        <div class="cardName">Total Anggota</div>
                    </div>
                    <div class="cardIcon">
                        <ion-icon name="people-circle"></ion-icon>
                    </div>
                </a>

                <a href="" class="card">
                    <div class="contain">
                        <div class="amount">500</div>
                        <div class="cardName">Jumlah Buku</div>
                    </div>
                    <div class="cardIcon">
                        <ion-icon name="book"></ion-icon>
                    </div>
                </a>

                <a href="" class="card">
                    <div class="contain">
                        <div class="amount">100</div>
                        <div class="cardName">Total Anggota</div>
                    </div>
                    <div class="cardIcon">
                        <ion-icon name="people-circle"></ion-icon>
                    </div>
                </a>

                <a href="" class="card">
                    <div class="contain">
                        <div class="amount">100</div>
                        <div class="cardName">Total Anggota</div>
                    </div>
                    <div class="cardIcon">
                        <ion-icon name="people-circle"></ion-icon>
                    </div>
                </a>
            </div>

            <!-- Table Section  -->
            <div class="contentTable">

                <!-- Library Visit History's Table -->
                <div class="visitHistory">
                    <div class="title">
                        <h2>Riwayat Kunjungan</h2>
                        <a href="" class="btn">Lihat Semua</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Asal Sekolah</th>
                                <th>Buku Dipinjam</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Michael Suhendar</td>
                                <td>SDN Kepatihan</td>
                                <td>2</td>
                                <td>2 Maret 2023</td>
                            </tr>
                            <tr>
                                <td>Mike Widjaja</td>
                                <td>SD Negeri Kauman I</td>
                                <td>1</td>
                                <td>2 Maret 2023</td>
                            </tr>
                            <tr>
                                <td>Mike Widjaja</td>
                                <td>SD Negeri Kauman I</td>
                                <td>1</td>
                                <td>2 Maret 2023</td>
                            </tr>
                            <tr>
                                <td>Mike Widjaja</td>
                                <td>SD Negeri Kauman I</td>
                                <td>1</td>
                                <td>2 Maret 2023</td>
                            </tr>
                            <tr>
                                <td>Mike Widjaja</td>
                                <td>SD Negeri Kauman I</td>
                                <td>1</td>
                                <td>2 Maret 2023</td>
                            </tr>
                            <tr>
                                <td>Mike Widjaja</td>
                                <td>SD Negeri Kauman I</td>
                                <td>1</td>
                                <td>2 Maret 2023</td>
                            </tr>
                            <tr>
                                <td>Mike Widjaja</td>
                                <td>SD Negeri Kauman I</td>
                                <td>1</td>
                                <td>2 Maret 2023</td>
                            </tr>
                            <tr>
                                <td>Mike Widjaja</td>
                                <td>SD Negeri Kauman I</td>
                                <td>1</td>
                                <td>2 Maret 2023</td>
                            </tr>
                            <tr>
                                <td>Mike Widjaja</td>
                                <td>SD Negeri Kauman I</td>
                                <td>1</td>
                                <td>2 Maret 2023</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- New Added Book's Table -->
                <div class="newBook">
                    <div class="title">
                        <h2>Buku Baru</h2>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Nama Buku</th>
                                <th>Tanggal Ditambahkan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="bookNicon">
                                    <ion-icon name="book"></ion-icon>
                                    <span>Ranjat Kembang</span>
                                </td>
                                <td class="addDate">1 Januari 2023</td>
                            </tr>
                            <tr>
                                <td class="bookNicon">
                                    <ion-icon name="book"></ion-icon>
                                    <span>Ranjat Kembang</span>
                                </td>
                                <td class="addDate">1 Januari 2023</td>
                            </tr>
                            <tr>
                                <td class="bookNicon">
                                    <ion-icon name="book"></ion-icon>
                                    <span>Ranjat Kembang</span>
                                </td>
                                <td class="addDate">1 Januari 2023</td>
                            </tr>
                            <tr>
                                <td class="bookNicon">
                                    <ion-icon name="book"></ion-icon>
                                    <span>Ranjat Kembang</span>
                                </td>
                                <td class="addDate">1 Januari 2023</td>
                            </tr>
                            <tr>
                                <td class="bookNicon">
                                    <ion-icon name="book"></ion-icon>
                                    <span>Ranjat Kembang</span>
                                </td>
                                <td class="addDate">1 Januari 2023</td>
                            </tr>
                            <tr>
                                <td class="bookNicon">
                                    <ion-icon name="book"></ion-icon>
                                    <span>Ranjat Kembang</span>
                                </td>
                                <td class="addDate">1 Januari 2023</td>
                            </tr>
                            <tr>
                                <td class="bookNicon">
                                    <ion-icon name="book"></ion-icon>
                                    <span>Ranjat Kembang</span>
                                </td>
                                <td class="addDate">1 Januari 2023</td>
                            </tr>
                            <tr>
                                <td class="bookNicon">
                                    <ion-icon name="book"></ion-icon>
                                    <span>Ranjat Kembang</span>
                                </td>
                                <td class="addDate">1 Januari 2023</td>
                            </tr>
                            <tr>
                                <td class="bookNicon">
                                    <ion-icon name="book"></ion-icon>
                                    <span>Ranjat Kembang</span>
                                </td>
                                <td class="addDate">1 Januari 2023</td>
                            </tr>
                            <tr>
                                <td class="bookNicon">
                                    <ion-icon name="book"></ion-icon>
                                    <span>Ranjat Kembang</span>
                                </td>
                                <td class="addDate">1 Januari 2023</td>
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