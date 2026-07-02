<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Mahasiswa;

class RegisterMahasiswaController extends Controller
{
    public function create()
    {
        return view('auth.register_mahasiswa');
    }

   public function store(Request $request)
{
    $request->validate([
        'nim' => 'required',
        'nama' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'prodi' => 'required',
        'semester' => 'required',
    ]);

    $user = User::create([
        'name' => $request->nama,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => 'mahasiswa',
    ]);

    Mahasiswa::create([
        'user_id' => $user->id,
        'nim' => $request->nim,
        'nama' => $request->nama,
        'prodi' => $request->prodi,
        'semester' => $request->semester,
    ]);

    return redirect('/login')
        ->with('success', 'Registrasi berhasil');
}
}