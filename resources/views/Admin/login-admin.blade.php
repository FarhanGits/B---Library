<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B-Library</title>
    <link rel="stylesheet" href="{{ asset('style/style-admin/style2.css') }}">
</head>
<body>
    <div class ="container">
        <div class="login">
            <form action="/login-administrator" method="POST">
                @csrf
                <h1>Login - Admin</h1>
                <hr>
                <p>Perpustakaan Bojonegoro</p>
                <label for="">Email</label>
                <input type="text" name="email" placeholder="example@gmail.com">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Password">
                <button>Login</button>
                <p>
                    <a href="/login">Kembali</a>
                </p> 
            </form>
        </div>
        <div class="right">
            <img src="{{asset('img/img-admin/image2.jpg')}}" alt="">
        </div>
    </div>
</body>
</html>