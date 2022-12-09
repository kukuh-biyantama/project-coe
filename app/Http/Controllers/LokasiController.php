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
        lokasi_sawah::create($request->all());
        return redirect()->route('datalokasisawah')->with('success', 'Data Lokasi Sawah telah berhasil ditambahkan');
    }

    public function formeditdatalokasisawah($id){
        $data = lokasi_sawah::find($id);
        // dd($data);
        return view('/pages/lokasi/formeditdatalokasisawah', compact('data'));
    }

    public function updatedatalokasisawah(Request $request, $id){
        $data = lokasi_sawah::find($id);
        $data->update($request->all());
        return redirect()->route('datalokasisawah')->with('success', 'Data Lokasi Sawah telah berhasil diupdate');
    }

    public function deletedatalokasisawah($id){
        $data = lokasi_sawah::find($id);
        $data->delete();
        return redirect()->route('datalokasisawah')->with('success', 'Data Lokasi Sawah telah berhasil dihapus');
    }

}
