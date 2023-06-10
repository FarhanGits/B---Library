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
            <input type="text" id="nama" name="namaAnggota" required maxlength="100">
        
            <label for="nik">NIK:</label>
            <input type="text" id="nik" name="NIK" required minlength="16">
        
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamatPengguna" required></textarea required>

            <label for="nomor_telepon">Nomor Telepon:</label>
            <input type="text" id="noTelepon" name="noTelepon" required minlength="12" maxlength="13">
        
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required onclick="ValidateEmail(document.insertdata.email)">
        
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required minlength="8">
        
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

    <script src="{{asset('script/scriptDU.js')}}"></script>
</body>
</html>