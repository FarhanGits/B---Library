<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DfAnggotaController extends Controller
{
    public function indexAnggota(Request $request) {
        if ($request->has('search')) {
            $dataAnggota = User::where('namaAnggota', 'LIKE', '%' .$request->search.'%')->paginate(10);
        } else {
            $dataAnggota = User::where('role', 'User')->paginate(10);
        }
        return view('Admin/dashboard-edit-anggota', compact('dataAnggota'));
    }

    public function insertdataanggota(Request $request){
        // dd($request->all());
        $dataAnggota = User::create([
            'namaAnggota' => $request->namaAnggota,
            'NIK'=> $request->NIK,
            'alamatPengguna'=> $request->alamatPengguna,
            'noTelepon'=> $request->noTelepon,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
            // 'fotoProfil'=> $request->fotoProfil,
            'jenisKelamin'=> $request->jenisKelamin,
            'role'=> $request->role,
            'remember_token'=> Str::random(60),
        ]);
        // if ($request->hasFile('fotoProfil')) {
        //     $request->file('fotoProfil')->move('img/img-user/foto-profil-user/', $request->file('fotoProfil')->getClientOriginalName());
        //     $dataAnggota->fotoProfil = $request->file('fotoProfil')->getClientOriginalName();
        //     $dataAnggota->save();
        // }
        return redirect()->route('dfanggota');
    }

    public function tampildataanggota($id){
        $dataAnggota = User::find($id);
        return view('Admin/dashboard-widget-edit-anggota', compact('dataAnggota'));
    }

    public function editdataanggota(Request $request, $id){
        $dataAnggota = User::find($id);
        $dataAnggota->update($request->all());
        return redirect()->route('dfanggota');
    }

    public function deletedataanggota($id){
        $dataAnggota = User::find($id);
        $dataAnggota->delete();
        return redirect()->route('dfanggota');
    }
}
