<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\lokasi_sawah;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Double;
use Illuminate\Support\Facades\Http;
use auth;

class LokasiSawahController extends Controller
{
    public function index()
    {
        $currentuserid = Auth::user()->id;
         echo($currentuserid);
        return view('/pages/formlokasisawah');
        
    }


    public function tambahlokasi(request $request)
    {
        $currentuserid = Auth::user()->id;
        $lokasi_latitude = $request->input('lokasi_latitude');
        $lokasi_longitude = $request->input('lokasi_longitude');
        $kabupaten = $request->input('kabupaten');
        $lokasi_keterangan = $request->input('lokasi_keterangan');
        $id_iot = $request->input('id_iot');
        $post = Http::post('http://compute.dinus.ac.id:900/api/post/location/', [
    
                'id' => $currentuserid,
                'lokasi_latitude' => $lokasi_latitude,
                'lokasi_longitude' => $lokasi_longitude,
                'kabupaten' => $kabupaten,
                'lokasi_keterangan' => $lokasi_keterangan,
                'id_iot' => $id_iot
            ]);
           
            response()->json(['massage'=> 'insert data success', 'data' => $tambahlokasi]);
        }
}
