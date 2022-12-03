<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kegiatansawah extends Model
{
    use HasFactory;

    public function allDataKegiatanSawah(){
        return DB::table('kegiatansawahs')
                    ->join('users', 'user_id', '=', 'kegiatansawahs.user_id')
                    ->join('lokasi_sawahs', 'lokasisawah_id', '=', 'kegiatansawahs.lokasisawah_id')
                    ->get();
    }
}
