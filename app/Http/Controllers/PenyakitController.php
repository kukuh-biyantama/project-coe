<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function index(){
        return view('/pages/penyakit/datapenyakit');
    }

    public function tambahdatapenyakit(){
        return view('/pages/penyakit/tambahdatapenyakit');
    }
}
