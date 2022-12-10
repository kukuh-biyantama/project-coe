<?php

namespace App\Http\Controllers;

use App\Models\lokasi_sawah;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function datalokasisawah(){
        $data = lokasi_sawah::all();
        return view('/pages/lokasi/datalokasisawah', compact('data'));
    }

    public function formtambahdatalokasisawah(){
        return view('/pages/lokasi/formtambahdatalokasisawah');
    }

    public function insertdatalokasisawah(Request $request){
        $lokasi_latitude = $request->input('lokasi_latitude');
        $lokasi_longitude = $request->input('lokasi_longitude');
        $kabupaten = $request->input('kabupaten');
        $lokasi_keterangan = $request->input('lokasi_keterangan'); 
        $id_iot = $request->input('id_iot'); 

        lokasi_sawah::create([
            'lokasi_latitude' => $lokasi_latitude,
            'lokasi_longitude' => $lokasi_longitude,
            'kabupaten' => $kabupaten,
            'lokasi_keterangan' => $lokasi_keterangan,
            'id_iot' => $id_iot
        ]);
        return redirect()->route('datalokasisawah')->with('success', 'Data Lokasi Sawah telah berhasil ditambahkan');
    }

    public function formeditdatalokasisawah($id){
        $data = lokasi_sawah::find($id);
        // dd($data);
        return view('/pages/lokasi/formeditdatalokasisawah', compact('data'));
    }

    public function updatedatalokasisawah(Request $request, $id){
        $lokasi_latitude = $request->input('lokasi_latitude');
        $lokasi_longitude = $request->input('lokasi_longitude');
        $kabupaten = $request->input('kabupaten');
        $lokasi_keterangan = $request->input('lokasi_keterangan'); 
        $id_iot = $request->input('id_iot'); 

        $data = lokasi_sawah::find($id);
        $data->update([
            'lokasi_latitude' => $lokasi_latitude,
            'lokasi_longitude' => $lokasi_longitude,
            'kabupaten' => $kabupaten,
            'lokasi_keterangan' => $lokasi_keterangan,
            'id_iot' => $id_iot
        ]);
        return redirect()->route('datalokasisawah')->with('success', 'Data Lokasi Sawah telah berhasil diupdate');
    }

    public function deletedatalokasisawah($id){
        $data = lokasi_sawah::find($id);
        $data->delete();
        return redirect()->route('datalokasisawah')->with('success', 'Data Lokasi Sawah telah berhasil dihapus');
    }

}
