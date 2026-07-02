<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{

    protected $fillable = [
        'mahasiswa_id',
        'tugas',
        'uts',
        'uas',
        'nilai_akhir'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
}

