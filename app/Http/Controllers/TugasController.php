<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas;
use App\Models\PengumpulanTugas;

class TugasController extends Controller
{
    public function lihatPengumpulan()
{
    $pengumpulan = PengumpulanTugas::with('mahasiswa', 'tugas')->get();

    return view('dosen.pengumpulan', compact('pengumpulan'));
}
    // Menampilkan halaman tugas dosen
    public function index()
    {
        $tugas = Tugas::all();

        return view('dosen.tugas', compact('tugas'));
    }

    // Menyimpan tugas dari dosen
    public function store(Request $request)
{
    Tugas::create([
        'nama_matkul' => $request->judul,
        'deskripsi_tugas' => $request->deskripsi,
        'deadline' => $request->deadline,
        'status' => 'aktif'
    ]);


        return redirect('/dosen/tugas')
            ->with('success', 'Tugas berhasil ditambahkan');
    }

    // Upload tugas mahasiswa
    public function upload(Request $request)
{
    $file = $request->file('file');

    $path = $file->store('tugas', 'public');

    PengumpulanTugas::create([
        'tugas_id' => $request->tugas_id,
        'mahasiswa_id' => auth()->id(),
        'file_path' => $path,
    ]);

    return back()->with('success', 'Tugas berhasil dikirim');
}
   public function edit($id)
{
    $tugas = Tugas::findOrFail($id);

    return view('dosen.edit_tugas', compact('tugas'));
}

public function update(Request $request, $id)
{
    $tugas = Tugas::findOrFail($id);

    $tugas->update([
        'nama_matkul' => $request->nama_matkul,
        'deskripsi_tugas' => $request->deskripsi_tugas,
        'deadline' => $request->deadline,
    ]);

    return redirect('/dosen/tugas')
        ->with('success', 'Tugas berhasil diupdate');
}
public function destroy($id)
{
    $tugas = Tugas::findOrFail($id);

    $tugas->delete();

    return redirect('/dosen/tugas')
        ->with('success', 'Tugas berhasil dihapus');
}
}