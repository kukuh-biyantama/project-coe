<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SsensorsawahController extends Controller
{
    public function index(){
        return view('/pages/ssensorsawah/datassensorsawah');
    }

}
