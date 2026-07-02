<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('dosen.nilai', compact('mahasiswa'));
    }

public function store(Request $request)
{
    $nilaiAkhir =
        ($request->tugas * 0.3) +
        ($request->uts * 0.3) +
        ($request->uas * 0.4);

    Nilai::create([
        'mahasiswa_id' => $request->mahasiswa_id,
        'tugas' => $request->tugas,
        'uts' => $request->uts,
        'uas' => $request->uas,
        'nilai_akhir' => $nilaiAkhir
    ]);

    return back()->with('success','Nilai berhasil disimpan');
}
}
