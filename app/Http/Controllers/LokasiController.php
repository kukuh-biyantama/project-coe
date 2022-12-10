<?php

namespace App\Http\Controllers;

use App\Models\lokasi_sawah;
use App\Models\penanaman_bawang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Echo_;

use function PHPUnit\Framework\isEmpty;

class LokasiController extends Controller
{
    public function datalokasisawah()
    {
        $currentuserid = Auth::user()->id;
        $url = "http://103.30.1.54:900/api/get/lokasi/" . $currentuserid;
        $response = Http::get($url);
        $data = json_decode($response, true);
        $user_data = $data;
        $user_data = array_slice($user_data, 0);

        if ($data == null) {
            return view('/pages/lokasi/formtambahdatalokasisawah');
        } else {
            return view('/pages/lokasi/datalokasisawah', compact('user_data', 'currentuserid'));
        }
    }

    public function formtambahdatalokasisawah()
    {

        return view('/pages/lokasi/formtambahdatalokasisawah');
    }

    public function insertdatalokasisawah(Request $request)
    {
        $lokasi_latitude = $request->input('lokasi_latitude');
        $lokasi_longitude = $request->input('lokasi_longitude');
        $kabupaten = $request->input('kabupaten');
        $lokasi_keterangan = $request->input('lokasi_keterangan');
        $id_iot = $request->input('id_iot');
        $currentuserid = Auth::user()->id;
        $response = Http::post(
            'http://103.30.1.54:900/api/post/location',
            [
                'user_id' => $currentuserid, //user_id
                'id_iot' => $id_iot,
                'kabupaten' => $kabupaten,
                'lokasi_latitude' => $lokasi_latitude,
                'lokasi_longitude' => $lokasi_longitude,
                'lokasi_keterangan' => $lokasi_keterangan
            ]
        );
        return redirect()->route('datalokasisawah')->with('success', 'Data Lokasi Sawah telah berhasil ditambahkan');
    }

    public function formeditdatalokasisawah($id)
    {
        $data = lokasi_sawah::find($id);
        // dd($data);
        return view('/pages/lokasi/formeditdatalokasisawah', compact('data'));
    }

    public function updatedatalokasisawah(Request $request, $id)
    {
        $lokasi_latitude = $request->input('lokasi_latitude');
        $lokasi_longitude = $request->input('lokasi_longitude');
        $kabupaten = $request->input('kabupaten');
        $lokasi_keterangan = $request->input('lokasi_keterangan');
        $id_iot = $request->input('id_iot');

        $data = lokasi_sawah::find($id);
        $data->update([
            'lokasi_latitude' => $lokasi_latitude,
            'lokasi_longitude' => $lokasi_longitude,
            'kabupaten' => $kabupaten,
            'lokasi_keterangan' => $lokasi_keterangan,
            'id_iot' => $id_iot
        ]);
        return redirect()->route('datalokasisawah')->with('success', 'Data Lokasi Sawah telah berhasil diupdate');
    }

    public function deletedatalokasisawah($userid, $lokasi_keterangan)
    {
        // $data_tanam = DB::table('penanaman_bawangs')->where('user_id', $userid)->where('id_lokasisawah', $lokasi_keterangan);
        $data_tanam = penanaman_bawang::all();
        if ($data_tanam == '[]') {
            $url_response = "http://103.30.1.54:900/api/delete/lokasi" . '/' . $userid . '/' . $lokasi_keterangan;
            $response = Http::post($url_response);
            return redirect()->route('datalokasisawah')->with('success', 'Data Lokasi Sawah telah berhasil dihapus');
        } else {
            foreach ($data_tanam as $datatanambase) {
                $tanamverify = $datatanambase->id_lokasisawah;
            }
            // return dd($data_tanam);
            if ($tanamverify == $lokasi_keterangan) {
                $url_response = "http://103.30.1.54:900/api/delete/lokasi" . '/' . $userid . '/' . $lokasi_keterangan;
                $postgree = DB::table('penanaman_bawangs')->where('id_user', $userid)->where('id_lokasisawah', $lokasi_keterangan)->delete();
                $response = Http::post($url_response);
                return redirect()->route('datalokasisawah')->with('success', 'Data Lokasi Sawah telah berhasil dihapus');
            } else {
                $url_response = "http://103.30.1.54:900/api/delete/lokasi" . '/' . $userid . '/' . $lokasi_keterangan;
                $response = Http::post($url_response);
                $postgree = DB::table('penanaman_bawangs')->where('id_user', $userid)->where('id_lokasisawah', $lokasi_keterangan)->delete();
                return redirect()->route('datalokasisawah')->with('success', 'Data Lokasi Sawah telah berhasil dihapus');
            }
        }
    }
}
