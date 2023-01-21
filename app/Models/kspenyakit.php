<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kspenyakit extends Model
{
    use HasFactory;
    protected $fillable = [

        'kegiatansawah_id',
        'penyakit_id',
        'ks_penyakit_tanggal_terkena',
        'ks_penyakit_keterangan',




    ];

    public function kegiatansawah(){
        return $this->belongsTo(penanaman_bawang::class, 'kegiatansawah_id', 'id');
    }

    public function penyakit(){
        return $this->belongsTo(penyakit::class, 'id', 'penyakit_id');
    }

    // public function penyakit(){







    // }

}
