<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Absensi;

class AbsensiController extends Controller
{
    public function index()
{
    $mahasiswa = Mahasiswa::all();

    return view('dosen.absensi', compact('mahasiswa'));
}

public function store(Request $request)
{
    foreach ($request->status as $id => $status) {

        Absensi::create([
            'mahasiswa_id' => $id,
            'tanggal' => now()->toDateString(),
            'status' => $status
        ]);
    }

    return back()->with('success','Absensi berhasil disimpan');
}

}