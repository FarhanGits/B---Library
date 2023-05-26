<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome User</title>
    <link rel="stylesheet" href="{{ asset('style/style-admin/styleWidgetAnggota.css') }}">
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

            <!-- Highlight in Cards -->
            
            <!-- Table Section  -->
            <div class="contentUser">
                <div class="userItem">
                    <div class="title">
                        <h1>Edit Informasi Anggota</h1>
                    </div>
                    <div class="card-body">
                        <form class="formUser" action="/editdataanggota/{{$dataAnggota->id}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="namaAnggota" value="{{$dataAnggota->namaAnggota}}" class="form-control" required maxlength="50">
                            </div>
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="number" name="NIK" value="{{$dataAnggota->NIK}}" class="form-control" placeholder="Input NIK anda disini!" required minlength="16">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamatPengguna" required>{{$dataAnggota->alamatPengguna}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input type="text" name="noTelepon" value="{{$dataAnggota->noTelepon}}" class="form-control" required minlength="12" maxlength="13">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="namaAnggota" value="{{$dataAnggota->email}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="jenisKelamin">
                                    <option selected value="{{$dataAnggota->jenisKelamin}}"></option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Sebagai</label>
                                <select class="form-control" name="role">
                                    <option selected value="{{$dataAnggota->role}}"></option>
                                    <option value="User">User</option>
                                </select>
                            </div>
                            <div class="button">
                                <button class="saveAction" type="submit">Simpan</button>
                                <button class="cancelAction"><a href="/dfanggota">Batal</a></button>
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