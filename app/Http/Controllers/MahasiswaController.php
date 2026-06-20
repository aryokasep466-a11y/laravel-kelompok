<?php

namespace App\Http\Controllers;

use App\Models\Tugas;

class MahasiswaController extends Controller
{
    public function dashboard()
    {
        $tugas = Tugas::all();

        return view('mahasiswa.dashboard', compact('tugas'));
    }
}