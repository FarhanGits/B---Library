<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome User</title>
    <link rel="stylesheet" href="{{asset('style/style-user/styleJadwalPusling.css')}}">
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
                <li class="navSchedule">
                    <a href="/dashboardpusling">
                        <span class="icon"><ion-icon name="bus-sharp"></ion-icon></span>
                        <span class="title">Jadwal Pusling</span>
                    </a>
                </li>
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
            
            <!-- Table Section  -->
            <div class="contentSchedule">
                <div class="scheduleItem">
                    <div class="title">
                        <h2>Jadwal Pusling Hari Ini</h2>
                    </div>

                    <div class="busSchedule">
                        <div class="boxSchedule">
                            <div class="busIMG">
                                <img src="{{asset('img/img-user/library bus.png')}}" alt="">
                            </div>
                            <div class="scheduleDetail">
                                <div class="schoolName">
                                    <p>SDN</p>
                                </div>
                                <div class="date">
                                    <ion-icon name="calendar-sharp"></ion-icon>
                                    <span>25 April 2023</span>
                                </div>
                                <div class="time">
                                    <ion-icon name="time-sharp"></ion-icon>
                                    <span>12.00 - 13.00</span>
                                </div>
                            </div>
                        </div>
    
                        <div class="boxSchedule">
                            <div class="busIMG">
                                <img src="{{asset('img/img-user/library bus.png')}}" alt="">
                            </div>
                            <div class="scheduleDetail">
                                <div class="schoolName">
                                    <p>SDN</p>
                                </div>
                                <div class="date">
                                    <ion-icon name="calendar-sharp"></ion-icon>
                                    <span>25 April 2023</span>
                                </div>
                                <div class="time">
                                    <ion-icon name="time-sharp"></ion-icon>
                                    <span>12.00 - 13.00</span>
                                </div>
                            </div>
                        </div>
    
                        <div class="boxSchedule">
                            <div class="busIMG">
                                <img src="{{asset('img/img-user/library bus.png')}}" alt="">
                            </div>
                            <div class="scheduleDetail">
                                <div class="schoolName">
                                    <p>SDN</p>
                                </div>
                                <div class="date">
                                    <ion-icon name="calendar-sharp"></ion-icon>
                                    <span>25 April 2023</span>
                                </div>
                                <div class="time">
                                    <ion-icon name="time-sharp"></ion-icon>
                                    <span>12.00 - 13.00</span>
                                </div>
                            </div>
                        </div>
    
                        <div class="boxSchedule">
                            <div class="busIMG">
                                <img src="{{asset('img/img-user/library bus.png')}}" alt="">
                            </div>
                            <div class="scheduleDetail">
                                <div class="schoolName">
                                    <p>SDN</p>
                                </div>
                                <div class="date">
                                    <ion-icon name="calendar-sharp"></ion-icon>
                                    <span>25 April 2023</span>
                                </div>
                                <div class="time">
                                    <ion-icon name="time-sharp"></ion-icon>
                                    <span>12.00 - 13.00</span>
                                </div>
                            </div>
                        </div>
    
                        <div class="boxSchedule">
                            <div class="busIMG">
                                <img src="{{asset('img/img-user/library bus.png')}}" alt="">
                            </div>
                            <div class="scheduleDetail">
                                <div class="schoolName">
                                    <p>SDN</p>
                                </div>
                                <div class="date">
                                    <ion-icon name="calendar-sharp"></ion-icon>
                                    <span>25 April 2023</span>
                                </div>
                                <div class="time">
                                    <ion-icon name="time-sharp"></ion-icon>
                                    <span>12.00 - 13.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="boxSchedule">
                            <div class="busIMG">
                                <img src="{{asset('img/img-user/library bus.png')}}" alt="">
                            </div>
                            <div class="scheduleDetail">
                                <div class="schoolName">
                                    <p>SDN</p>
                                </div>
                                <div class="date">
                                    <ion-icon name="calendar-sharp"></ion-icon>
                                    <span>25 April 2023</span>
                                </div>
                                <div class="time">
                                    <ion-icon name="time-sharp"></ion-icon>
                                    <span>12.00 - 13.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="boxSchedule">
                            <div class="busIMG">
                                <img src="{{asset('img/img-user/library bus.png')}}" alt="">
                            </div>
                            <div class="scheduleDetail">
                                <div class="schoolName">
                                    <p>SDN</p>
                                </div>
                                <div class="date">
                                    <ion-icon name="calendar-sharp"></ion-icon>
                                    <span>25 April 2023</span>
                                </div>
                                <div class="time">
                                    <ion-icon name="time-sharp"></ion-icon>
                                    <span>12.00 - 13.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="boxSchedule">
                            <div class="busIMG">
                                <img src="{{asset('img/img-user/library bus.png')}}" alt="">
                            </div>
                            <div class="scheduleDetail">
                                <div class="schoolName">
                                    <p>SDN</p>
                                </div>
                                <div class="date">
                                    <ion-icon name="calendar-sharp"></ion-icon>
                                    <span>25 April 2023</span>
                                </div>
                                <div class="time">
                                    <ion-icon name="time-sharp"></ion-icon>
                                    <span>12.00 - 13.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- New Added Book's Table -->
            </div>
        </div>
    </div>

    <script src="script/scriptDU.js"></script>
</body>
</html>