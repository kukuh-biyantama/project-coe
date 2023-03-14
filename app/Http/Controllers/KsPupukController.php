<?php

namespace App\Http\Controllers;

use App\Models\ks_pupuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class KsPupukController extends Controller
{
    // view data pupuk
    public function datapupuk()
    {
        $currentuserid = Auth::user()->id;
        $url = "http://compute.dinus.ac.id:900/api/get/lokasi/" . $currentuserid;
        $response = Http::get($url);
        $data = json_decode($response, true);
        $user_data = $data;
        $user_data = array_slice($user_data, 0);
        if ($data == null) {
            return view('/pages/responslokasi/responslokasi');
        } else {
            $data = DB::table('ks_pupuks')
            ->join('penanaman_bawangs', 'penanaman_bawangs.id_user', '=', 'ks_pupuks.id_user')
            ->join('jenispupuks', 'ks_pupuks.jenispupuk_id', '=', 'jenispupuks.id')
            ->join('merkpupuks', 'ks_pupuks.merkpupuk_id', '=', 'merkpupuks.id')
            ->select('ks_pupuks.*', 'penanaman_bawangs.*', 'jenispupuks.jenispupuk_nama', 'merkpupuks.merkpupuk_nama')
            ->where('penanaman_bawangs.id_user', $currentuserid)
            ->where('penanaman_bawangs.ks_panen', 0)
            ->orderBy('ks_pupuk_tgl_rabuk', 'DESC')
            ->get();
            // return dd($data);
            return view('pages.pupuk.datapupuk', compact('data'));
        }
    }

    // get data merk pupuk
    public function fetchMerkpupuks($jenispupuk_id = null)
    {
        $merkpupuks = DB::table('merkpupuks')->where('jenispupuk_id', $jenispupuk_id)->get();
        return response()->json([
            'status' => 1,
            'merkpupuks' => $merkpupuks
        ]);
    }

    // form tambah kegiatan pupuk
    public function tambahdatapupuk()
    {
        $currentuserid = Auth::user()->id;
        $url = "http://compute.dinus.ac.id:900/api/get/lokasi/" . $currentuserid;
        $response = Http::get($url);
        $data = json_decode($response, true);
        $user_data = $data;
        $user_data = array_slice($user_data, 0);
        $jenispupuks = DB::table('jenispupuks')->orderBy('jenispupuk_nama', 'ASC')->get();
        $data['jenispupuks'] = $jenispupuks;

        return view('/pages/pupuk/tambahdatapupuk', compact('user_data', 'jenispupuks'));
    }
    
    // logic tambah kegiatan pupuk
    public function insertdatapupuk(Request $request)
    {
        // form validasi tambah kegiatan pupuk
        $request->validate([
            'ks_pupuk_tgl_rabuk' => 'required',
            'jenispupuk_id' => 'required',
            'merkpupuk_id' => 'required',
            'ks_pupuk_jumlah_takaran' => 'required'
        ], [
            'ks_pupuk_tgl_rabuk'=> '*Field ini wajib diisi',
            'jenispupuk_id'=> '*Field ini wajib diisi',
            'merkpupuk_id' => '*Field ini wajib diisi',
            'ks_pupuk_jumlah_takaran' => '*Field ini wajib diisi'
        ]);

        $input_ks_pupuk_tgl_rabuk = $request->input('ks_pupuk_tgl_rabuk');

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

        $input_ks_pupuk_keterangan = $request->input('ks_pupuk_keterangan');

        ks_pupuk::create([
            'id_user' => $currentuserid,
            'id_lokasisawah' => $datalokasi,
            'jenispupuk_id' => $request->jenispupuk_id,
            'merkpupuk_id' => $request->merkpupuk_id,
            'ks_pupuk_tgl_rabuk' => $input_ks_pupuk_tgl_rabuk,
            'ks_pupuk_jumlah_takaran' => $dataHasiljumlahPupuk,
            'ks_pupuk_keterangan' => $input_ks_pupuk_keterangan
        ]);

        return redirect()->route('datapupuk')->with('success', 'Data Pupuk telah berhasil ditambahkan');
    }

    // tampil data form kegiatan edit pupuk
    public function tampildatapupuk($id)
    {
        $data = ks_pupuk::find($id);

        $jenispupuks = DB::table('jenispupuks')->orderBy('jenispupuk_nama', 'ASC')->get();
        $data['jenispupuks'] = $jenispupuks;

        $merkpupuks = DB::table('merkpupuks')->where('jenispupuk_id', $data->jenispupuk_id)->orderBy('merkpupuk_nama','ASC')->get();
        $data['merkpupuks'] = $merkpupuks;

        $data['data'] = $data;

        return view('/pages/pupuk/tampildatapupuk', $data);
    }

    // logic update kegiatan pupuk
    public function updatedatapupuk(Request $request, $id)
    {
        $request->validate([
            'ks_pupuk_tgl_rabuk' => 'required',
            'jenispupuk_id' => 'required',
            'merkpupuk_id' => 'required',
            'ks_pupuk_jumlah_takaran' => 'required'
        ], [
            'ks_pupuk_tgl_rabuk'=> '*Field ini wajib diisi',
            'jenispupuk_id'=> '*Field ini wajib diisi',
            'merkpupuk_id' => '*Field ini wajib diisi',
            'ks_pupuk_jumlah_takaran' => '*Field ini wajib diisi'
        ]);

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

        $data = ks_pupuk::find($id);
        $data->update([
            'ks_pupuk_tgl_rabuk' => $request->ks_pupuk_tgl_rabuk,
            'jenispupuk_id' => $request->jenispupuk_id,
            'merkpupuk_id' => $request->merkpupuk_id,
            'ks_pupuk_jumlah_takaran' => $dataHasiljumlahPupuk,
            'ks_pupuk_keterangan' => $request->ks_pupuk_keterangan
        ]);

        return redirect()->route('datapupuk')->with('success', 'Data Pupuk telah berhasil diupdate');
    }

    // logic delete kegiatan pupuk
    public function deletepupuk($id)
    {
        $delete = DB::table('ks_pupuks')->where('id', $id)->delete();
        return redirect()->route('datapupuk');
    }
}
