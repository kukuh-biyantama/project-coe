<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatansawahController extends Controller
{
    public function datakegiatansawah(){
        $data = [
            'ks' => $this->Kegiatansawah->allDataKegiatansawah(),
        ];
        return view('/pages/kegiatansawah/datakegiatansawah', $data);
    }
}
