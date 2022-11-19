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

    public function tambahlokasi(request $request){
        $lokasi_latitude = $request->input('lokasi_latitude');
        $lokasi_longitude = $request->input('lokasi_longitude');
        $kabupaten = $request->input('kabupaten');
        $lokasi_keterangan = $request->input('lokasi_keterangan');
        $id_iot = $request->input('id_iot');
    
        $post = Http::post('http://compute.dinus.ac.id:900/api/tambah/datalokasi', [
    
                'lokasi_latitude' => $lokasi_latitude,
                'lokasi_longitude' => $lokasi_longitude,
                'kabupaten' => $kabupaten,
                'lokasi_keterangan' => $lokasi_keterangan,
                'id_iot' => $id_iot,
            ]);
            // $tanggal = $date->format('Y-m-d H:i:s');
            // return response()->json(['massage'=> 'insert data success', 'data' => $tambahlokasi]);
            return redirect('tambahlokasi')->with(['success' => 'Data Berhasil Terinput']);}
            // return redirect('tambahlokasi')->with(['success' => 'Pesan Berhasil']);
}


