<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://kit.fontawesome.com/e9e26f3697.js" crossorigin="anonymous"></script>
    <style>
        * {
          box-sizing: border-box;
          padding: 0;
          margin: 0;
        }
        
        
        /* Create three unequal columns that floats next to each other */
        .column {
          float: left;
          padding: 10px;
          height: 300px; /* Should be removed. Only for demonstration */
          text-align: justify;
          align-items: center;
          vertical-align: middle;
        }
        
        .left, .right {
          width: 27%;
          text-align: center;
          vertical-align: middle;
        }
        
        .middle {
          width: 50%;
        }
        
        .row {
            padding-bottom: 50px;
        }

        /* Clear floats after the columns */
        .row:after {
          content: "";
          display:table;
          clear: both;
        }

        img{
            padding: 10px;
            padding-top: 1rem;
            width: 100%;
            height: 80%;
            margin-top: 0%;
        }

        button{
            background-color: rgba(82, 82, 248, 0.774);
            border: none;
            padding: 1rem;
            border-radius: 5%;
            font-size: 1rem;
            color: white;
            width: 120px;
        }
        .btn{
            vertical-align: middle;
            margin-top: 50%;
        }

        .heading{
            background: #436fe8;
            color: #ffff;
            margin-bottom: 30px;
            padding: 30px 0;
            grid-column: 1/-1;
            text-align: center;
        }
        .heading>h1{
            font-weight: 400;
            font-size: 32px;
            letter-spacing: 10px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        .heading>h3{
            font-weight: 600;
            font-size: 22px;
            letter-spacing: 5px;
            text-transform: uppercase;
        }
        footer {
            bottom: 0;
        }
        
        .footer-distributed {
            display: flex;
            background-color: black;
            justify-content: space-between;
            box-sizing: border-box;
            text-align: left;
            font-family: 'Nunito';
            padding: 50px 50px 60px 50px;
            margin-top: 50px;
        }
        
        /* .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
            display: inline-block;
            vertical-align: top;
        } */
        
        .footer-left {
            display: flex;
            width: 50%;
            top: 0%;
            gap: 5%;
        }
        
        .footer-left .logo img{
            height: 75px;
        }
        
        .footer-distributed .footer-left .logo-notes h3 {
            color: white;
            font-size: 36px;
        }
        
        .footer-distributed .footer-left .logo-notes .footer-company-name {
            color: #8f9296;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
        }
        
        .footer-right{
            top: 0%;
            width: 50%;
            display: flex;
        }
        
        .library-info{
            width: 50%;
            color: white;
        }
        
        .library-info i{
            background-color: #33383b;
            color: #ffff;
            font-size: 20px;
            width: 40px;
            height: 40px;
            border-radius: 100%;
            text-align: center;
            line-height: 40px;
            margin: 10px 0px;
            vertical-align: middle;
        }
        
        .library-info .library-email a{
            text-decoration: none;
            color: white;
        }
        
        .library-info .library-email a:hover{
            text-decoration: underline;
            color: #CD853F;
        }
        
        .about-library{
            width: 50%;
            color: white;
        }
        
        .footer-company-about{
            margin-bottom: 7%;
        }
        
        .footer-company-about h3{
            margin-bottom: 5%;
        }
        
        .footer-distributed .footer-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            cursor: pointer;
            background-color: #33383b;
            border-radius: 3px;
            font-size: 20px;
            color: #ffff;
            text-align: center;
            line-height: 47px;
            margin-right: 5px;
        }
        
        .footer-distributed .footer-icons a:hover{
            background-color: #4865FC;
        }

        h1 {
            text-align: center;
        }

        </style>
</head>
<body>
    <div class="Koleksi">
        <div class="heading">
            <h1>B-Library</h1>
            <h3>&mdash;Trending News&mdash;</h3>
        </div>

    

<div class="row">
  <div class="column left" style="background-color:white;">
    <img src="img/3-4.jpg">
  </div>
  <div class="column middle" style="background-color:white;">
    <h1>Gerakan Literasi Sekolah, Upaya Menumbuhkan Budaya Literasi di Sekolah</h1>
    <!-- <h2>Deskripsi Buku</h2> -->
    <p>Banyak permasalahan berkaitan dengan merosotnya karakter anak bangsa. Semua itu harus segera diatasi. Pendidikan merupakan usaha sadar dan terencana yang mempunyai peran penting dalam membentuk sumber daya manusia berkarakter. Salah satu cara untuk menerapkan pendidikan karakter di sekolah dasar yaitu melalui budaya Literasi. Pada abad ke-21 kemampuan berliterasi peserta didik berkaitan erat dengan tuntutan keterampilan membaca yang berujung kemampuan memahami informasi secara analitis, kritis, dan reflektif. Tetapi, pembelajaran di sekolah saat ini belum mampu mewujudkan hal tersebut. Pada tingkat sekolah menengah (usia 15 tahun) pemahaman membaca peserta didik Indonesia (selain matematika dan sains) diuji oleh Organisasi untuk Kerja Sama dan Pembangunan Ekonomi (OECD—Organization for Economic Cooperation and Development) dalam Programme for International Student Assessment (PISA). PISA 2009 menunjukkan peserta didik Indonesia berada pada peringkat ke-57 dengan skor 396 (skor rata-rata OECD 493). Sedangkan PISA 2012 menunjukkan peserta didik Indonesia berada pada peringkat ke-64 dengan skor 396 (skor rata-rata OECD 496) (OECD, 2013). Dari data tersebut, Kementerian Pendidikan dan Kebudayaan mengembangkan Gerakan Literasi Sekolah (GLS).
        </p>
  </div>
  <div class="column right" style="background-color:white;">
    <!-- <h2><button class="btn">Pilih Buku</button></h2> -->
  </div>
</div>

    <footer class="footer-distributed">
    <div class="footer-left">
        <div class="logo">
            <img src="Logo_Kabupaten_Bojonegoro 2.png" alt="">
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

