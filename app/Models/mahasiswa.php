<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
        'user_id',
        'nim',
        'nama',
        'prodi',
        'semester'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function pengumpulanTugas()
{
    return $this->hasMany(PengumpulanTugas::class);
}
}