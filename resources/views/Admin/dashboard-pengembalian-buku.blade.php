<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style/style-admin/stylePengembalian.css')}}">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://kit.fontawesome.com/e9e26f3697.js" crossorigin="anonymous"></script>
    <title>Pengembalian Buku</title>
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
                <li class="navAdd">
                    <a href="/dfbuku">
                        <span class="icon"><ion-icon name="add-circle"></ion-icon></span>
                        <span class="title">Tambah Buku</span>
                    </a>
                </li>
                <li class="navReturn">
                    <a href="/pengembalianbuku">
                        <span class="icon"><ion-icon name="list-circle"></ion-icon></span>
                        <span class="title">Pengembalian Buku</span>
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
                    <form action="/dfbuku" method="GET">
                        <label>
                            <input type="search" name="search" placeholder="Cari">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </form>
                </div>

                <!-- Admin Image -->
                <div class="admins">
                    <img src="{{asset('img/img-admin/Logo_Kabupaten_Bojonegoro 2.png')}}" alt="">
                </div>
            </div>

            <div class="confirmBook">
                <h1>Pengembalian Buku</h1>

                <div class="card data-user">
                    <div class="card-header">
                        Log Pengembalian
                    </div>
                    <div class="user-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Anggota</th>
                                    <th>Judul Buku</th>
                                    <th>Pengarang</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Jatuh Tempo</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Status</th>
                                    <th>Konfirmasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $index => $item)
                                    <tr>
                                        <td>{{$index + $data->firstItem()}}.</td>
                                        <td>{{$item->user->namaAnggota}}</td>
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
                                                <p style="color: grey">Buku Belum Kembali</p>
                                            @else
                                                {{date('d M Y', strtotime($item->tanggalKembaliAsli))}}
                                            @endif
                                        </td>
                                        <td class="editbutton">
                                            <a href="/confirmkembali/{{$item->id}}"><i class="fa-solid fa-right-left" style="color: green"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="paginate">
                            {{ $data->links() }}
                        </div>
    
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="{{asset('script/scriptDA.js')}}"></script>
</body>
</html>