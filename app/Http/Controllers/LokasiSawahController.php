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
        return view('/pages/formlokasisawah');
    }
<<<<<<< HEAD

    public function tambahlokasi(request $request)
    {
        $currentuserid = Auth::user()->id;
        $lokasi_latitude = $request->input('lokasi_latitude');
        $lokasi_longitude = $request->input('lokasi_longitude');
        $kabupaten = $request->input('kabupaten');
        $lokasi_keterangan = $request->input('lokasi_keterangan');
        $id_iot = $request->input('id_iot');
<<<<<<< HEAD

        // $client = new Client();
        // $api_url = "http://compute.dinus.ac.id:900/api/tambah/datalokasi";
        $post = Http::post('compute.dinus.ac.id:900/api/post/location/', [
            'id' => $currentuserid,
            'lokasi_latitude' => (string)$lokasi_latitude,
            'lokasi_longitude' => (string)$lokasi_longitude,
            'kabupaten' => (string)$kabupaten,
            'lokasi_keterangan' => (string)$lokasi_keterangan,
            'id_iot' => (int)$id_iot
        ]);

        // $tanggal = $date->format('Y-m-d H:i:s');
        // return response()->json(['massage'=> 'insert data success', 'data' => $tambahlokasi]);
        // return redirect('kirimlokasi')->with(['success' => 'Data Berhasil Terinput']);
        return redirect('/formlokasisawah')->with(['success' => 'Data Berhasil Terinput']);
    }
    // return redirect('tambahlokasi')->with(['success' => 'Pesan Berhasil']);
=======
    
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
>>>>>>> parent of 482db7f (bew)
=======
>>>>>>> parent of cb4a62c (tambahlokasi)
}
