<?php

namespace App\Http\Controllers;

use App\Models\ks_pestisida;
use Illuminate\Http\Request;

class KsPestisidaController extends Controller
{
    public function datapestisida(){
        $data = ks_pestisida::orderBy('ks_pestisida_tgl_semprot', 'DESC')->get();
        return view('/pages/pestisida/datapestisida', compact('data'));
    }

    public function tambahdatapestisida(){
        return view('/pages/pestisida/tambahdatapestisida');
    }

    public function insertdatapestisida(Request $request){
        // Form Validasi
        $this->validate($request, [
            'ks_pestisida_nama' => 'required|max:50',
            'ks_pestisida_tempat_membeli' => 'required|min:1',
            'ks_pestisida_tgl_semprot' => 'required',
            'ks_pestisida_jumlah_takaran' => 'required',
        ]);

        // nama pestisida
        $input_ks_pestisida_nama = $request->input('ks_pestisida_nama');

        // data array tempat membeli pestisida
        $ks_pestisida_tempat_membeli = isset($_POST['ks_pestisida_tempat_membeli']) && is_array($_POST['ks_pestisida_tempat_membeli']) ? $_POST['ks_pestisida_tempat_membeli'] : [];
        $input_ks_pestisida_tempat_membeli = implode(', ', $ks_pestisida_tempat_membeli);

        // tanggal semprot pestisida
        $input_ks_pestisida_tgl_semprot = $request->input('ks_pestisida_tgl_semprot');

        // konversi jumlah takaran pestisida
        $dataJumlahTakaranPestisida = $request->input('ks_pestisida_jumlah_takaran');
        $stnJumlahTakaranPestisida = $request->input('stnJumlahTakaranPestisida');
        $dataHasilJumlahTakaranPestisida = $dataJumlahTakaranPestisida;
        if ($stnJumlahTakaranPestisida == "Mililiter") {
            $dataHasilJumlahTakaranPestisida = $dataHasilJumlahTakaranPestisida * 0.001;
        } else {
            $dataHasilJumlahTakaranPestisida = $dataHasilJumlahTakaranPestisida;
        }

        // keterangan pestisida
        $input_ks_pestisida_keterangan = $request->input('ks_pestisida_keterangan');

        ks_pestisida::create([
            'ks_pestisida_nama' => $input_ks_pestisida_nama,
            'ks_pestisida_tempat_membeli' => $input_ks_pestisida_tempat_membeli,
            'ks_pestisida_tgl_semprot' => $input_ks_pestisida_tgl_semprot,
            'ks_pestisida_jumlah_takaran' => $dataHasilJumlahTakaranPestisida,
            'ks_pestisida_keterangan' => $input_ks_pestisida_keterangan
        ]);

        


        return redirect()->route('datapestisida')->with('success', 'Data Pestisida telah berhasil ditambahkan');
    }

    public function tampildatapestisida($id){
        $data = ks_pestisida::find($id);
        return view('/pages/pestisida/tampildatapestisida', compact('data'));
    }

    public function updatedatapestisida(Request $request, $id){
       
        // nama pestisida
        $input_ks_pestisida_nama = $request->input('ks_pestisida_nama');

        // data array tempat membeli pestisida
        $ks_pestisida_tempat_membeli = isset($_POST['ks_pestisida_tempat_membeli']) && is_array($_POST['ks_pestisida_tempat_membeli']) ? $_POST['ks_pestisida_tempat_membeli'] : [];
        $input_ks_pestisida_tempat_membeli = implode(', ', $ks_pestisida_tempat_membeli);

        // tanggal semprot pestisida
        $input_ks_pestisida_tgl_semprot = $request->input('ks_pestisida_tgl_semprot');

        // konversi jumlah takaran pestisida
        $dataJumlahTakaranPestisida = $request->input('ks_pestisida_jumlah_takaran');
        $stnJumlahTakaranPestisida = $request->input('stnJumlahTakaranPestisida');
        $dataHasilJumlahTakaranPestisida = $dataJumlahTakaranPestisida;
        if ($stnJumlahTakaranPestisida == "Mililiter") {
            $dataHasilJumlahTakaranPestisida = $dataHasilJumlahTakaranPestisida * 0.001;
        } else {
            $dataHasilJumlahTakaranPestisida = $dataHasilJumlahTakaranPestisida;
        }

        // keterangan pestisida
        $input_ks_pestisida_keterangan = $request->input('ks_pestisida_keterangan');

        $data = ks_pestisida::find($id);
        $data->update([
            'ks_pestisida_nama' => $input_ks_pestisida_nama,
            'ks_pestisida_tempat_membeli' => $input_ks_pestisida_tempat_membeli,
            'ks_pestisida_tgl_semprot' => $input_ks_pestisida_tgl_semprot,
            'ks_pestisida_jumlah_takaran' => $dataHasilJumlahTakaranPestisida,
            'ks_pestisida_keterangan' => $input_ks_pestisida_keterangan
        ]);

        return redirect()->route('datapestisida')->with('success', 'Data Pestisida telah berhasil diupdate');

    }
}
