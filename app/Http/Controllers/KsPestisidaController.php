<?php

namespace App\Http\Controllers;

use App\Models\ks_pestisida;
use Illuminate\Http\Request;

class KsPestisidaController extends Controller
{
    public function index(){
        $data = ks_pestisida::all();
        // dd($data);
        return view('/pages/pestisida/datapestisida', compact('data'));
    }

    public function tambahdatapestisida(){
        return view('/pages/pestisida/tambahdatapestisida');
    }

    public function insertdatapestisida(Request $request){
        // dd($request->all());
        ks_pestisida::create($request->all());
        return redirect()->route('datapestisida');
    }

}
