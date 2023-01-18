<?php

namespace App\Http\Controllers;

use App\Models\kspenyakit;
use App\Models\penanaman_bawang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenyakitController extends Controller
{
    public function index(){

        $currentuserid = Auth::user()->id;
        $data = penanaman_bawang::with('kspenyakit')->where('id_user' , $currentuserid);
        // return view('/pages/penyakit/datapenyakit');
        // return json_encode($data);
        return dd($data);

    }

    public function tambahdatapenyakit(){

        



        return view('/pages/penyakit/tambahdatapenyakit');
    }
}
