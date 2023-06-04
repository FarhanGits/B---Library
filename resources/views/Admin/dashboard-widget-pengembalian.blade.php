<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pengembalian Buku</title>
    <link rel="stylesheet" href="{{ asset('style/style-admin/styleWidgetPengembalian.css') }}">
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

            <!-- Highlight in Cards -->
            
            <!-- Table Section  -->
            <div class="contentBook">
                <div class="bookItem">
                    <div class="title">
                        <h1>Konfirmasi Pengembalian Buku</h1>
                    </div>
                    <div class="card-body">
                        <form class="formBook" action="/bukukembali/{{$data->id}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Nama Buku</label>
                                <p>{{$data->book->judulBuku}}</p>
                                <input type="hidden" name="book_id" value="{{$data->book_id}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Peminjam</label>
                                <p>{{$data->user->namaAnggota}}</p>
                                <input type="hidden" name="user_id" value="{{$data->user_id}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pinjam</label>
                                <p>{{date('d M Y', strtotime($data->tanggalPinjam))}}</p>
                                <input type="hidden" name="tanggalPinjam" value="{{$data->tanggalPinjam}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Tenggat</label>
                                <p>{{date('d M Y', strtotime($data->tanggalKembali))}}</p>
                                <input type="hidden" name="tanggalKembali" value="{{$data->tanggalKembali}}" class="form-control" required>
                            </div>
                            <div class="button">
                                <button class="saveAction" type="submit">Konfirmasi</button>
                                <button class="cancelAction"><a href="/pengembalianbuku">Batal</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('script/scriptDA.js')}}"></script>
</body>
</html>