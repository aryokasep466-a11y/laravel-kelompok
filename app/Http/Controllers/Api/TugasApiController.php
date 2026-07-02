<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasApiController extends Controller
{
    // GET Semua Tugas
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data tugas berhasil diambil',
            'data' => Tugas::all()
        ]);
    }

    // POST Tambah Tugas
   public function store(Request $request)
{
    $request->validate([
        'nama_matkul' => 'required',
        'deskripsi_tugas' => 'required',
        'deadline' => 'required|date',
        'status' => 'required',
    ]);

    $tugas = Tugas::create([
        'nama_matkul' => $request->nama_matkul,
        'deskripsi_tugas' => $request->deskripsi_tugas,
        'deadline' => $request->deadline,
        'status' => $request->status,
    ]);

    return response()->json([
        'success' => true,
        'message' => 'Tugas berhasil ditambahkan',
        'data' => $tugas
    ], 201);
}
    // GET Detail
    public function show($id)
    {
        $tugas = Tugas::findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $tugas
        ]);
    }

    // PUT Update
    public function update(Request $request, $id)
{
    $request->validate([
        'nama_matkul' => 'required',
        'deskripsi_tugas' => 'required',
        'deadline' => 'required|date',
        'status' => 'required',
    ]);

    $tugas = Tugas::findOrFail($id);

    $tugas->update([
        'nama_matkul' => $request->nama_matkul,
        'deskripsi_tugas' => $request->deskripsi_tugas,
        'deadline' => $request->deadline,
        'status' => $request->status,
    ]);

    return response()->json([
        'success' => true,
        'message' => 'Tugas berhasil diupdate',
        'data' => $tugas
    ]);
}

    // DELETE
    public function destroy($id)
    {
        $tugas = Tugas::findOrFail($id);

        $tugas->delete();

        return response()->json([
            'success' => true,
            'message' => 'Tugas berhasil dihapus'
        ]);
    }
}