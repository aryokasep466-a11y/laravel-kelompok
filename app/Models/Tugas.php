<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $table = 'tugas'; // Nama tabel di database
    protected $fillable = [
    'nama_matkul',
    'deskripsi_tugas',
    'deadline',
    'status'
];

    // Relasi: Satu tugas bisa dikumpulkan oleh banyak mahasiswa
    public function pengumpulan()
    {
        return $this->hasMany(PengumpulanTugas::class);
    }
}