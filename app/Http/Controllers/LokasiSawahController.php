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

    public function lokasisawahjson(Request $request){
        $client = new Client();
        $api_url = "http://compute.dinus.ac.id:900/api/tambah/datalokasi";
        $res = $client->post($api_url, [
            'json' => [
                "lokasi_latitude" => $request->input('lokasi_latitude'),
                "lokasi_longitude" => $request->input('lokasi_longitude'),
                "kabupaten" => $request->input('kabupaten'),
                "lokasi_keterangan" => $request->input('lokasi_keterangan'),
                "id_iot" => $request->input('id_iot')
            ]
        ]);

        $data_body = $res->getBody();
        return view('/pages/ssensorsawah/datassensorsawah', ['data_body' => $data_body]);
    }

    
}
