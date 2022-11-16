<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HamaController extends Controller
{
    public function index(){
        return view('/pages/hama/datahama');
    }

    public function tambahdatahama(){
        return view('/pages/hama/tambahdatahama');
    }
}
