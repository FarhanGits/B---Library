<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('style/style33.css')}}">
</head>
<body>
    <div class="container">
        <h1>Registrasi Anggota Baru!</h1>
        <form action="/register-user" method="POST">
            @csrf
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="namaAnggota" required>
        
            <label for="nik">NIK:</label>
            <input type="text" id="nik" name="NIK" required>
        
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamatPengguna" required></textarea required>

            <label for="nomor_telepon">Nomor Telepon:</label>
            <input type="text" id="noTelepon" name="noTelepon" required>
        
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenisKelamin" required>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>

            <label for="role_human">Role</label>
            <select id="role_human" name="role" required>
                <option value="User">User</option>
            </select>

            {{-- <label for="foto_profil">Masukkan Foto:</label>
            <input type="file" id="foto_profil" name="fotoProfil" required> --}}
        
            <button type="submit">Register</button>
        </form>
    </div>

    {{-- <script>

        let btn = document.getElementsByClassName("button")[0];
        btn.addEventListener("click", function(){
            alert("SUKSES");
        });

        function Daftar() {
            var namaLengkap = document.getElementById("nama lengkap").value;
            var userName = document.getElementById("username").value;
            var mail = document.getElementById("email").value;
            var nIK = document.getElementById("nik").value;
            var noTelp = document.getElementById("notelp").value;
            var passworD = document.getElementById("password").value;
            var ulangPassword = document.getElementById("ulang password").value;
            if((namaLengkap === "riska") && (userName === "123aaa") && (mail === "@gmail.com") && (nIK === "12345678910") && (noTelp === "08295320445959") && (passworD === "riskabdjb") && (ulangPassword === "riskabdjb")) {
                alert("Congratss!! your login is success!");
            }
            else {
                alert("Sorry!! Failed!")
            }
        }
    </script> --}}
</body>
</html>