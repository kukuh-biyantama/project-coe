<?php

namespace App\Http\Controllers;

use App\Models\ks_pupuk;
use Illuminate\Http\Request;
use DB;

class KsPupukController extends Controller
{

    public function datapupuk()
    {
        $data = ks_pupuk::orderBy('ks_pupuk_tgl_rabuk', 'DESC')->get();
        return view('/pages/pupuk/datapupuk', compact('data'));
    }

    // public function datapupuk()
    // {
    //     $data = ks_pupuk::all();

    //     return view('/pages/pupuk/datapupuk', compact('data'));
    // }

    // public function datapupuk(){
    //     $data = DB::table('barang')->join('detail_barang', 'detail_barang.id_barang', '=', 'barang.id_barang')->get();
    //     return view('/pages/pupuk/datapupuk', compact('data'));
    // }

    public function tambahdatapupuk()
    {
        return view('/pages/pupuk/tambahdatapupuk');
    }

    public function insertdatapupuk(Request $request)
    {
        // data array jenis pupuk
        $ks_pupuk_jenis = isset($_POST['ks_pupuk_jenis']) && is_array($_POST['ks_pupuk_jenis']) ? $_POST['ks_pupuk_jenis'] : [];
        $input_ks_pupuk_jenis = implode(', ', $ks_pupuk_jenis);

        // data array sumber pupuk organik
        $ks_pupuk_sumber_organik = isset($_POST['ks_pupuk_sumber_organik']) && is_array($_POST['ks_pupuk_sumber_organik']) ? $_POST['ks_pupuk_sumber_organik'] : [];
        $input_ks_pupuk_sumber_organik = implode(', ', $ks_pupuk_sumber_organik);

        // data array sumber pupuk anorganik
        $ks_pupuk_sumber_anorganik = isset($_POST['ks_pupuk_sumber_anorganik']) && is_array($_POST['ks_pupuk_sumber_anorganik']) ? $_POST['ks_pupuk_sumber_anorganik'] : [];
        $input_ks_pupuk_sumber_anorganik = implode(', ', $ks_pupuk_sumber_anorganik);

        // data array merk pupuk
        $ks_pupuk_merk = isset($_POST['ks_pupuk_merk']) && is_array($_POST['ks_pupuk_merk']) ? $_POST['ks_pupuk_merk'] : [];
        $input_ks_pupuk_merk = implode(', ', $ks_pupuk_merk);

        // tanggal rabuk pupuk
        $input_ks_pupuk_tgl_rabuk = $request->input('ks_pupuk_tgl_rabuk');

        //konversi jumlah takaran pupuk ke kilogram
        $jmlPupuk = $request->input('ks_pupuk_jumlah_takaran');
        $stnJmlPupuk = $request->input('stnPupuk');
        $dataHasiljumlahPupuk = $jmlPupuk;
        if ($stnJmlPupuk == "Kuintal") {
            $dataHasiljumlahPupuk = $dataHasiljumlahPupuk * 100;
        }
        if ($stnJmlPupuk == "Ton") {
            $dataHasiljumlahPupuk = $dataHasiljumlahPupuk * 1000;
        } else {
            $dataHasiljumlahPupuk = $dataHasiljumlahPupuk;
        }

        // keterangan pupuk
        $input_ks_pupuk_keterangan = $request->input('ks_pupuk_keterangan');

        ks_pupuk::create([
            'ks_pupuk_jenis' => $input_ks_pupuk_jenis,
            'ks_pupuk_sumber_organik' => $input_ks_pupuk_sumber_organik,
            'ks_pupuk_sumber_anorganik' => $input_ks_pupuk_sumber_anorganik,
            'ks_pupuk_merk' => $input_ks_pupuk_merk,
            'ks_pupuk_tgl_rabuk' => $input_ks_pupuk_tgl_rabuk,
            'ks_pupuk_jumlah_takaran' => $dataHasiljumlahPupuk,
            'ks_pupuk_keterangan' => $input_ks_pupuk_keterangan
        ]);

        return redirect()->route('datapupuk')->with('success', 'Data Pupuk telah berhasil ditambahkan');
    }

    public function tampildatapupuk($id)
    {
        $data = ks_pupuk::find($id);
        return view('/pages/pupuk/tampildatapupuk', compact('data'));
    }

    public function updatedatapupuk(Request $request, $id)
    {
        // data array jenis pupuk
        $ks_pupuk_jenis = isset($_POST['ks_pupuk_jenis']) && is_array($_POST['ks_pupuk_jenis']) ? $_POST['ks_pupuk_jenis'] : [];
        $input_ks_pupuk_jenis = implode(', ', $ks_pupuk_jenis);

        // data array sumber pupuk organik
        $ks_pupuk_sumber_organik = isset($_POST['ks_pupuk_sumber_organik']) && is_array($_POST['ks_pupuk_sumber_organik']) ? $_POST['ks_pupuk_sumber_organik'] : [];
        $input_ks_pupuk_sumber_organik = implode(', ', $ks_pupuk_sumber_organik);

        // data array sumber pupuk anorganik
        $ks_pupuk_sumber_anorganik = isset($_POST['ks_pupuk_sumber_anorganik']) && is_array($_POST['ks_pupuk_sumber_anorganik']) ? $_POST['ks_pupuk_sumber_anorganik'] : [];
        $input_ks_pupuk_sumber_anorganik = implode(', ', $ks_pupuk_sumber_anorganik);

        // data array merk pupuk
        $ks_pupuk_merk = isset($_POST['ks_pupuk_merk']) && is_array($_POST['ks_pupuk_merk']) ? $_POST['ks_pupuk_merk'] : [];
        $input_ks_pupuk_merk = implode(', ', $ks_pupuk_merk);

        // tanggal rabuk pupuk
        $input_ks_pupuk_tgl_rabuk = $request->input('ks_pupuk_tgl_rabuk');

        //konversi jumlah takaran pupuk ke kilogram
        $jmlPupuk = $request->input('ks_pupuk_jumlah_takaran');
        $stnJmlPupuk = $request->input('stnPupuk');
        $dataHasiljumlahPupuk = $jmlPupuk;
        if ($stnJmlPupuk == "Kuintal") {
            $dataHasiljumlahPupuk = $dataHasiljumlahPupuk * 100;
        }
        if ($stnJmlPupuk == "Ton") {
            $dataHasiljumlahPupuk = $dataHasiljumlahPupuk * 1000;
        } else {
            $dataHasiljumlahPupuk = $dataHasiljumlahPupuk;
        }

        // keterangan pupuk
        $input_ks_pupuk_keterangan = $request->input('ks_pupuk_keterangan');

        $data = ks_pupuk::find($id);
        $data->update([
            'ks_pupuk_jenis' => $input_ks_pupuk_jenis,
            'ks_pupuk_sumber_organik' => $input_ks_pupuk_sumber_organik,
            'ks_pupuk_sumber_anorganik' => $input_ks_pupuk_sumber_anorganik,
            'ks_pupuk_merk' => $input_ks_pupuk_merk,
            'ks_pupuk_tgl_rabuk' => $input_ks_pupuk_tgl_rabuk,
            'ks_pupuk_jumlah_takaran' => $dataHasiljumlahPupuk,
            'ks_pupuk_keterangan' => $input_ks_pupuk_keterangan
        ]);

        return redirect()->route('datapupuk')->with('success', 'Data Pupuk telah berhasil diupdate');
    }
}
