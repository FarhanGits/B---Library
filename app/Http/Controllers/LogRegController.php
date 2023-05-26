<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LogRegController extends Controller
{
    // === User
    public function login(){
        return view('login');
    }

    public function checkLogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/userhome');
        }
        return redirect('/login');
    }
    
    public function register(){
        return view('register');
    }

    public function registerUser(Request $request){
        // dd($request->all());
        // $dataAnggota = 
        User::create([
            'namaAnggota' => $request->namaAnggota,
            'NIK'=> $request->NIK,
            'alamatPengguna'=> $request->alamatPengguna,
            'noTelepon'=> $request->noTelepon,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
            'jenisKelamin'=> $request->jenisKelamin,
            'role'=> $request->role,
            'remember_token'=> Str::random(60),
        ]);

        return redirect('/login');
        
        // if ($request->hasFile('fotoProfil')) {
        //     $request->file('fotoProfil')->move('img/img-user/foto-profil-user/', $request->file('fotoProfil')->getClientOriginalName());
        //     $dataAnggota->fotoProfil = $request->file('fotoProfil')->getClientOriginalName();
        //     $dataAnggota->save();
        // }
    }

    public function logoutUser(){
        Auth::logout();
        return redirect('/login');
    }

    // === Admin
    public function loginAdminPage(){
        return view('Admin/login-admin');
    }

    public function checkLoginAdmin(Request $request){
        // dd($request->all());
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/akun'); // => Cek lagi
        }
        return redirect('/login-admin'); // => Cek lagi
    }

    public function registerAdminPage(){
        return view('Admin/register-admin');
    }

    public function registerAdmin(Request $request){
        // dd($request->all());
        // $dataAdmin = 
        User::create([
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

        return redirect('/login-admin');

        // if ($request->hasFile('fotoProfil')) {
        //     $request->file('fotoProfil')->move('img/img-admin/foto-profil-admin/', $request->file('fotoProfil')->getClientOriginalName());
        //     $dataAdmin->fotoProfil = $request->file('fotoProfil')->getClientOriginalName();
        //     $dataAdmin->save();
        // }
    }

    public function logoutAdmin(){
        Auth::logout();
        return redirect('/login-admin');
    }
}
