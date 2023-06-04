<?php

namespace App\Http\Controllers;

use App\Models\DfBuku;
use App\Models\Peminjaman;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class PeminjamanController extends Controller
{
    public function pinjamBuku(Request $request){
        $rentDate = Carbon::create($request['tanggalPinjam']);
        $request['tanggalKembali'] = $rentDate->addDays(5);
        // dd($request->all());
        Peminjaman::create($request->all());
        return redirect('/daftarkoleksi-user');
    }

    public function viewPengembalian() {
        $data = Peminjaman::paginate(20);
        return view('Admin/dashboard-pengembalian-buku', compact('data'));
    }

    public function logKonfirmasi($id) {
        $data = Peminjaman::with(['user', 'book'])->find($id);
        return view('Admin/dashboard-widget-pengembalian', compact('data'));
    }

    public function bukuKembali(Request $request, $id) {
        $data = Peminjaman::with(['user', 'book'])->find($id);
        $data['tanggalKembaliAsli'] = Carbon::now();
        // dd($data->all());
        $data->update($request->all());
        $data->save();
        return redirect('/pengembalianbuku');
    }
}
