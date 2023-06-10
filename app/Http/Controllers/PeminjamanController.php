<?php

namespace App\Http\Controllers;

use App\Models\DfBuku;
use App\Models\Peminjaman;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use function GuzzleHttp\Promise\all;

class PeminjamanController extends Controller
{
    public function pinjamBuku(Request $request){
        $rentDate = Carbon::create($request['tanggalPinjam']);
        $request['tanggalKembali'] = $rentDate->addDays(5);

        $status = DfBuku::findOrFail($request->book_id)->only('status');
        // dd($status);
        if ($status['status'] != 'Available') {
            Session::flash('message', 'Buku Sedang Dipinjam');
        } else {
            try {
                DB::beginTransaction();

                Peminjaman::create($request->all());

                $book = DfBuku::findOrFail($request->book_id);
                $book->status = 'Not Available';
                $book->save();
                DB::commit();

                return redirect('/daftarkoleksi-user');
                // dd('Monggo Pinjam');
            } catch (\Throwable $th) {
                DB::rollBack();
            }
        }
    }

    public function viewPengembalian() {
        $dataRiwayat = Peminjaman::with(['user', 'book'])->paginate(20);
        return view('Admin/dashboard-pengembalian-buku', compact('dataRiwayat'));
    }

    public function logKonfirmasi($id) {
        $data = Peminjaman::with(['user', 'book'])->find($id);
        return view('Admin/dashboard-widget-pengembalian', compact('data'));
    }

    public function bukuKembali(Request $request, $id) {
        $data = Peminjaman::with(['user', 'book'])->find($id);
        $data['tanggalKembaliAsli'] = Carbon::now();
        $book = DfBuku::findOrFail($request->book_id);
        $book->status = 'Available';
        $book->save();
        // dd($book);
        $data->update($request->all());
        $data->save();
        return redirect('/pengembalianbuku');
    }
}
