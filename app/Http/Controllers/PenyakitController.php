<?php

namespace App\Http\Controllers;

use App\Models\kspenyakit;
use App\Models\penanaman_bawang;
use App\Models\penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenyakitController extends Controller
{
    
    public function index()
    {
        $currentuserid = Auth::user()->id;

        // $kegiatansawahs = kspenyakit::with('kspenyakit', 'penyakit');
        // $kegiatansawah = penanaman_bawang::where('id_user', $currentuserid);
        // $kegiatansawah = penanaman_bawang::where('id_user', $currentuserid)->with('kspenyakit')->get();
        // return var_dump($kegiatansawahs);
        $kegiatansawah = kspenyakit::all();
        // $data = kspenyakit::find($currentuserid)->kspenyakit;
        return json_encode($kegiatansawah);
        // return view('pages/penyakit/datapenyakit', compact('kegiatansawahs'));
    }

    public function create()
    {
        $currentuserid = Auth::user()->id;
        $kegiatansawah = penanaman_bawang::where('id_user', $currentuserid)->get();
        // $penyakit = Penyakit::all();
        return view('penyakit.create', compact('kegiatansawah'));
    }

    public function store(Request $request)
    {
        // $kspenyakit = new kspenyakit;
        // $kspenyakit = req
        // $currentuserid = Auth::user()->id;

        $kspenyakit = new kspenyakit;
        $kspenyakit->kegiatansawah_id = $request->kegiatansawah_id;
        $kspenyakit->ks_penyakit_tanggal_terkena = $request->ks_penyakit_tanggal_terkena;
        $kspenyakit->ks_penyakit_keterangan = $request->ks_penyakit_keterangan;
        $kspenyakit->save();    
        $penyakit_gambar = $request->file('penyakit_gambar');
        $new_name = rand() . '.' . $penyakit_gambar->getClientOriginalExtension();
        $penyakit_gambar->move(public_path('images'), $new_name);

        foreach ($request->penyakit as $key => $value){
            $penyakit = array(
                'id' => $kspenyakit->penyakit_id,
                'penyakit_nama' => $request->penyakit_nama,
                'penyakit_gambar' => $new_name,
                'penyakit_keterangan' => $request->penyakit_keterangan,
            );  

            $simpan = penyakit::create($penyakit);
        }

            
    //   ('kspenyakit.index')->with('success', 'Data berhasil ditambahkan');


        return response()->json([
            'data' => 'terkirim',
            'isi' => $simpan,
        ]);
        
        // redirect('/kspenyakit')->with('success', 'Data penyakit berhasil ditambahkan.');
    }
}