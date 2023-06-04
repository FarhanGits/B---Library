<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="{{ asset('style/style-admin/styleEditBuku.css') }}">
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

            <!-- Table Section  -->
            <div class="addForm">
                <h1>B-LIBRARY</h1>
                <h2>Perpustakaan Bojonegoro</h2>

                <!--awal card form -->
                <div class="card">
                    <div class="card-header">
                        Form Input Data Buku
                    </div>
                    <div class="card-body">
                        <form action="/insertdatabuku" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Judul Buku</label>
                                <input type="text" name="judulBuku" class="form-control" placeholder="Input judul buku disini!" required>
                            </div>
                            <div class="form-group">
                                <label>Pengarang</label>
                                <input type="text" name="namaPengarang" class="form-control" placeholder="Input nama pengarang disini!" required>
                            </div>
                            <div class="form-group">
                                <label>Keterangan Buku</label>
                                <textarea class="form-control" name="keteranganBuku" placeholder="Input keterangan tambahan buku disini!" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Tahun Terbit</label>
                                <input type="text" name="tahunTerbit" class="form-control" placeholder="Input genre disini!" required>
                            </div>
                            <div class="form-group">
                                <label>Genre</label>
                                <input type="text" name="genre" class="form-control" placeholder="Input genre disini!" required>
                            </div>
                            <div class="form-group">
                                <label>Masukkan Gambar Buku</label>
                                <input type="file" name="images" class="form-control" required>
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
                        Daftar Buku
                    </div>
                    @if ($message = Session::get("success"))
                        <h1 style="color: green">Buku berhasil ditambahkan!</h1>
                    @endif
                    <div class="user-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Judul Buku</th>
                                    <th>Pengarang</th>
                                    <th>Tahun Terbit</th>
                                    <th>Genre</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    // $noUrut = 1; -> tidak terpakai karena saat pindah page (pagination) angka akan terulang dari 1
                                @endphp
                                @foreach ($data as $index => $item)
                                    <tr>
                                        <td>{{$index + $data->firstItem()}}</td>
                                        <td>{{$item->judulBuku}}</td>
                                        <td>{{$item->namaPengarang}}</td>
                                        <td>{{$item->tahunTerbit}}</td>
                                        <td>{{$item->genre}}</td>
                                        <td>
                                            <div class="editbook">
                                                <a href="/tampildata/{{$item->id}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                            </div>
                                            <div class="deletebook">
                                                <a href="/deletedata/{{$item->id}}" onclick= "return confirm('Apakah yakin ingin menghapus buku {{$item->judulBuku}}?')" class=" btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="paginate">
                            {{ $data->links() }} {{-- Untuk memanggil pagination --}}
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

