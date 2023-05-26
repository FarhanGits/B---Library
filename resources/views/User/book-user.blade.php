<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style/style-user/stylebook-user.css')}}">
    <title>{{$data->judulBuku}}</title>
</head>
<body>
    <nav>
        <div class="firstNav">
            <div class="brand">
                <a href="/daftarkoleksi-user" class="regularFont">B-Library</a>
            </div>

            <!--search-->
            <div class="search-box">
                <form action="/daftarkoleksi-user" method="GET">
                    <input type="search" name="search" class="mediumFont" placeholder="Cari buku">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </form>
            </div>
            <!--akhirSearch-->

            <ul class="userProfile">
                <li class="regularFont">
                    <p>{{Auth::user()->namaAnggota}}</p>
                    <a href="/dashboardakunuser">
                        <div class="profilePict">
                            <img src="{{asset('img/img-user/user.png')}}" alt="">
                        </div>
                    </a>
                </li>  
            </ul>
        </div>
        <div class="secNav">
            <ul>
                <li><a href="/daftarkoleksi-user" class="regularFont">Daftar Koleksi</a></li>
                <li><a href="/riwayatkunjungan" class="regularFont">Riwayat Kunjungan</a></li>
                <li><a href="/userhome" class="regularFont">Jadwal Pusling</a></li>
            </ul>
        </div>
    </nav>

    <div class="Koleksi">
        <div class="row">
            <form action="/peminjaman/{{$data->id}}" method="POST">
                @csrf
                <div class="column left" style="background-color:white;">
                    <img src="{{asset('img/img-user/gambar-cover-buku/'.$data->images)}}" alt="Gambar Produk">
                </div>
                <div class="column middle" style="background-color:white;">
                    <h1>{{$data->judulBuku}}</h1>
                    <h2>Deskripsi Buku</h2>
                    <p>{{$data->keteranganBuku}}</p>
                </div>
                <div class="column right" style="background-color:white;">
                    <input type="date" name="tanggalPinjam" id="">
                    <h2><button class="btn" type="submit">Pilih Buku</button></h2>
                </div>
            </form>
        </div>
    </div>
</body>
</html>