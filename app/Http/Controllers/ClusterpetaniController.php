<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clusterpetani;
use GuzzleHttp\Client;

//pasti kubisa menaklukkannya haa...

class ClusterpetaniController extends Controller
{
    public function index()
    {
        // $halo = "hello world";
        return view('/pages/clusterpetani/clusterpetani');
    }

    public function clusterpetanijson(Request $request)
    {
        $client = new Client();
        $api_url = "http://compute.dinus.ac.id:6001/predict";
        //konversi luas lahan (meter)
        //hallo bosss udah malam
        //aku cinta oshiku
        $satuanLuas_lahan = $request->input('stnluasLahan');
        $dataLuas_lahan = $request->input('inptLuaslahan');
        $dataHasil = $dataLuas_lahan;
        if ($satuanLuas_lahan == "Hektar") {
            $dataHasil = $dataHasil * 10000;
        } else {
            $dataHasil = $dataHasil;
        }
        //konversi
        $res = $client->post($api_url, [
            'json' => [
                "nama" => $request->input('nama'),
                "usia" => $request->input('usia'),
                "jenis kelamin" => $request->input('jenisKelamin'),
                "pendidikan" => $request->input('pendidikan'),
                "kabupaten" => $request->input('kabupaten'),
                "anggota kelompok tani" => $request->input('kelompok'),
                "status kepemilikan lahan" => $request->only(["status_kpLahan"]),
                "sumber modal" => $request->only(["smbrModal"]),
                "tanam permusim" => $request->input("tnmPermusim"),
                "luas lahan" => (string)$dataHasil,
                "lama menjadi petani" => $request->input("lmmnjdPetani"),
                "durasi tanam" => $request->input("drsTanam"),
                "bibit" => $request->input("jmlBibit"),
                "pupuk" => $request->input("jmlPupuk"),
                "rata rata hasil panen" => $request->input("ratarataHasilpanen"),
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
                #sesuai input
            ]
        ]);
        $data_body = $res->getBody();
        if ($data_body == [0]) {
            $data_body = "anda tidak memenuhi";
        } else {
            $data_body = "anda memenuhi";
        }
        // echo $data_body;
        return view('/pages/clusterpetani/tampildatajson', ['data_body' => $data_body], ['konversiLuaslahan' => $dataHasil]);
        // $result = json_encode($request->all());
        // return redirect()->route('tampildatajson')->with('success', $result);
    }

    // public function getData()
    // {
    //     $client = new Client();
    //     $data = $client->get('http://compute.dinus.ac.id:6001/predict');
    //     $data_body = $data->getBody();

    //     $api = $data_body;

    //     echo $api;
    // }
    public function tampildatajson()
    {
        return view('/pages/clusterpetani/tampildatajson');
    }
}
