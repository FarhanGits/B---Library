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
    public function pinjamBuku(Request $request, DfBuku $dfbuku){
        $rentDate = Carbon::create($request['tanggalPinjam']);
        $request['tanggalKembali'] = $rentDate->addDays(5);
        // dd($request->all());
        Peminjaman::create($request->all());
        return redirect('/daftarkoleksi-user');
    }
}
