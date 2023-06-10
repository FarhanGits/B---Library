<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Buku</title>
    <link rel="stylesheet" href="{{asset('style/style-user/styleRiwayatBuku.css')}}">
    <link rel="icon" href="{{asset('img/B-Library Logo.png')}}" type="image/x-icon">
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
                {{-- <li class="navSchedule">
                    <a href="/dashboardpusling">
                        <span class="icon"><ion-icon name="bus-sharp"></ion-icon></span>
                        <span class="title">Jadwal Pusling</span>
                    </a>
                </li> --}}
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
                                <th>Jatuh Tempo</th>
                                <th>Tanggal Dikembalikan</th>
                                <th>Status Denda</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datapinjam as $item)
                                <tr>
                                    <td>{{$item->book->judulBuku}}</td>
                                    <td>{{$item->book->namaPengarang}}</td>
                                    <td>{{date('d M Y', strtotime($item->tanggalPinjam))}}</td>
                                    <td>{{date('d M Y', strtotime($item->tanggalKembali))}}</td>
                                    <td>
                                        @if ($item->tanggalKembaliAsli == null)
                                        
                                        @else
                                            {{date('d M Y', strtotime($item->tanggalKembaliAsli))}}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->tanggalKembaliAsli == null)
                                            <p style="color: grey">- Belum kembali -</p>
                                        @elseif ($item->tanggalKembaliAsli <= $item->tanggalKembali)
                                            <p style="color: green">- Tidak denda -</p>
                                        @elseif ($item->tanggalKembaliAsli > $item->tanggalKembali)
                                            <p style="color: red">- Denda -</p>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="script/scriptDU.js"></script>
</body>
</html>