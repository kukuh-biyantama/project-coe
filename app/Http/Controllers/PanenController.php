<?php

namespace App\Http\Controllers;

use App\Models\panen;
use App\Models\penanaman_bawang;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Type\Integer;

use function PHPSTORM_META\type;

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
            // $panen = DB::table('panens')->where('panens.id_user', $currentuserid)->get();
            $panen = DB::table('panens')
                ->join('penanaman_bawangs', 'penanaman_bawangs.id', '=', 'panens.id_penanaman')
                ->select('panens.id', 'panens.ks_waktu_tanam', 'panens.status')
                ->get();
            return view('pages.panen.datapanen', compact('users', 'panen', 'currentuserid'));
        }
    }

    public function formtambahdatapanen($id)
    {
        // $currentuserid = Auth::user()->id;
        $users = penanaman_bawang::find($id);
        $panens = DB::table('panens')->where('panens.id_penanaman', $id)->get();
        if ($panens == '[]') {
            $reviewpanen = ("datakosong");
            return view('/pages/panen/formtambahdatapanen', compact('users', 'reviewpanen', 'id'));
        } else {
            foreach ($panens as $datapanen) {
                if ((int)($datapanen->id_penanaman) == (int)$id) {
                    $reviewpanen =  $panens;
                } else {
                    $reviewpanen = ("datakosong");
                }
                return view('/pages/panen/formtambahdatapanen', compact('users', 'reviewpanen', 'id'));
            }
        }
    }

    public function insertdatapanen(Request $request)
    {
        // current user
        $currentuserid = Auth::user()->id;
        $namapetani = Auth::user()->name;

        // data lokasi
        $id = $request->input('id');
        $kabupaten = $request->input('kabupaten');
        $lokasiSawah = $request->input('lokasi');
        $waktutanam = $request->input('waktutanam');
        $tanggalPanen = $request->input('panen_tanggal');
        $panenJumlah = $request->input('panen_jumlah');
        $stnJumlahpanen = $request->input('stnJumlahpanen');
        //konversi data panen ke kg
        if ($stnJumlahpanen == "kg") {
            $hasilsatuanJumlah = $panenJumlah;
        } elseif ($stnJumlahpanen == "kwintal") {
            $hasilsatuanJumlah = $panenJumlah * 100;
        } elseif ($stnJumlahpanen == "Ton") {
            $hasilsatuanJumlah = $panenJumlah * 1000;
        }
        $idPenebas = $request->input('cari');
        $hargaJual = $request->input('harga_sepakat');
        $statuspengepul = "0";
        panen::create([
            'id_penanaman' => $currentuserid,
            'namapetani' => $namapetani,
            'id_lokasisawah' => $lokasiSawah,
            'ks_waktu_tanam' => $waktutanam,
            'panen_tanggal' => $tanggalPanen,
            'panen_jumlah' => $hasilsatuanJumlah,
            'id_penebas' => $idPenebas,
            'panen_harga' => $hargaJual,
            'statusdaripengepul' => $statuspengepul,
            'status' => 'verify'

        ]);
        // $updatekspanen = DB::table('penanaman_bawangs')->where('id_user', $currentuserid)->where('id_lokasisawah', $datalokasi)->update(['ks_panen' => '1']);
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
        $panenhasil = $request->input('panen_jumlah');
        $stnpanenhasil = $request->input('stnJumlahpanen');
        $resulthasilpanen = $panenhasil;
        if ($stnpanenhasil == "Kwintal") {
            $resulthasilpanen = $resulthasilpanen * 100;
        }
        if ($stnpanenhasil == "Ton") {
            $resulthasilpanen = $resulthasilpanen * 1000;
        } else {
            $resulthasilpanen = $resulthasilpanen;
        }

        //harga yang disepakati
        $hargasepakat = $request->input('harga_sepakat');
        $data = panen::find($id);
        $data->update([
            // 'id_user' => $currentuserid,
            // 'id_lokasisawah' => $datalokasi,
            'panen_tanggal' => $panen_tanggal,
            'panen_jumlah' => $resulthasilpanen,
            'panen_harga' => $hargasepakat
        ]);

        return redirect()->route('datapanen')->with('success', 'Data Panen telah berhasil diupdate');
    }

    public function deletedatapanen($id)
    {
        $deletepanen = DB::table('panens')->where('panens.id_user', $id)->delete();
        $deletepenanamanbawangs = DB::table('penanaman_bawangs')->where('penanaman_bawangs.id', $id)->delete();
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
    public function edit($id)
    {
        $data = DB::table('panens')->where('id_penanaman', $id)->first();
        return view('pages.panen.formeditdatapanen', ['data' => $data]);
    }
}
