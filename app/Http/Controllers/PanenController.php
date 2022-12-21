<?php

namespace App\Http\Controllers;

use App\Models\panen;
use App\Models\penanaman_bawang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PanenController extends Controller
{
    public function datapanen()
    {
        $currentuserid = Auth::user()->id;
        $response = DB::table('penanaman_bawangs')->where('penanaman_bawangs.id_user', $currentuserid)->get();
        $data = array($response);
        // return ($data);
        if ($data == [[]]) {
            return view('/pages/responslokasi/responslokasi');
            // return dd($users);

        } else {
            $users = DB::table('penanaman_bawangs')->where('penanaman_bawangs.id_user', $currentuserid)
                ->get();
            return view('pages.panen.datapanen', compact('users'));
            // return view('/pages/responslokasi/responslokasi');
            // // $data = DB::table('panens')->from('penanaman_bawangs')->join('panens', 'penanaman_bawangs.id', '=', 'panens.id')
            //     ->WHERE('penanaman_bawangs.id_user', $currentuserid)
            //     ->WHERE('penanaman_bawangs.ks_panen', 1)
            //     ->get();

            // return dd($users);
        }
    }

    public function formtambahdatapanen($id)
    {
        $currentuserid = Auth::user()->id;
        $users = penanaman_bawang::find($id);
        // // $users = DB::table('penanaman_bawangs')->where('penanaman_bawangs.id_user', $currentuserid)->get();
        return view('/pages/panen/formtambahdatapanen', compact('users'));
    }

    public function insertdatapanen(Request $request)
    {
        // current user
        $currentuserid = Auth::user()->id;

        // data lokasi
        $datalokasi = $request->input('lokasi_keterangan');

        // tanggal panen
        $panen_tanggal = $request->input('panen_tanggal');

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

        // panen hasil produksi
        $panenhasil = $request->input('panen_jumlah');
        $panenhasil =  $resultpanenkualitas_a +  $resultpanenkualitas_b +  $resultpanenkualitas_c;
        $resulthasilpanen = $panenhasil;

        panen::create([
            'id_user' => $currentuserid,
            'id_lokasisawah' => $datalokasi,
            'panen_tanggal' => $panen_tanggal,
            'panen_jumlah' => $resulthasilpanen,
            'panen_kualitas_a' => $resultpanenkualitas_a,
            'panen_kualitas_b' => $resultpanenkualitas_b,
            'panen_kualitas_c' => $resultpanenkualitas_c
        ]);
        $updatekspanen = DB::table('penanaman_bawangs')->where('id_user', $currentuserid)->where('id_lokasisawah', $datalokasi)->update(['ks_panen' => '1']);
        return redirect()->route('datapanen')->with('success', 'Data Panen telah berhasil ditambahkan');
    }

    public function formeditdatapanen($id)
    {
        // $data = panen::find($id);
        $user = DB::table('penanaman_bawangs')->find($id);
        return view('/pages/panen/formeditdatapanen', compact('data'));
    }

    public function updatedatapanen(Request $request, $id)
    {
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

    public function verifypetani(Request $request)
    {
        $id_Petani = $request->input('idSawahpetani');
        $verifyPanen = $request->input('verify-checkbox');
        // $currentuserid = Auth::user()->id;
        $updatekspanen = DB::table('penanaman_bawangs')->where('id', $id_Petani)->update(['ks_panen' => $verifyPanen]);
        return redirect()->route('datapanen')->with('success', 'Data Panen telah berhasil ditambahkan');
        // $users = DB::table('penanaman_bawangs')->get();
        // dd($users);
    }
}
