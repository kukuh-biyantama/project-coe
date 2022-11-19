<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clusterpetani;
use GuzzleHttp\Client;
use PhpParser\Node\Expr\Cast\Double;
use Auth;

class ClusterpetaniController extends Controller
{
    public function index()
    {
        return view('/pages/clusterpetani/clusterpetani');
    }

    public function clusterpetanijson(Request $request)
    {
        $currentuserid = Auth::user()->id;
        $client = new Client();
        $api_url = "http://compute.dinus.ac.id:6001/predict";
        //konversi luas lahan (meter)
        $satuanLuas_lahan = $request->input('stnluasLahan');
        $dataLuas_lahan = $request->input('inptLuaslahan');
        $dataHasilluaslahan = $dataLuas_lahan;
        if ($satuanLuas_lahan == "Hektar") {
            $dataHasilluaslahan = $dataHasilluaslahan * 10000;
        } else {
            $dataHasilluaslahan = $dataHasilluaslahan;
        }
        //konversi durasi tanam (hari)
        $bulaN = $request->input('hridurasiTanam');
        $dataDurasitanam = $request->input('drsTanam');
        $dataHasildurasitanam = $dataDurasitanam;
        if ($bulaN == "Bulan") {
            $dataHasildurasitanam = $dataHasildurasitanam * 30;
        } else {
            $dataHasildurasitanam = $dataHasildurasitanam;
        }
        //konversi bibit ke kg
        $jmlBibit = $request->input('jmlBibit');
        $stnJmlbibit = $request->input('stnBibit');
        $dataHasiljumlahbibit = $jmlBibit;
        if ($stnJmlbibit == "Kwintal") {
            $dataHasiljumlahbibit = $dataHasiljumlahbibit * 100;
        }
        if ($stnJmlbibit == "Ton") {
            $dataHasiljumlahbibit = $dataHasiljumlahbibit * 1000;
        } else {
            $dataHasiljumlahbibit = $dataHasiljumlahbibit;
        }
        //konversi pupuk ke kg
        $jmlPupuk = $request->input('jmlPupuk');
        $stnJmlpupuk = $request->input('stnPupuk');
        $dataHasiljumlahpupuk = $jmlPupuk;
        if ($stnJmlpupuk == "Kwintal") {
            $dataHasiljumlahpupuk = $dataHasiljumlahpupuk * 100;
        }
        if ($stnJmlpupuk == "Ton") {
            $dataHasiljumlahpupuk = $dataHasiljumlahpupuk * 1000;
        } else {
            $dataHasiljumlahpupuk = $dataHasiljumlahpupuk;
        }
        //konversi hasil panen ke kg
        $ratarataPanen = $request->input('ratarataHasilpanen');
        $stnHasilpanen = $request->input('stnratarataPanen');
        $dataHasilrataratapanen = $ratarataPanen;
        if ($stnHasilpanen == "Kwintal") {
            $dataHasilrataratapanen = $dataHasilrataratapanen * 100;
        }
        if ($stnHasilpanen == "Ton") {
            $dataHasilrataratapanen = $dataHasilrataratapanen * 1000;
        } else {
            $dataHasilrataratapanen = $dataHasilrataratapanen;
        }
        $res = $client->post($api_url, [
            'json' => [
                "id" => $currentuserid,
                "nama" => $request->input('nama'),
                "usia" => $request->input('usia'),
                "jenis kelamin" => $request->input('jenisKelamin'),
                "pendidikan" => $request->input('pendidikan'),
                "kabupaten" => $request->input('kabupaten'),
                "anggota kelompok tani" => $request->input('kelompok'),
                "status kepemilikan lahan" => $request->only(["status_kpLahan"]),
                "sumber modal" => $request->only(["smbrModal"]),
                "tanam permusim" => $request->input("tnmPermusim"),
                "luas lahan" => (string)$dataHasilluaslahan,
                "lama menjadi petani" => $request->input("lmmnjdPetani"),
                "durasi tanam" => (string)$dataHasildurasitanam,
                "bibit" => (string)$dataHasiljumlahbibit,
                "pupuk" => (string)$dataHasiljumlahpupuk,
                "rata rata hasil panen" => (string)$dataHasilrataratapanen,
                "bulan tanam bawang" => $request->only(["blnTanambawang"]),
                "varietas bawang merah" => $request->only(["vrtsBawang"]),
                "jenis pupuk" => $request->only(["jnsPupuk"]),
                "sumber pupuk organik" => $request->only(["smbrPupukorganik"]),
                "sumber pupuk anorganik" => $request->only(["smbrPupukanorganik"]),
                "merek pupuk" => $request->only(["mrkPupuk"]),
                "jenis hama" => $request->only(["jnsHama"]),
                "jenis penyakit" => $request->only(["jnsPenyakit"]),
                "tempat membeli pestisida" => $request->only(["tmptbeliPestisida"]),
                "sumber pengairan" => $request->only(["smbrPengairan"]),
                "setelah panen" => $request->only(["stlhPanen"]),
                "tempat menjual hasil panen" => $request->only(["tmptmenjualPanen"])
            ]
        ]);
        $data_body = $res->getBody();
        if ($data_body == [0]) {
            $data_body = "anda tidak memenuhi";
        } else {
            $data_body = "anda memenuhi";
        }
        return view('/pages/clusterpetani/tampildatajson', ['data_body' => $data_body]);
    }

    public function tampildatajson()
    {
        return view('/pages/clusterpetani/tampildatajson');
    }
}
