<?php

namespace App\Http\Controllers;

use App\Models\ks_pestisida;
use Encore\Admin\Middleware\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session as FacadesSession;

class KsPestisidaController extends Controller
{
    // view data pestisida
    public function datapestisida()
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
            $data = DB::table('ks_pestisidas')
                ->join('pestisidas', 'ks_pestisidas.pestisida_id', '=', 'pestisidas.id')
                ->join('penanaman_bawangs', 'ks_pestisidas.id_user', '=', 'penanaman_bawangs.id_user')
                ->select('ks_pestisidas.id AS uid', 'ks_pestisidas.*', 'pestisidas.pestisida_nama')
                // ->select('penanaman_bawangs.*', 'pestisidas.pestisida_nama')
                ->where('ks_pestisidas.id_user', $currentuserid)
                ->where('penanaman_bawangs.ks_panen', 0)
                ->orderBy('ks_pestisidas.ks_pestisida_tgl_semprot', 'DESC')
                ->get();
            return view('pages.pestisida.datapestisida', compact('data'));
            // return dd($data);
        }
    }

    // form tambah kegiatan pestisida
    public function tambahdatapestisida()
    {
        $currentuserid = Auth::user()->id;
        $url = "http://compute.dinus.ac.id:900/api/get/lokasi/" . $currentuserid;
        $response = Http::get($url);
        $pestisidas = DB::table('pestisidas')->orderBy('pestisida_nama', 'ASC')->get();
        $data['pestisidas'] = $pestisidas;
        $data = json_decode($response, true);
        $user_data = $data;
        $user_data = array_slice($user_data, 0);
        return view('pages.pestisida.tambahdatapestisida', compact('user_data', 'pestisidas'));
    }

    // logic tambah kegiatan pestisida
    public function insertdatapestisida(Request $request)
    {
        // form validasi kegiatan pestisida
        $request->validate([
            'ks_pestisida_tgl_semprot' => 'required',
            'pestisida_id' => 'required',
            'ks_pestisida_jumlah_takaran' => 'required'
        ], [
            'ks_pestisida_tgl_semprot' => '*Field ini wajib diisi',
            'pestisida_id' => '*Field ini wajib diisi',
            'ks_pestisida_jumlah_takaran' => '*Field ini wajib diisi',
        ]);

        $currentuserid = Auth::user()->id;

        $input_ks_pestisida_tgl_semprot = $request->input('ks_pestisida_tgl_semprot');

        $datalokasi = $request->input('lokasi_keterangan');

        $dataJumlahTakaranPestisida = $request->input('ks_pestisida_jumlah_takaran');
        $stnJumlahTakaranPestisida = $request->input('stnJumlahTakaranPestisida');
        $dataHasilJumlahTakaranPestisida = $dataJumlahTakaranPestisida;
        if ($stnJumlahTakaranPestisida == "Mililiter") {
            $dataHasilJumlahTakaranPestisida = $dataHasilJumlahTakaranPestisida * 0.001;
        } else {
            $dataHasilJumlahTakaranPestisida = $dataHasilJumlahTakaranPestisida;
        }

        $input_ks_pestisida_keterangan = $request->input('ks_pestisida_keterangan');

        ks_pestisida::create([
            'id_user' => $currentuserid,
            'id_lokasisawah' => $datalokasi,
            'ks_pestisida_tgl_semprot' => $input_ks_pestisida_tgl_semprot,
            'pestisida_id' => $request->pestisida_id,
            'ks_pestisida_jumlah_takaran' => $dataHasilJumlahTakaranPestisida,
            'ks_pestisida_keterangan' => $input_ks_pestisida_keterangan
        ]);

        return redirect()->route('datapestisida')->with('success', 'Data Pestisida telah berhasil ditambahkan');
    }

    public function tampildatapestisida($id)
    {
        $data = ks_pestisida::find($id);

        $pestisidas = DB::table('pestisidas')->orderBy('pestisida_nama', 'ASC')->get();
        $data['pestisidas'] = $pestisidas;

        $data['data'] = $data;

        return view('/pages/pestisida/tampildatapestisida', $data);
    }

    // logic update kegiatan pestisida
    public function updatedatapestisida(Request $request, $id)
    {
        // form validasi kegiatan pestisida
        $request->validate([
            'ks_pestisida_tgl_semprot' => 'required',
            'pestisida_id' => 'required',
            'ks_pestisida_jumlah_takaran' => 'required'
        ], [
            'ks_pestisida_tgl_semprot' => '*Field ini wajib diisi',
            'pestisida_id' => '*Field ini wajib diisi',
            'ks_pestisida_jumlah_takaran' => '*Field ini wajib diisi',
        ]);

        $dataJumlahTakaranPestisida = $request->input('ks_pestisida_jumlah_takaran');
        $stnJumlahTakaranPestisida = $request->input('stnJumlahTakaranPestisida');
        $dataHasilJumlahTakaranPestisida = $dataJumlahTakaranPestisida;
        if ($stnJumlahTakaranPestisida == "Mililiter") {
            $dataHasilJumlahTakaranPestisida = $dataHasilJumlahTakaranPestisida * 0.001;
        } else {
            $dataHasilJumlahTakaranPestisida = $dataHasilJumlahTakaranPestisida;
        }

        $data = ks_pestisida::find($id);
        $data->update([
            'ks_pestisida_tgl_semprot' => $request->ks_pestisida_tgl_semprot,
            'pestisida_id' => $request->pestisida_id,
            'ks_pestisida_jumlah_takaran' => $dataHasilJumlahTakaranPestisida,
            'ks_pestisida_keterangan' => $request->ks_pestisida_keterangan
        ]);

        return redirect()->route('datapestisida')->with('success', 'Data Pestisida telah berhasil diupdate');
    }
    public function deletepestisida($id)
    {
        // // $delete = ks_pestisida::find($id)->delete();
        $delete = DB::table('ks_pestisidas')->where('id', $id)->delete();
        // $task = ks_pestisida::findOrFail($id);

        // $task->delete();
        return redirect()->route('datapestisida')->with('success', 'Data Pupuk telah  dihapus');

        // FacadesSession::flash('flash_message', 'Task successfully deleted!');

        // return redirect()->route('datapestisida');
    }
}
