<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LokasiSawahController extends Controller
{
    public function index(){
        return view('/pages/formlokasisawah');
    }
}
