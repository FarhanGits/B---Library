<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\DfAnggotaController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DfBukuController;
use App\Http\Controllers\LogRegController;
use App\Http\Controllers\PeminjamanController;
use App\Models\DfBuku;
use App\Models\Peminjaman;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// ============================== Admin ==============================

Route::group(['middleware' => ['auth','hakakses:Admin']], function(){
    Route::get('/dashboard', function(){
        $lengthAnggota = User::where('role', 'User')->count();
        $lengthBuku = DfBuku::count();
        $lengthPeminjaman = Peminjaman::count();
        $anggota = Peminjaman::with(['user', 'book'])->get();
        $buku = DfBuku::all();
        return view('Admin/dashboard-admin', compact('anggota', 'buku', 'lengthBuku', 'lengthAnggota', 'lengthPeminjaman'));
    })->name('dashboard');
    
    Route::get('/akun', function(){
        return view('Admin/dashboard-akun');
    })->name('akun');
    
    Route::get('/keterlambatan', function(){
        $datapinjam = Peminjaman::with(['user', 'book'])->get();
        return view('Admin/dashboard-keterlambatan', compact('datapinjam'));
    })->name('keterlambatan');
    
    Route::get('/dfbuku',[DfBukuController::class, 'indexBuku'])->name('dfbuku');
    Route::post('/insertdatabuku',[DfBukuController::class, 'insertdatabuku'])->name('insertdatabuku');
    Route::get('/tampildata/{id}',[DfBukuController::class, 'tampildata'])->name('tampildata'); // -> Menampilkan halaman edit data yang dibuat
    Route::post('/editdata/{id}',[DfBukuController::class, 'editdata'])->name('editdata');
    Route::get('/deletedata/{id}',[DfBukuController::class, 'deletedata'])->name('deletedata');
    
    Route::get('/pengembalianbuku',[PeminjamanController::class, 'viewPengembalian'])->name('pengembalianbuku');
    Route::get('/konfirmasipengembalian/{id}',[PeminjamanController::class, 'logKonfirmasi'])->name('konfirmasipengembalian');
    Route::post('/bukukembali/{id}',[PeminjamanController::class, 'bukuKembali'])->name('bukukembali');
    
    Route::get('/dfanggota',[DfAnggotaController::class, 'indexAnggota'])->name('dfanggota');
    Route::post('/insertdataanggota',[DfAnggotaController::class, 'insertdataanggota'])->name('insertdataanggota');
    Route::get('/tampildataanggota/{id}',[DfAnggotaController::class, 'tampildataanggota'])->name('tampildataanggota'); // -> Menampilkan halaman edit data yang dibuat
    Route::post('/editdataanggota/{id}',[DfAnggotaController::class, 'editdataanggota'])->name('editdataanggota');
    Route::get('/deletedataanggota/{id}',[DfAnggotaController::class, 'deletedataanggota'])->name('deletedataanggota');
});

// ============================== User ==============================

Route::group(['middleware' => ['auth','hakakses:User']], function(){
    Route::get('/userhome', function(){
        $data = DfBuku::all();
        return view('User/homeuser', compact('data'));
    })->name('userhome');
    
    Route::get('/riwayatkunjungan', function(){
        $user = auth()->user();
        $datapinjam = Peminjaman::with(['user', 'book'])->where('user_id', $user->id)->get();
        return view('User/riwayatkunjungan', compact('datapinjam'));
    })->name('riwayatkunjungan');

    Route::get('/daftarkoleksi-user', [DfBukuController::class, 'daftarKoleksiUser'])->name('daftarkoleksi-user');
    Route::get('/daftarkoleksi-user/buku/{id}',[DfBukuController::class, 'detailBukuUser'])->name('daftarkoleksi-user/buku');
    
    Route::get('/dashboardakunuser', function(){
        return view('User/dashboard-akun-user');
    })->name('dashboardakunuser');
    
    Route::get('/dashboarduser', function(){
        return view('User/dashboard-user');
    })->name('dashboarduser');
    
    Route::get('/dashboardpusling', function(){
        return view('User/dashboard-jadwal-pusling');
    })->name('dashboardpusling');
    
    Route::get('/dashboardriwayatbuku', function(){
        $user = auth()->user();
        $datapinjam = Peminjaman::with(['user', 'book'])->where('user_id', $user->id)->get();
        return view('User/dashboard-riwayat-buku', compact('datapinjam'));
    })->name('dashboardriwayatbuku');

    // === Peminjaman
    Route::post('/peminjaman', [PeminjamanController::class, 'pinjamBuku'])->name('peminjaman');
});

// // // // //

Route::get('/berita1', function(){
    return view('User/tampilanberita');
})->name('berita1');

Route::get('/berita2', function(){
    return view('User/tampilanberita2');
})->name('berita2');

Route::get('/berita3', function(){
    return view('User/tampilanberita3');
})->name('berita3');

Route::get('/berita4', function(){
    return view('User/tampilanberita4');
})->name('berita4');

Route::get('/buku1', function(){
    return view('User/tampilanbuku1');
})->name('buku1');

Route::get('/buku2', function(){
    return view('User/tampilanbuku2');
})->name('buku2');

Route::get('/buku3', function(){
    return view('User/tampilanbuku3');
})->name('buku3');

Route::get('/buku4', function(){
    return view('User/tampilanbuku4');
})->name('buku4');

// ============================== Landing Page ==============================

Route::get('/', function(){
    $data = DfBuku::all();
    return view('homepage', compact('data'));
})->name('landinghome');

Route::get('/daftarkoleksi', [DfBukuController::class, 'daftarKoleksi'])->name('daftarkoleksi');
Route::get('/daftarkoleksi/buku/{id}',[DfBukuController::class, 'detailBuku'])->name('daftarkoleksi/buku');

// ============================== Login & Register ==============================

// === User
Route::get('/login',[LogRegController::class, 'login'])->name('login');
Route::post('/login-user',[LogRegController::class, 'checkLogin'])->name('login-user');

Route::get('/register',[LogRegController::class, 'register'])->name('register');
Route::post('/register-user',[LogRegController::class, 'registerUser'])->name('register-user');

Route::get('/logout-user',[LogRegController::class, 'logoutUser'])->name('logout-user');

// === Admin
Route::get('/login-admin',[LogRegController::class, 'loginAdminPage'])->name('login-admin');
Route::post('/login-administrator',[LogRegController::class, 'checkLoginAdmin'])->name('login-administrator');

Route::get('/register-admin',[LogRegController::class, 'registerAdminPage'])->name('register-admin');
Route::post('/register-administrator',[LogRegController::class, 'registerAdmin'])->name('register-administrator');

Route::get('/logout-admin',[LogRegController::class, 'logoutAdmin'])->name('logout-admin');