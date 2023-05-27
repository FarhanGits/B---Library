<?php

namespace App\Http\Controllers;

use App\Models\DfBuku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function pinjam(DfBuku $buku, Request $request){
        dd([$buku, $request]);
    }
}
