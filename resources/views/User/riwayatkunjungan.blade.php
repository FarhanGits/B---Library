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
                            <th>Tanggal Kembali</th>
                            <th>Status Denda</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Rentang Kisah</td>
                            <td>Gita Savitri</td>
                            <td>2 Maret 2023</td>
                            <td>9 Maret 2023</td>
                            <td class="on-time">Tidak Denda</td>
                        </tr>
                        <tr>
                            <td>Manusia Setengah Salmon</td>
                            <td>Raditya Dika</td>
                            <td>12 Januari 2023</td>
                            <td>17 Januari 2023</td>
                            <td class="on-time">Tidak Denda</td>
                        </tr>
                        <tr>
                            <td>Filsafat Pendidikan</td>
                            <td>Muhammad Anwar</td>
                            <td>20 Desember 2022</td>
                            <td>29 Desember 2022</td>
                            <td class="due-late">Didenda</td>
                        </tr>
                        <tr>
                            <td>Laut Bercerita</td>
                            <td>Leila S. Chudori</td>
                            <td>7 Desember 2022</td>
                            <td>13 Maret 2023</td>
                            <td class="on-time">Tidak Denda</td>
                        </tr>
                        <tr>
                            <td>Pulang</td>
                            <td>Leila S. Chudori</td>
                            <td>23 November 2022</td>
                            <td>30 November 2022</td>
                            <td class="on-time">Tidak Denda</td>
                        </tr>
                        <tr>
                            <td>Filosofi Kopi</td>
                            <td>Dewi Puji Lestari</td>
                            <td>15 November 2022</td>
                            <td>22 November 2022</td>
                            <td class="on-time">Tidak Denda</td>
                        </tr>
                        <tr>
                            <td>Cinta Brontosaurus</td>
                            <td>Raditya Dika</td>
                            <td>2 November 2022</td>
                            <td>16 November 2022</td>
                            <td class="on-time">Tidak Denda</td>
                        </tr>
                        <tr>
                            <td>Rentang Kisah</td>
                            <td>Gita Savitri</td>
                            <td>17 Oktober 2022</td>
                            <td>24 Oktober 2022</td>
                            <td class="on-time">Tidak Denda</td>
                        </tr>
                        <tr>
                            <td>Rentang Kisah</td>
                            <td>Gita Savitri</td>
                            <td>10 September 2022</td>
                            <td>19 September 2022</td>
                            <td class="due-late">Didenda</td>
                        </tr>
                        <tr>
                            <td>Rentang Kisah</td>
                            <td>Gita Savitri</td>
                            <td>10 Agustus 2022</td>
                            <td>17 Agustus 2022</td>
                            <td class="on-time">Tidak Denda</td>
                        </tr>
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