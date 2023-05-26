<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B-Library</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('style/style-user/style.css')}}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"> -->
    <!-- font awesome -->
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
                <li><a href="#pusling-schedule" class="regularFont">Jadwal Pusling</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">

        <!--WELCOME BOX SECTION-->
        <section class="sponsor-box">
            <div class="welcome">
                <img src="{{asset('img/img-user/Noah Schumacher 1.svg')}}" alt="">
            </div>
        </section>

        <!--BOOK RECOM SECTION-->
        <section class="book-recom">
            <div class="recom-title">
                <span class="mediumFont titlerec">Rekomendasi buku</span>
                <span class="recom-page"><a href="/daftarkoleksi">Daftar Koleksi</a></span>
            </div>
            <div class="slider-container-book">

                @foreach ($data->take(10) as $item)
                    <a href="/daftarkoleksi-user/buku/{{$item->id}}" class="card useBorder">
                        <div class="book-cover">
                            <img src="{{asset('img/img-user/gambar-cover-buku/'.$item->images)}}" alt="">
                        </div>
                        <div class="book-details">
                            <div class="genre-info">
                                <img src="{{asset('img/img-user/genre-icon.svg')}}" alt="">
                                <span class="genre-name">{{$item->genre}}</span>
                            </div>
                            <div class="book-title">
                                <p class="boldFont">
                                    {{$item->judulBuku}}
                                </p>
                            </div>
                            <div class="book-writer">
                                <span class="regularFont">
                                    {{$item->namaPengarang}}
                                </span>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </section>

        <!--NEWS SECTION-->
        <section class="news-trend">
            <h1 class="mediumFont">Berita..</h1>
            <div class="slider-container-news">

                <!--Berita 1-->
                <div class="news-box useBorder">
                    <a href="https://www.detik.com/edu/edutainment/d-6726759/pakar-ugm-ungkap-buku-bukan-alat-utama-belajar-lalu-apa" target="_blank">
                        <div class="news-cover">
                            <img src="img/3-1.png" alt="">
                        </div>
                        <div class="news-details">
                            <div class="news-info">
                                <span class="news-source">detik.com</span>
                                <span class="news-date">18 Mei 2023</span>
                            </div>
                            <div class="news-title">
                                <span class="boldFont">
                                    Pakar UGM Ungkap Buku Bukan Alat Utama Belajar, Lalu Apa?
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <!--Berita 2-->
                <div class="news-box useBorder">
                    <a href="https://www.liputan6.com/bisnis/read/5293197/sejarah-toko-buku-gunung-agung-yang-bermula-dari-kios-sederhana" target="_blank">
                        <div class="news-cover">
                            <img src="img/3-1.png" alt="">
                        </div>
                        <div class="news-details">
                            <div class="news-info">
                                <span class="news-source">liputan6.com</span>
                                <span class="news-date">21 Mei 2023</span>
                            </div>
                            <div class="news-title">
                                <span class="boldFont">
                                    Sejarah Toko Buku Gunung Agung yang Bermula dari Kios Sederhana 
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <!--Berita 3-->
                <div class="news-box useBorder">
                    <a href="https://buku.kompas.com/read/4007/membangun-kekayaan-abadi-salah-satu-kebiasaan-berpikir-investor-terbaik-dunia-yang-harus-anda-tiru" target="_blank">
                        <div class="news-cover">
                            <img src="img/3-1.png" alt="">
                        </div>
                        <div class="news-details">
                            <div class="news-info">
                                <span class="news-source">kompas.com</span>
                                <span class="news-date">21 Mei 2023</span>
                            </div>
                            <div class="news-title">
                                <span class="boldFont">
                                    Membangun Kekayaan Abadi, Salah Satu Kebiasaan Berpikir Investor Terbaik Dunia yang Harus Anda Tiru
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <!--Berita 4-->
                <div class="news-box useBorder">
                    <a href="https://www.cnnindonesia.com/ekonomi/20230504172745-92-945358/tutup-toko-books-beyond-diskon-buku-sampai-80-persen" target="_blank">
                        <div class="news-cover">
                            <img src="img/3-1.png" alt="">
                        </div>
                        <div class="news-details">
                            <div class="news-info">
                                <span class="news-source">cnnindonesia.com</span>
                                <span class="news-date">4 Mei 2023</span>
                            </div>
                            <div class="news-title">
                                <span class="boldFont">
                                    Tutup Toko, Books & Beyond Diskon Buku Sampai 80 Persen 
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <!--Berita 5-->
                <div class="news-box useBorder">
                    <a href="https://nasional.sindonews.com/read/1105899/14/ksad-dudung-luncurkan-buku-muhammadiyah-doakan-segera-jadi-guru-besar-1684811102" target="_blank">
                        <div class="news-cover">
                            <img src="img/3-1.png" alt="">
                        </div>
                        <div class="news-details">
                            <div class="news-info">
                                <span class="news-source">sindonews.com</span>
                                <span class="news-date">23 Mei 2023</span>
                            </div>
                            <div class="news-title">
                                <span class="boldFont">
                                    KSAD Dudung Luncurkan Buku, Muhammadiyah Doakan Segera Jadi Guru Besar 
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </section>

        <!-- JADWAL PUSLING -->
        <section class="pusling-schedule" id="pusling-schedule">
            <h1 class="mediumFont" >Jadwal Perpustakaan Keliling</h1>
            <div class="slider-container-pusling">

                <!-- Jadwal 1 -->
                <div class="schedule-box useBorder">
                    <a href="">
                        <div class="bus-img">
                            <img src="{{asset('img/img-user/bus pusling.png')}}" alt="">
                        </div>
                        <div class="bus-schedule">
                            <div class="school-place">
                                <h3>SD Negeri Kepatihan</h3>
                            </div>
                            <div class="schedule-date">
                                <div class="date">
                                    <i class="far fa-calendar"></i>
                                    <span>14 Maret 2023</span>
                                </div>
                                <div class="time">
                                    <i class="far fa-clock"></i>
                                    <span>09.00 - 11.00 WIB</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Jadwal 2 -->
                <div class="schedule-box useBorder">
                    <a href="">
                        <div class="bus-img">
                            <img src="{{asset('img/img-user/bus pusling.png')}}" alt="">
                        </div>
                        <div class="bus-schedule">
                            <div class="school-place">
                                <h3>SD Negeri Kepatihan</h3>
                            </div>
                            <div class="schedule-date">
                                <div class="date">
                                    <i class="far fa-calendar"></i>
                                    <span>14 Maret 2023</span>
                                </div>
                                <div class="time">
                                    <i class="far fa-clock"></i>
                                    <span>09.00 - 11.00 WIB</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Jadwal 3 -->
                <div class="schedule-box useBorder">
                    <a href="">
                        <div class="bus-img">
                            <img src="{{asset('img/img-user/bus pusling.png')}}" alt="">
                        </div>
                        <div class="bus-schedule">
                            <div class="school-place">
                                <h3>SD Negeri Kepatihan</h3>
                            </div>
                            <div class="schedule-date">
                                <div class="date">
                                    <i class="far fa-calendar"></i>
                                    <span>14 Maret 2023</span>
                                </div>
                                <div class="time">
                                    <i class="far fa-clock"></i>
                                    <span>09.00 - 11.00 WIB</span>
                                </div>
                            </div>
                        </div>
                    </a>
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
    <script></script>
</body>
</html>