<?php

namespace App\Http\Controllers;

use App\Models\penanaman_bawang;
use Illuminate\Http\Request;

class PenanamanBawangController extends Controller
{
    public function datapenanamanbawang(){
        $data = penanaman_bawang::all();
        return view('/pages/penanamanbawang/datapenanamanbawang', compact('data'));
    }

    public function tambahdatapenanamanbawang(){
        return view('/pages/penanamanbawang/tambahdatapenanamanbawang');

    }

    // INSERT DATA
    public function insertdatapenanamanbawang(Request $request){

        // data array metode pengairan
        $ks_metode_pengairan = isset($_POST['ks_metode_pengairan']) && is_array($_POST['ks_metode_pengairan']) ? $_POST['ks_metode_pengairan'] : [];
        $input_ks_metode_pengairan = implode(', ', $ks_metode_pengairan);

        // data array sumber modal
        $ks_modal = isset($_POST['ks_modal']) && is_array($_POST['ks_modal']) ? $_POST['ks_modal'] : [];
        $input_ks_modal = implode(', ', $ks_modal);

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
        $jmlBibit = $request->input('ks_bibit');
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

        penanaman_bawang::create([
            'ks_metode_pengairan' => $input_ks_metode_pengairan,
            'ks_modal' => $input_ks_modal,
            'ks_luas_lahan' => $dataHasilluaslahan,
            'ks_bibit' => $dataHasiljumlahbibit,
            'ks_waktu_tanam' => $ks_waktu_tanam,
            'ks_status_lahan' => $input_ks_status_lahan,
            'ks_jumlah_modal' => $ks_jumlah_modal
        ]);

        return redirect()->route('datapenanamanbawang')->with('success', 'Data Penanaman Bawang telah berhasil ditambahkan');
    }

    public function tampildatapenanamanbawang($id){
        $data = penanaman_bawang::find($id);
        // dd($data);
        return view('/pages/penanamanbawang/tampildatapenanamanbawang', compact('data'));
    }


    // UPDATE DATA
    public function updatedatapenanamanbawang(Request $request, $id){
        // data array metode pengairan
        $ks_metode_pengairan = isset($_POST['ks_metode_pengairan']) && is_array($_POST['ks_metode_pengairan']) ? $_POST['ks_metode_pengairan'] : [];
        $input_ks_metode_pengairan = implode(', ', $ks_metode_pengairan);

        // data array sumber modal
        $ks_modal = isset($_POST['ks_modal']) && is_array($_POST['ks_modal']) ? $_POST['ks_modal'] : [];
        $input_ks_modal = implode(', ', $ks_modal);

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
        $jmlBibit = $request->input('ks_bibit');
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

        $data = penanaman_bawang::find($id);
        $data->update([
            'ks_metode_pengairan' => $input_ks_metode_pengairan,
            'ks_modal' => $input_ks_modal,
            'ks_luas_lahan' => $dataHasilluaslahan,
            'ks_bibit' => $dataHasiljumlahbibit,
            'ks_waktu_tanam' => $ks_waktu_tanam,
            'ks_status_lahan' => $input_ks_status_lahan,
            'ks_jumlah_modal' => $ks_jumlah_modal
        ]);

        return redirect()->route('datapenanamanbawang')->with('success', 'Data Penanaman Bawang telah berhasil diupdate');
    }
}
