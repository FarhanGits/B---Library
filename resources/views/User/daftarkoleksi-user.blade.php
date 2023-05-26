<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Koleksi</title>
    <link rel="stylesheet" href="{{asset('style/style-user/styledk-user.css')}}">
    <script src="https://kit.fontawesome.com/e9e26f3697.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <div class="firstNav">
            <div class="brand">
                <a href="/userhome" class="regularFont">B-Library</a>
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
        <div class="heading">
            <h1>Daftar Koleksi</h1>
        </div>

        <!--BOOK RECOM SECTION-->
        <section class="book-recom">
            <div class="slider-container-book">

                @foreach ($data as $item)
                    {{-- {{route('buku', $item->id)}} --}}
                    <a class="card useBorder" href="/daftarkoleksi-user/buku/{{$item->id}}">
                        <div class="book-cover">
                            {{-- {{asset('img/img-user/gambar-cover-buku/'.$item->images)}} --}}
                            <img src="{{asset('img/img-user/gambar-cover-buku/'.$item->images)}}" alt="Gambar Buku">
                        </div>
                        <div class="book-details">
                            <div class="genre-info">
                                <img src="{{asset('img/img-user/genre-icon.svg')}}" alt="">
                                <span class="genre-name">{{$item->genre}}</span>
                            </div>
                            <div class="book-title">
                                <p class="boldFont">{{$item->judulBuku}}</p>
                            </div>
                            <div class="book-writer">
                                <span class="regularFont">{{$item->namaPengarang}}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
                <div class="paginate">
                    {{ $data->links() }} {{-- Untuk memanggil pagination --}}
                </div>
            </div>
        </section>
    </div>
    <footer class="footer-distributed">
        <div class="footer-left">
            <div class="logo">
                <img src="{{asset('img/img-user/Logo_Kabupaten_Bojonegoro 2.png')}}" alt="">
            </div>
            <div class="logo-notes">
                <h3>Perpustakaan Bojonegoro</h3>
                <p class="footer-company-name">Copyright © 2023 <strong>Perpustakaan Bojonegoro</strong>. All rights reserved.</p>
            </div>
        </div>

        <div class="footer-right">
            <div class="library-info">
                <div class="library-location">
                    <i class="fa fa-map-marker"></i>
                    <span>Bojonegoro, Jawa Timur</span>
                </div>
                <div class="library-phone">
                    <i class="fa fa-phone"></i>
                    <span>0831-4285-33968</span>
                </div>
                <div class="library-email">
                    <i class="fa fa-envelope"></i>
                    <span><a href="#">perpus.arsip.bjn@gmail.com</a></span>
                </div>
            </div>

            <div class="about-library">
                <div class="footer-company-about">
                    <h3>About the website</h3>
                    <p><strong>Perpustakaan Bojonegoro</strong> merupakan salah satu pelayanan publik yang dapat digunakan oleh masyarakat umum untuk memenuhi kebutuhan informasi.</p>
                </div>
                <div class="footer-icons">
                    <a href="https://www.facebook.com/places/Hal-hal-yang-dilakukan-di-Bojonegoro/104069269629344" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/dispusip_bjn/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://twitter.com/unairlibrary" target="_blank"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>