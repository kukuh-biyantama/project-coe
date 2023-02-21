<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\panen;
use App\Models\penanaman_bawang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use PDF;



class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get data lokasi API
        $currentuserid = Auth::user()->id;
        $data = panen::where('id_user', $currentuserid);
        $user_data = $data;
        // $user_data = array_slice($user_data, 0);
        if ($data == null) {
            return view('/pages/responslokasi/responslokasi');
        } else {
            $data = DB::table('penanaman_bawangs')
                ->join('panens', 'panens.id_penanaman', '=', 'penanaman_bawangs.id_user')
                ->select(
                    'penanaman_bawangs.id',
                    'penanaman_bawangs.id_user',
                    'penanaman_bawangs.ks_metode_pengairan',
                    'penanaman_bawangs.ks_modal',
                    'penanaman_bawangs.ks_luas_lahan',
                    'penanaman_bawangs.ks_bibit',
                    'penanaman_bawangs.ks_waktu_tanam',
                    'penanaman_bawangs.ks_status_lahan',
                    'penanaman_bawangs.ks_jumlah_modal',
                    'penanaman_bawangs.kabupaten',
                    'penanaman_bawangs.id_lokasisawah',
                    'panens.panen_tanggal'
                )
                ->where('penanaman_bawangs.ks_panen', 1)
                ->get();
            // $data = penanaman_bawang::where('ks_panen', 1)->where('id_user', $currentuserid)->get();
            return view('pages.riwayat.riwayat', compact('data', 'currentuserid'));
        }
    }

    public function pdfpanen($id)
    {
        $data = DB::table('penanaman_bawangs')
            ->join('panens', 'panens.id_penanaman', '=', 'penanaman_bawangs.id_user')
            ->select(
                'penanaman_bawangs.id_user',
                'penanaman_bawangs.namapetani',
                'penanaman_bawangs.ks_metode_pengairan',
                'penanaman_bawangs.ks_modal',
                'penanaman_bawangs.ks_luas_lahan',
                'penanaman_bawangs.ks_bibit',
                'penanaman_bawangs.ks_waktu_tanam',
                'penanaman_bawangs.ks_status_lahan',
                'penanaman_bawangs.ks_jumlah_modal',
                'penanaman_bawangs.kabupaten',
                'penanaman_bawangs.id_lokasisawah',
                'panens.panen_tanggal'
            )
            ->where('penanaman_bawangs.ks_panen', 1)
            ->where('penanaman_bawangs.id', $id)
            ->get();
        // $pdf = PDF::loadView('pdf.view', compact('data'));
        // return pdf
        $pdf = PDF::loadView('pdf.pdf', compact('data'));
        return $pdf->stream();
    }
}
