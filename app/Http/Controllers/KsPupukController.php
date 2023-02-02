<?php

namespace App\Http\Controllers;

use App\Models\ks_pupuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class KsPupukController extends Controller
{

    public function datapupuk()
    {
        // $data = ks_pupuk::orderBy('ks_pupuk_tgl_rabuk', 'DESC')->get();
        // return view('/pages/pupuk/datapupuk', compact('data'));
        $currentuserid = Auth::user()->id;
        $url = "http://compute.dinus.ac.id:900/api/get/lokasi/" . $currentuserid;
        $response = Http::get($url);
        $data = json_decode($response, true);
        $user_data = $data;
        $user_data = array_slice($user_data, 0);
        if ($data == null) {
            return view('/pages/responslokasi/responslokasi');
        } else {
            $data = DB::table('ks_pupuks')->from('penanaman_bawangs')->join('ks_pupuks', 'penanaman_bawangs.id_user', '=', 'ks_pupuks.id_user')
                ->WHERE('penanaman_bawangs.id_user', $currentuserid)
                ->where('penanaman_bawangs.ks_panen', 0)
                ->get();
            return view('pages.pupuk.datapupuk', compact('data'));
        }
    }
    public function tambahdatapupuk()
    {
        $currentuserid = Auth::user()->id;
        $url = "http://compute.dinus.ac.id:900/api/get/lokasi/" . $currentuserid;
        $response = Http::get($url);
        $data = json_decode($response, true);
        $user_data = $data;
        $user_data = array_slice($user_data, 0);
        return view('/pages/pupuk/tambahdatapupuk', compact('user_data'));
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

        $currentuserid = Auth::user()->id;
        $datalokasi = $request->input('lokasi_keterangan');

        // keterangan pupuk
        $input_ks_pupuk_keterangan = $request->input('ks_pupuk_keterangan');

        ks_pupuk::create([
            'id_user' => $currentuserid,
            'id_lokasisawah' => $datalokasi,
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

    public function deletepupuk($id)
    {
        $delete = DB::table('ks_pupuks')->where('id', $id)->delete();
        return redirect()->route('datapupuk')->with('success', 'Data Pupuk telah  dihapus');
    }
}
