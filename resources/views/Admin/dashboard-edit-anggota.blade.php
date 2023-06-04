<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota</title>
    <link rel="stylesheet" href="{{ asset('style/style-admin/styleEditAnggota.css') }}">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous"> -->
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
                        <span class="icon"><i class="fa-solid fa-rotate-left"></i></span>
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
                    <form action="/dfanggota" method="GET">
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

            <!-- Table Section  -->
            <div class="addForm">
                <h1>B-LIBRARY</h1>
                <h2>Perpustakaan Bojonegoro</h2>

                <!--awal card form -->
                <div class="card">
                    <div class="card-header">
                        Form Input Data Anggota
                    </div>
                    <div class="card-body">
                        <form action="/insertdataanggota" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="namaAnggota" class="form-control" placeholder="Input Nama anda disini!" required maxlength="50">
                            </div>
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="number" name="NIK" class="form-control" placeholder="Input NIK anda disini!" required minlength="16">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamatPengguna" placeholder="Input Alamat anda disini!" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input type="text" name="noTelepon" class="form-control" placeholder="Input Nomor Telepon anda disini!" required minlength="12" maxlength="13">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Input Nomor Telepon anda disini!">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control" placeholder="Input Nomor Telepon anda disini!" required>
                            </div>
                            {{-- <div class="form-group">
                                <label>Masukkan Foto:</label>
                                <input type="file" name="fotoProfil" class="form-control" required minlength="12" maxlength="13">
                            </div> --}}
                            <div class="form-group">
                                <label>Sebagai</label>
                                <select class="form-control" name="role" required>
                                    <option value="User">User</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="jenisKelamin" required>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                            <div class="button">
                                <button type="submit" class="btn-save" id="save">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--akhir card from-->

                <!--awal card table -->
                <div class="card data-user">
                    <div class="card-header">
                        Daftar Anggota
                    </div>
                    @if ($message = Session::get("success"))
                        <h1 style="color: green">Anggota berhasil ditambahkan!</h1>
                    @endif
                    <div class="user-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>Alamat</th>
                                    <th>Nomor Telepon</th>
                                    <th>Email</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    // $noUrut = 1; -> tidak terpakai karena saat pindah page (pagination) angka akan terulang dari 1
                                @endphp
                                @foreach ($dataAnggota as $index => $item)
                                    <tr>
                                        <td>{{$index + $dataAnggota->firstItem()}}</td>
                                        <td>{{$item->namaAnggota}}</td>
                                        <td>{{$item->NIK}}</td>
                                        <td>{{$item->alamatPengguna}}</td>
                                        <td>{{$item->noTelepon}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->jenisKelamin}}</td>
                                        <td>
                                            <div class="edituser">
                                                <a href="/tampildataanggota/{{$item->id}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                            </div>
                                            <div class="deleteuser">
                                                <a href="/deletedataanggota/{{$item->id}}" onclick= "return confirm('Apakah yakin ingin menghapus anggota {{$item->namaAnggota}}?')" class=" btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="paginate">
                            {{ $dataAnggota->links() }} {{-- Untuk memanggil pagination --}}
                        </div>
                    </div>
                </div>
                <!--akhir card table-->
            </div>
        </div>
    </div>

    <script src="{{asset('script/scriptDA.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>

