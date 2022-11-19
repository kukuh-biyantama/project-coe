<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\lokasi_sawah;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Double;

class LokasiSawahController extends Controller
{
    public function index(){
        return view('/pages/formlokasisawah');
        
    }
}
