<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clusterpetani;
use GuzzleHttp\Client;
use PhpParser\Node\Expr\Cast\Double;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;
use PhpOption\None;

class ClusterpetaniController extends Controller
{
    public function index()
    {
        return view('/pages/clusterpetani/clusterpetani');
    }

    public function clusterpetanijson(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $setWaktu = date('d-m-Y H:i:s');
        $currentuserid = Auth::user()->id;
        $client = new Client();
        $api_url = "compute.dinus.ac.id:908/predict";
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

        // array list status kepemilikan lahan
        if (!empty($request->input('status_kpLahan'))) {
            $arrStatuskplahan = $request->input('status_kpLahan');
            $hasilStatuskplahan = join(',', $arrStatuskplahan);
        } else {
            $hasilStatuskplahan = '';
        }


        // array list sumber modal
        if (!empty($request->input('smbrModal'))) {
            $arrSmbrmodal = $request->input('smbrModal');
            $hasilSmbrmodal = join(',', $arrSmbrmodal);
        } else {
            $hasilSmbrmodal = '';
        }
        // array list bulan tanam bawang
        if (!empty($request->input('blnTanambawang'))) {
            $arrBulantanambawang = $request->input('blnTanambawang');
            $hasilBulantanambawang = join(',', $arrBulantanambawang);
        } else {
            $hasilBulantanambawang = '';
        }
        // array list bulan tanam bawang
        if (!empty($request->input('blnTanambawang'))) {
            $arrBulantanambawang = $request->input('blnTanambawang');
            $hasilBulantanambawang = join(',', $arrBulantanambawang);
        } else {
            $hasilBulantanambawang = '';
        }
        // array list varietas bawang merah
        if (!empty($request->input('vrtsBawang'))) {
            $arrVarietasbawang = $request->input('vrtsBawang');
            $hasilVarietasbawang = join(',', $arrVarietasbawang);
        } else {
            $hasilVarietasbawang = '';
        }
        // array list jenis pupuk
        if (!empty($request->input('jnsPupuk'))) {
            $arrJnspupuk = $request->input('jnsPupuk');
            $hasilJnspupuk = join(',', $arrJnspupuk);
        } else {
            $hasilJnspupuk = '';
        }
        // array list sumber pupuk organik
        if (!empty($request->input('smbrPupukorganik'))) {
            $arrSmbrpupukorganik = $request->input('smbrPupukorganik');
            $hasilSmbrpupukorganik = join(',', $arrSmbrpupukorganik);
        } else {
            $hasilSmbrpupukorganik = '';
        }
        // array list sumber pupuk anorganik
        if (!empty($request->input('smbrPupukanorganik'))) {
            $arrSmbrpupukanorganik = $request->input('smbrPupukanorganik');
            $hasilSmbrpupukanorganik = join(',', $arrSmbrpupukanorganik);
        } else {
            $hasilSmbrpupukanorganik = '';
        }
        // array list merek pupuk
        if (!empty($request->input('mrkPupuk'))) {
            $arrMrkpupuk = $request->input('mrkPupuk');
            $hasilMrkpupuk = join(',', $arrMrkpupuk);
        } else {
            $hasilMrkpupuk = '';
        }
        // array list jenis hama
        if (!empty($request->input('jnsHama'))) {
            $arrJnshama = $request->input('jnsHama');
            $hasilJnshama = join(',', $arrJnshama);
        } else {
            $hasilJnshama = '';
        }
        // array list jenis penyakit bawang
        if (!empty($request->input('jnsPenyakit'))) {
            $arrJnspenyakit = $request->input('jnsPenyakit');
            $hasilJnspenyakit = join(',', $arrJnspenyakit);
        } else {
            $hasilJnspenyakit = '';
        }
        // array list tempat membeli pestisida
        if (!empty($request->input('tmptbeliPestisida'))) {
            $arrTmptbelipestisida = $request->input('tmptbeliPestisida');
            $hasilTmptbelipestisida = join(',', $arrTmptbelipestisida);
        } else {
            $hasilTmptbelipestisida = '';
        }
        // array list sumber pengairan
        if (!empty($request->input('smbrPengairan'))) {
            $arrSmbrpengairan = $request->input('smbrPengairan');
            $hasilSmbrpengairan = join(',', $arrSmbrpengairan);
        } else {
            $hasilSmbrpengairan = '';
        }
        // array list setelah panen
        if (!empty($request->input('stlhPanen'))) {
            $arrStlhpanen = $request->input('stlhPanen');
            $hasilStlhpanen = join(',', $arrStlhpanen);
        } else {
            $hasilStlhpanen = '';
        }
        // array list tempat menjual
        if (!empty($request->input('tmptmenjualPanen'))) {
            $arrTmptmenjualpanen = $request->input('tmptmenjualPanen');
            $hasilTmptmenjualpanen = join(',', $arrTmptmenjualpanen);
        } else {
            $hasilTmptmenjualpanen = '';
        }
        $res = $client->post($api_url, [
            'json' => [
                "id" => $currentuserid,
                "waktu" => $setWaktu,
                "nama" => $request->input('nama'),
                "usia" => $request->input('usia'),
                "jenis kelamin" => $request->input('jenisKelamin'),
                "pendidikan" => $request->input('pendidikan'),
                "kabupaten" => $request->input('kabupaten'),
                "anggota kelompok tani" => $request->input('kelompok'),
                "status kepemilikan lahan" => $hasilStatuskplahan,
                "sumber modal" => $hasilSmbrmodal,
                "tanam permusim" => $request->input("tnmPermusim"),
                "luas lahan" => (string)$dataHasilluaslahan,
                "lama menjadi petani" => $request->input("lmmnjdPetani"),
                "durasi tanam" => (string)$dataHasildurasitanam,
                "bibit" => (string)$dataHasiljumlahbibit,
                "pupuk" => (string)$dataHasiljumlahpupuk,
                "rata rata hasil panen" => (string)$dataHasilrataratapanen,
                "bulan tanam bawang" => $hasilBulantanambawang,
                "varietas bawang merah" => $hasilVarietasbawang,
                "jenis pupuk" => $hasilJnspupuk,
                "sumber pupuk organik" => $hasilSmbrpupukorganik,
                "sumber pupuk anorganik" => $hasilSmbrpupukanorganik,
                "merek pupuk" => $hasilMrkpupuk,
                "jenis hama" => $hasilJnshama,
                "jenis penyakit" => $hasilJnspenyakit,
                "tempat membeli pestisida" => $hasilTmptbelipestisida,
                "sumber pengairan" => $hasilSmbrpengairan,
                "setelah panen" => $hasilStlhpanen,
                "tempat menjual hasil panen" => $hasilTmptmenjualpanen
            ]
        ]);
        $data_body = $res->getBody();
        $obj = json_decode($data_body);
        if ($obj->Cluster == [0]) {
            $datacluster = "anda tidak memenuhi";
        } elseif ($obj->Cluster == [1]) {
            $datacluster = "anda memenuhi";
        } else {
            $datacluster = "tidak valid";
        }
        return view('/pages/clusterpetani/tampildatajson', ['datacluster' => $datacluster]);
    }

    public function tampildatajson()
    {
        return view('/pages/clusterpetani/tampildatajson');
    }
}
