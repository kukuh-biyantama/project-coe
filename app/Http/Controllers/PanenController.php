<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanenController extends Controller
{
    public function index(){
        return view('/pages/panen/datapanen');
    }

    public function tambahdatapanen(){
        return view('/pages/panen/tambahdatapanen');
    }
}
