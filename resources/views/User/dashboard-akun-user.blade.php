<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome User</title>
    <link rel="stylesheet" href="{{asset('style/style-user/styleAkun.css')}}">
    <link rel="icon" href="{{asset('img/B-Library Logo.png')}}" type="image/x-icon">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://kit.fontawesome.com/e9e26f3697.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">

        <!-- Side Navbar -->
        <div class="navside">
            <ul>
                <li class="webname">
                    <a href="/userhome">
                        <span class="icon"><img src="{{asset('img/img-user/user.png')}}" alt=""></span>
                        <span class="title">{{Auth::user()->namaAnggota}}</span>
                    </a>
                </li>
                <!-- <li class="navDashboard">
                    <a href="dashboard-user.html">
                        <span class="icon"><ion-icon name="grid-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li> -->
                <li class="navBookHistory">
                    <a href="/dashboardriwayatbuku">
                        <span class="icon"><ion-icon name="newspaper-sharp"></ion-icon></span>
                        <span class="title">Riwayat Buku</span>
                    </a>
                </li>
                {{-- <li class="navSchedule">
                    <a href="/dashboardpusling">
                        <span class="icon"><ion-icon name="bus-sharp"></ion-icon></span>
                        <span class="title">Jadwal Pusling</span>
                    </a>
                </li> --}}
                <li class="navAccount">
                    <a href="/dashboardakunuser">
                        <span class="icon"><ion-icon name="person-sharp"></ion-icon></span>
                        <span class="title">Akun Saya</span>
                    </a>
                </li>
                <div class="devider">
                    <span></span>
                </div>
                <li class="navOut">
                    <a href="/logout-user">
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
                    <label for="">
                        <input type="text" placeholder="Cari">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <!-- Admin Image -->
                <div class="admins">
                    <img src="{{asset('img/img-user/user.png')}}" alt="">
                </div>
            </div>

            <!-- Highlight in Cards -->
            
            <!-- Table Section  -->
            <div class="contentAccount">
                <div class="accountItem">
                    <div class="title">
                        <h1>Akun Saya</h1>
                    </div>

                    <div class="profileImg">
                        <img src="{{asset('img/img-user/user.png')}}" alt="">
                    </div>

                    <form class="formAccount">
                        <p>Edit Profile?</p>
                        <div class="editName">
                            <span class="icon"><i class="fa-solid fa-user"></i></span>
                            <input type="text" name="" id="" placeholder="Masukkan Nama">
                        </div>
                        <div class="email">
                            <span class="icon"><i class="fa-solid fa-at"></i></span>
                            <input type="email" name="" id="" placeholder="Masukkan Email">
                        </div>
                        <div class="password">
                            <span class="icon"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" name="" id="" placeholder="Masukkan Password">
                        </div>
                        <div class="button">
                            <button class="saveAction">Simpan</button>
                            <button class="cancelAction">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="script/scriptDU.js"></script>
</body>
</html>