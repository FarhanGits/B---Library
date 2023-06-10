<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style/style-user/stylebook-user.css')}}">
    <link rel="icon" href="{{asset('img/B-Library Logo.png')}}" type="image/x-icon">
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
                {{-- <li><a href="/userhome" class="regularFont">Jadwal Pusling</a></li> --}}
            </ul>
        </div>
    </nav>

    <form action="/peminjaman" method="POST" class="koleksi" enctype="multipart/form-data">
        @csrf
        {{-- {{$users->NIK}} --}}
        <div class="column-left">
            <img src="{{asset('img/img-user/gambar-cover-buku/'.$data->images)}}" alt="{{$data->judulBuku}}">
        </div>
        <div class="column-middle">
            <h1 class="boldFont">{{$data->judulBuku}}</h1>
            <p class="regularFont">{{$data->namaPengarang}}, {{$data->tahunTerbit}}</p>
            <h2 class="mediumFont">Deskripsi Buku</h2>
            <p class="regularFont">{{$data->keteranganBuku}}</p>
        </div>
        <div class="column-right useBorder">
            <input type="hidden" name="user_id" value="{{$users->id}}">
            <input type="hidden" name="book_id" value="{{$data->id}}">
            <p class="boldFont">Atur Tanggal Peminjaman</p>
            <input type="date" name="tanggalPinjam" id="" class="date">
            @if ($data['status'] == 'Available')
                <button class="btn" type="submit">Pinjam Buku</button>
            @else
                <a onclick="alertPinjam()">Buku Sedang Dipinjam</a>
            @endif
        </div>
    </form>

    <script>
        function alertPinjam() {
            alert("Buku {{$data->judulBuku}} Sedang Dipinjam!!");
        }
    </script>
</body>
</html>