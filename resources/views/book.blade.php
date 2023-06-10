<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('style/stylebook.css')}}">
  <link rel="icon" href="{{asset('img/B-Library Logo.png')}}" type="image/x-icon">
  <title>{{$data->judulBuku}}</title>
</head>

<body>
  <nav>
    <div class="firstNav">
        <div class="brand">
            <a href="/" class="regularFont">B-Library</a>
        </div>

        <!--search-->
        <div class="search-box">
          <form action="/daftarkoleksi" method="GET">
              <input type="search" name="search" class="mediumFont" placeholder="Cari buku">
              <i class="fa-solid fa-magnifying-glass"></i>
          </form>
      </div>
        <!--akhirSearch-->

        <ul class="menu">
            <li class="regularFont">
                <a class="login" href="/login">Login</a>
                <a class="reg" href="/register">Register</a>
            </li>  
        </ul>
    </div>
    <div class="secNav">
        <ul>
            <li><a href="/daftarkoleksi" class="regularFont">Daftar Koleksi</a></li>
            <li><a href="/login" class="regularFont">Riwayat Kunjungan</a></li>
            {{-- <li><a href="#pusling-schedule" class="regularFont">Jadwal Pusling</a></li> --}}
        </ul>
    </div>
  </nav>


  <form action="/login" method="POST" class="koleksi">
    <div class="column-left" style="background-color:white;">
      <img src="{{asset('img/img-user/gambar-cover-buku/'.$data->images)}}" alt="{{$data->judulBuku}}">
    </div>
    <div class="column-middle" style="background-color:white;">
      <h1 class="boldFont">{{$data->judulBuku}}</h1>
      <p class="regularFont">{{$data->namaPengarang}}, {{$data->tahunTerbit}}</p>
      <h2 class="mediumFont">Deskripsi Buku</h2>
      <p class="regularFont">{{$data->keteranganBuku}}</p>
    </div>
    <div class="column-right useBorder">
      <p class="boldFont">Atur Tanggal Peminjaman</p>
      <input type="date" name="tanggalPinjam" id="" class="date">
      <button class="btn" type="submit">Pilih Buku</button>
    </div>
  </form>
</body>
</html>