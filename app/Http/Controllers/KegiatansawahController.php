<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class KegiatansawahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pages/kegiatansawah/datakegiatansawah');
    }

    public function tambahdatakegiatansawah()
    {
        return view('/pages/kegiatansawah/tambahdatakegiatansawah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form Validasi
        $this->validate($request, [
            'ks_metode_pengairan' => 'required|min:1',
            'ks_sumber_modal' => 'required|min:1',
            'ks_luas_lahan' => 'required',
            'ks_bibit_jumlah' => 'required',
            'ks_waktu_tanam' => 'required',
            'ks_status_lahan' => 'required',
            'ks_jumlah_modal' => 'required',
        ]);

        // auth current user
        $currentuserid = Auth::user()->id;

        // data array metode pengairan
        $ks_metode_pengairan = isset($_POST['ks_metode_pengairan']) && is_array($_POST['ks_metode_pengairan']) ? $_POST['ks_metode_pengairan'] : [];
        $input_ks_metode_pengairan = implode(', ', $ks_metode_pengairan);

        // data array sumber modal
        $ks_sumber_modal = isset($_POST['ks_sumber_modal']) && is_array($_POST['ks_sumber_modal']) ? $_POST['ks_sumber_modal'] : [];
        $input_ks_sumber_modal = implode(', ', $ks_sumber_modal);

        // konversi luas lahan
        $satuanLuas_lahan = $request->input('stnLuasLahan');
        $dataLuas_lahan = $request->input('ks_luas_lahan');
        $dataHasilluaslahan = $dataLuas_lahan;
        if ($satuanLuas_lahan == "Hektar") {
            $dataHasilluaslahan = $dataHasilluaslahan * 10000;
        } else {
            $dataHasilluaslahan = $dataHasilluaslahan;
        }

        //konversi bibit ke kg
        $jmlBibit = $request->input('ks_bibit_jumlah');
        $stnJmlbibit = $request->input('stnBibit');
        $dataHasiljumlahbibit = $jmlBibit;
        if ($stnJmlbibit == "Kuintal") {
            $dataHasiljumlahbibit = $dataHasiljumlahbibit * 100;
        }
        if ($stnJmlbibit == "Ton") {
            $dataHasiljumlahbibit = $dataHasiljumlahbibit * 1000;
        } else {
            $dataHasiljumlahbibit = $dataHasiljumlahbibit;
        }

        // waktu tanam
        $ks_waktu_tanam = $request->input('ks_waktu_tanam');

        // data array status lahan
        $ks_status_lahan = isset($_POST['ks_status_lahan']) && is_array($_POST['ks_status_lahan']) ? $_POST['ks_status_lahan'] : [];
        $input_ks_status_lahan = implode(', ', $ks_status_lahan);

        // jumlah modal
        $ks_jumlah_modal = $request->input('ks_jumlah_modal');

        //ks panen
        // $ks_panen = $request->input('ks_panen');

        // response API
        $response = Http::post(
            'http://compute.dinus.ac.id:900/api/post/kegiatansawah',
            [
                'id' => $currentuserid,
                'ks_metode_pengairan' => $input_ks_metode_pengairan,
                'ks_sumber_modal' => $input_ks_sumber_modal,
                'ks_luas_lahan' => $dataHasilluaslahan,
                'ks_bibit_jumlah' => $dataHasiljumlahbibit,
                'ks_waktu_tanam' =>  $ks_waktu_tanam,
                'ks_status_lahan' => $input_ks_status_lahan,
                'ks_jumlah_modal' => $ks_jumlah_modal
                // 'ks_panen' => $ks_panen
            ]
        );
        // $resrf = Http::post('http://compute.dinus.ac.id:900/api/post/kegiatansawah', 
        // [
        //     'id' => $currentuserid,
        //     'ks_metode_pengairan' => $input_ks_metode_pengairan,
        //     'ks_sumber_modal' => $input_ks_sumber_modal,
        //     'ks_luas_lahan' => $dataHasilluaslahan,
        //     'ks_bibit_jumlah' => $dataHasiljumlahbibit,
        //     'ks_waktu_tanam' =>  $ks_waktu_tanam,
        //     'ks_status_lahan' => $input_ks_status_lahan,1e3e
        //     'ks_jumlah_modal' => $ks_jumlah_modal
        //     // 'ks_panen' => $ks_panen
        // ]
        // );
        // return redirect()->route('datakegiatansawah')->with('success', 'Data Kegiatan Sawah telah berhasil ditambahkan');
        return redirect('tambahdatakegiatansawah')->with('status', 'Data Kegiatan Sawah Telah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
