<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KsPupukController extends Controller
{
    public function index(){
        return view('/pages/pupuk/datapupuk');
    }

    public function tambahdatapupuk(){
        return view('/pages/pupuk/tambahdatapupuk');
    }
}
