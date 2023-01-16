<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'kelas',
        'nohp',
        'jenis_kelamin',
        'j_hadir',
        'j_ijin',
        'j_sakit',
        'j_absen',
    ];
}
