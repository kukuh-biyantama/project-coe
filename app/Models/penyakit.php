<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyakit extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'penyakit_nama',
        'penyakit_gambar',
        'penyakit_keterangan',
    ];
}