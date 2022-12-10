<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class penanaman_bawang extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function verifikasipanen(){
        return DB::table('penanaman_bawangs')
        -> select('*')
    }
}
