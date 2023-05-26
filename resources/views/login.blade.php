<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B-Library</title>
    <link rel="stylesheet" href="{{asset('style/style2.css')}}">
</head>
<body>
    <div class ="container">
        <div class="login">
            <form action="/login-user" method="POST">
                @csrf
                <h1>Login</h1>
                <hr>
                <p>Perpustakaan Bojonegoro</p>
                <label for="">Email</label>
                <input type="text" placeholder="example@gmail.com" name="email">
                <label for="">Password</label>
                <input type="password" placeholder="Password" name="password">
                <button type="submit">Login</button>
                <p>
                    <a href="/register">Belum punya akun? Daftar sekarang!</a>
                </p>
                <p>
                    <a href="/login-admin">Login sebagai admin?</a>
                </p> 
            </form>
        </div>
        <div class="right">
            <img src="img/image2.jpg" alt="Gambar Login">
        </div>
    </div>
</body>
</html>