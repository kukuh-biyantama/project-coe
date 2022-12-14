<?php

namespace App\Http\Controllers;

use App\Models\panen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PanenController extends Controller
{
    public function datapanen(){
        // $data = panen::all();
        // return view('/pages/panen/datapanen', compact('data'));
        $currentuserid = Auth::user()->id;
        $url = "http://103.30.1.54:900/api/get/lokasi/" . $currentuserid;
        $response = Http::get($url);
        $data = json_decode($response, true);
        $user_data = $data;
        $user_data = array_slice($user_data, 0);
        if ($data == null) {
            return view('/pages/responslokasi/responslokasi');
        } else {
            $data = DB::table('panens')->from('penanaman_bawangs')->join('panens', 'penanaman_bawangs.id', '=', 'panens.id')
                ->WHERE('penanaman_bawangs.id_user', $currentuserid)
               ->WHERE('penanaman_bawangs.ks_panen', 1)
                ->get();
            return view('pages.panen.datapanen', compact('data'));

            // return dd($data);
        }
    }

    public function formtambahdatapanen(){
        $currentuserid = Auth::user()->id;
        $url = "http://103.30.1.54:900/api/get/lokasi/" . $currentuserid;
        $response = Http::get($url);
        $data = json_decode($response, true);
        $user_data = $data;
        $user_data = array_slice($user_data, 0);
        return view('/pages/panen/formtambahdatapanen', compact('user_data'));
    }

    public function insertdatapanen(Request $request){
        // current user
        $currentuserid = Auth::user()->id;

        // data lokasi
        $datalokasi = $request->input('lokasi_keterangan');

        // tanggal panen
        $panen_tanggal = $request->input('panen_tanggal');

        // panen hasil produksi
        $panenhasil = $request->input('panen_hasil_produksi');
        $stnpanenhasil = $request->input('stnpanenhasil');
        $resulthasilpanen = $panenhasil;
        if ($stnpanenhasil == "Kuintal") {
            $resulthasilpanen = $resulthasilpanen * 100;
        }
        if ($stnpanenhasil == "Ton") {
            $resulthasilpanen = $resulthasilpanen * 1000;
        } else {
            $resulthasilpanen = $resulthasilpanen;
        }
        
        // panen kualitas a
        $panenkualitas_a = $request->input('panen_kualitas_a');
        $stnpanenkualitas_a = $request->input('stnpanenkualitas_a');
        $resultpanenkualitas_a = $panenkualitas_a;
        if ($stnpanenkualitas_a == "Kuintal") {
            $resultpanenkualitas_a = $resultpanenkualitas_a * 100;
        }
        if ($stnpanenkualitas_a == "Ton") {
            $resultpanenkualitas_a = $resultpanenkualitas_a * 1000;
        } else {
            $resultpanenkualitas_a = $resultpanenkualitas_a;
        }

        // panen kualitas b
        $panenkualitas_b = $request->input('panen_kualitas_b');
        $stnpanenkualitas_b = $request->input('stnpanenkualitas_b');
        $resultpanenkualitas_b = $panenkualitas_b;
        if ($stnpanenkualitas_b == "Kuintal") {
            $resultpanenkualitas_b = $resultpanenkualitas_b * 100;
        }
        if ($stnpanenkualitas_b == "Ton") {
            $resultpanenkualitas_b = $resultpanenkualitas_b * 1000;
        } else {
            $resultpanenkualitas_b = $resultpanenkualitas_b;
        }

        // panen kualitas c 
        $panenkualitas_c = $request->input('panen_kualitas_c');
        $stnpanenkualitas_c = $request->input('stnpanenkualitas_c');
        $resultpanenkualitas_c = $panenkualitas_c;
        if ($stnpanenkualitas_c == "Kuintal") {
            $resultpanenkualitas_c = $resultpanenkualitas_c * 100;
        }
        if ($stnpanenkualitas_c == "Ton") {
            $resultpanenkualitas_c = $resultpanenkualitas_c * 1000;
        } else {
            $resultpanenkualitas_c = $resultpanenkualitas_c;
        }

        panen::create([
            'id_user' => $currentuserid,
            'id_lokasisawah' => $datalokasi,
            'panen_tanggal' => $panen_tanggal,
            'panen_hasil_produksi' => $resulthasilpanen,
            'panen_kualitas_a' => $resultpanenkualitas_a,
            'panen_kualitas_b' => $resultpanenkualitas_b,
            'panen_kualitas_c' => $resultpanenkualitas_c
        ]);
        $updatekspanen = DB::table('penanaman_bawangs')->where('id_user',$currentuserid)->where('id_lokasisawah',$datalokasi)->update(['ks_panen' =>'1']);
        return redirect()->route('datapanen')->with('success', 'Data Panen telah berhasil ditambahkan');
        
    }

    public function formeditdatapanen($id)
    {
        $data = panen::find($id);
        return view('/pages/panen/formeditdatapanen', compact('data'));
    }

    public function updatedatapanen(Request $request, $id){
        // tanggal panen
        $panen_tanggal = $request->input('panen_tanggal');

        // panen hasil produksi
        $panenhasil = $request->input('panen_hasil_produksi');
        $stnpanenhasil = $request->input('stnpanenhasil');
        $resulthasilpanen = $panenhasil;
        if ($stnpanenhasil == "Kuintal") {
            $resulthasilpanen = $resulthasilpanen * 100;
        }
        if ($stnpanenhasil == "Ton") {
            $resulthasilpanen = $resulthasilpanen * 1000;
        } else {
            $resulthasilpanen = $resulthasilpanen;
        }
        
        // panen kualitas a
        $panenkualitas_a = $request->input('panen_kualitas_a');
        $stnpanenkualitas_a = $request->input('stnpanenkualitas_a');
        $resultpanenkualitas_a = $panenkualitas_a;
        if ($stnpanenkualitas_a == "Kuintal") {
            $resultpanenkualitas_a = $resultpanenkualitas_a * 100;
        }
        if ($stnpanenkualitas_a == "Ton") {
            $resultpanenkualitas_a = $resultpanenkualitas_a * 1000;
        } else {
            $resultpanenkualitas_a = $resultpanenkualitas_a;
        }

        // panen kualitas b
        $panenkualitas_b = $request->input('panen_kualitas_b');
        $stnpanenkualitas_b = $request->input('stnpanenkualitas_b');
        $resultpanenkualitas_b = $panenkualitas_b;
        if ($stnpanenkualitas_b == "Kuintal") {
            $resultpanenkualitas_b = $resultpanenkualitas_b * 100;
        }
        if ($stnpanenkualitas_b == "Ton") {
            $resultpanenkualitas_b = $resultpanenkualitas_b * 1000;
        } else {
            $resultpanenkualitas_b = $resultpanenkualitas_b;
        }

        // panen kualitas c 
        $panenkualitas_c = $request->input('panen_kualitas_c');
        $stnpanenkualitas_c = $request->input('stnpanenkualitas_c');
        $resultpanenkualitas_c = $panenkualitas_c;
        if ($stnpanenkualitas_c == "Kuintal") {
            $resultpanenkualitas_c = $resultpanenkualitas_c * 100;
        }
        if ($stnpanenkualitas_c == "Ton") {
            $resultpanenkualitas_c = $resultpanenkualitas_c * 1000;
        } else {
            $resultpanenkualitas_c = $resultpanenkualitas_c;
        }

        $data = panen::find($id);
        $data->update([
            // 'id_user' => $currentuserid,
            // 'id_lokasisawah' => $datalokasi,
            'panen_tanggal' => $panen_tanggal,
            'panen_hasil_produksi' => $resulthasilpanen,
            'panen_kualitas_a' => $resultpanenkualitas_a,
            'panen_kualitas_b' => $resultpanenkualitas_b,
            'panen_kualitas_c' => $resultpanenkualitas_c
        ]);
       
        return redirect()->route('datapanen')->with('success', 'Data Panen telah berhasil diupdate');

    }

    public function deletedatapanen($id)
    {
        $delete = DB::table('panens')->where('id', $id)->delete();
        return redirect()->route('datapanen')->with('success', 'Data Panen telah dihapus');
    }



}
