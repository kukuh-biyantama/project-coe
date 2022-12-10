<?php

namespace App\Http\Controllers;

use App\Models\panen;
use Illuminate\Http\Request;

class PanenController extends Controller
{
    public function datapanen(){
        $data = panen::all();
        return view('/pages/panen/datapanen', compact('data'));
    }

    public function formtambahdatapanen(){
        return view('/pages/panen/formtambahdatapanen');
    }

    public function insertdatapanen(Request $request){
        // tanggal panen
        $panen_tanggal = $request->input('panen_tanggal');

        // panen hasil produksi
        $panenhasil = $request->input('panen_hasil_produksi');
        $stnpanenhasil = $request->input('stnpanenhasil');
        $resulthasilpanen = $panenhasil;
        if ($stnpanenhasil == "Kuintal") {
            $resulthasilpanen = $resulthasilpanen * 100;
        }
        if ($stnpanenhasil == "Ton") {
            $resulthasilpanen = $resulthasilpanen * 1000;
        } else {
            $resulthasilpanen = $resulthasilpanen;
        }
        
        // panen kualitas a
        $panenkualitas_a = $request->input('panen_kualitas_a');
        $stnpanenkualitas_a = $request->input('stnpanenkualitas_a');
        $resultpanenkualitas_a = $panenkualitas_a;
        if ($stnpanenkualitas_a == "Kuintal") {
            $resultpanenkualitas_a = $resultpanenkualitas_a * 100;
        }
        if ($stnpanenkualitas_a == "Ton") {
            $resultpanenkualitas_a = $resultpanenkualitas_a * 1000;
        } else {
            $resultpanenkualitas_a = $resultpanenkualitas_a;
        }

        // panen kualitas b
        $panenkualitas_b = $request->input('panen_kualitas_b');
        $stnpanenkualitas_b = $request->input('stnpanenkualitas_b');
        $resultpanenkualitas_b = $panenkualitas_b;
        if ($stnpanenkualitas_b == "Kuintal") {
            $resultpanenkualitas_b = $resultpanenkualitas_b * 100;
        }
        if ($stnpanenkualitas_b == "Ton") {
            $resultpanenkualitas_b = $resultpanenkualitas_b * 1000;
        } else {
            $resultpanenkualitas_b = $resultpanenkualitas_b;
        }

        // panen kualitas c 
        $panenkualitas_c = $request->input('panen_kualitas_c');
        $stnpanenkualitas_c = $request->input('stnpanenkualitas_c');
        $resultpanenkualitas_c = $panenkualitas_c;
        if ($stnpanenkualitas_c == "Kuintal") {
            $resultpanenkualitas_c = $resultpanenkualitas_c * 100;
        }
        if ($stnpanenkualitas_c == "Ton") {
            $resultpanenkualitas_c = $resultpanenkualitas_c * 1000;
        } else {
            $resultpanenkualitas_c = $resultpanenkualitas_c;
        }

        panen::create([
            'panen_tanggal' => $panen_tanggal,
            'panen_hasil_produksi' => $resulthasilpanen,
            'panen_kualitas_a' => $resultpanenkualitas_a,
            'panen_kualitas_b' => $resultpanenkualitas_b,
            'panen_kualitas_c' => $resultpanenkualitas_c
        ]);

        return redirect()->route('datapanen')->with('success', 'Data Panen telah berhasil ditambahkan');
        
    }

}
