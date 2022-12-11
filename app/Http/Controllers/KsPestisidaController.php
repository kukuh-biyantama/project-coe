<?php

namespace App\Http\Controllers;

use App\Models\ks_pestisida;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class KsPestisidaController extends Controller
{
    public function datapestisida(){
        // $data = ks_pestisida::orderBy('ks_pestisida_tgl_semprot', 'DESC')->get();
        

        $currentuserid = Auth::user()->id;
        $url = "http://103.30.1.54:900/api/get/lokasi/" . $currentuserid;
        $response = Http::get($url);
        $data = json_decode($response, true);
        $user_data = $data;
        $user_data = array_slice($user_data, 0);
        if ($data == null) {
            return view('/pages/responslokasi/responslokasi');
        } else {
            $data = DB::table('ks_pestisidas')->from('penanaman_bawangs')->join('ks_pestisidas', 'penanaman_bawangs.id_lokasisawah', '=', 'ks_pestisidas.id_lokasisawah')
            ->WHERE('penanaman_bawangs.id_user', $currentuserid)
            ->where('penanaman_bawangs.ks_panen', 0)
            ->get();
            return view('pages.pestisida.datapestisida',compact('data'));
        }

    }

    public function tambahdatapestisida(){
        $currentuserid = Auth::user()->id;
        $url = "http://103.30.1.54:900/api/get/lokasi/" . $currentuserid;
        $response = Http::get($url);
        $data = json_decode($response, true);
        $user_data = $data;
        $user_data = array_slice($user_data, 0);
        return view('pages.pestisida.tambahdatapestisida', compact('user_data'));
        // return view('/pages/pestisida/tambahdatapestisida');
    }

    public function insertdatapestisida(Request $request){
        // Form Validasi
        $currentuserid = Auth::user()->id;
        $datalokasi = $request->input('lokasi_keterangan');
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
            'id_user' => $currentuserid,
            'id_lokasisawah' => $datalokasi,
            'ks_pestisida_nama' => $input_ks_pestisida_nama,
            'ks_pestisida_tempat_membeli' => $input_ks_pestisida_tempat_membeli,
            'ks_pestisida_tgl_semprot' => $input_ks_pestisida_tgl_semprot,
            'ks_pestisida_jumlah_takaran' => $dataHasilJumlahTakaranPestisida,
            'ks_pestisida_keterangan' => $input_ks_pestisida_keterangan
        ]);

        


        return redirect()->route('datapestisida')->with('success', 'Data Pestisida telah berhasil ditambahkan');
    }

    public function tampildatapestisida($id){
     
        // return view('pages.pestisida.tambahdatapestisida', compact('user_data'));
        $data = ks_pestisida::find($id);
        return view('/pages/pestisida/tampildatapestisida', compact('data'));
    }

    public function updatedatapestisida(Request $request, $id){
        // $currentuserid = Auth::user()->id;
        // $datalokasi = $request->input('lokasi');
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
            // 'id_user' => $currentuserid,
            // 'id_lokasisawah' => $datalokasi,
            'ks_pestisida_nama' => $input_ks_pestisida_nama,
            'ks_pestisida_tempat_membeli' => $input_ks_pestisida_tempat_membeli,
            'ks_pestisida_tgl_semprot' => $input_ks_pestisida_tgl_semprot,
            'ks_pestisida_jumlah_takaran' => $dataHasilJumlahTakaranPestisida,
            // 'id_user' => $currentuserid,
            // 'id_lokasisawah' => $datalokasi,
            'ks_pestisida_keterangan' => $input_ks_pestisida_keterangan
        ]);

        return redirect()->route('datapestisida')->with('success', 'Data Pestisida telah berhasil diupdate');
    }
    public function deletepupuk($id)
    {
        $delete = DB::table('ks_pupuks')->where('id', $id)->delete();
        return redirect()->route('datapupuk')->with('success', 'Data Pupuk telah  dihapus');
    }
}
