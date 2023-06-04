<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Kunjungan</title>
    <link rel="stylesheet" href="{{asset('style/style-user/stylerk.css')}}">
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
                <li><a href="/dashboardpusling" class="regularFont">Jadwal Pusling</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="contentTable">

            <!-- Library Visit History's Table -->
            <div class="bookHistory">
                <div class="heading">
                    <h1>Riwayat Kunjungan</h1>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Buku</th>
                            <th>Penulis</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Tenggat</th>
                            <th>Tanggal Dikembalikan</th>
                            <th>Status Denda</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datapinjam as $item)
                            <tr>
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
                                        <p style="color: grey">- Belum kembali -</p>
                                    @elseif ($item->tanggalKembaliAsli <= $item->tanggalKembali)
                                        <p style="color: green">- Tidak denda -</p>
                                    @elseif ($item->tanggalKembaliAsli > $item->tanggalKembali)
                                        <p style="color: red">- Denda -</p>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
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