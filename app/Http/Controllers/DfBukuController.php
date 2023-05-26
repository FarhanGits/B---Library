<?php

namespace App\Http\Controllers;

use App\Models\DfBuku;
use Illuminate\Http\Request;

class DfBukuController extends Controller
{
    public function indexBuku(Request $request){
        if ($request->has('search')) {
            $data = DfBuku::where('judulBuku', 'LIKE', '%' .$request->search.'%')->paginate(10);
        } else {
            $data = DfBuku::paginate(10);
        }
        return view('Admin/dashboard-tambah-buku', compact('data'));
    }

    public function insertdatabuku(Request $request){
        // dd($request->all());
        $data = DfBuku::create($request->all());
        if ($request->hasFile('images')) {
            $request->file('images')->move('img/img-user/gambar-cover-buku/', $request->file('images')->getClientOriginalName());
            $data->images = $request->file('images')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('dfbuku')->with("success", "Buku berhasil ditambahkan!");
    }

    public function tampildata($id){
        $data = DfBuku::find($id);
        return view('Admin/dashboard-widget-edit-buku', compact('data'));
    }

    public function editdata(Request $request, $id){
        $data = DfBuku::find($id);
        $data->update($request->all());
        if ($request->hasFile('images')) {
            $request->file('images')->move('img/img-user/gambar-cover-buku/', $request->file('images')->getClientOriginalName());
            $data->images = $request->file('images')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('dfbuku');
    }

    public function deletedata($id){
        $data = DfBuku::find($id);
        $data->delete();
        return redirect()->route('dfbuku');
    }

    public function daftarKoleksi(Request $request){
        if ($request->has('search')) {
            $data = DfBuku::where('judulBuku', 'LIKE', '%' .$request->search.'%')->paginate(20);
        } else{
            $data = DfBuku::paginate(20);
        }
        return view('daftarkoleksi', compact('data'));
    }

    public function detailBuku($id){
        $data = DfBuku::find($id);
        return view('book', compact('data'));
    }

    public function daftarKoleksiUser(Request $request){
        if ($request->has('search')) {
            $data = DfBuku::where('judulBuku', 'LIKE', '%' .$request->search.'%')->paginate(20);
        } else{
            $data = DfBuku::paginate(20);
        }
        return view('User/daftarkoleksi-user', compact('data'));
    }

    public function detailBukuUser($id){
        $data = DfBuku::find($id);
        return view('User/book-user', compact('data'));
    }
}
