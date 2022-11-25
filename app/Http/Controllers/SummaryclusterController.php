<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use PhpParser\Comment\Doc;
use function GuzzleHttp\Promise\all;

class SummaryclusterController extends Controller
{
    public function index(Request $request)
    {
        $currentuserid = Auth::user()->id;
        $api_url = 'http://couchadmin:petaniMerdeka2022@compute.dinus.ac.id:907/databaseasesmentpetani/_all_docs?include_docs=true';
        $json_data = file_get_contents($api_url);
        $response_data = json_decode($json_data);
        $user_data = $response_data->rows;
        $user_data = array_slice($user_data, 0);
        foreach ($user_data as $user) {
            $obj = $user->doc;
            $idPetani = $obj->id_user;
            $clusterHasil = $obj->cluster;
        }
        $x = json_encode($clusterHasil);
        $z = json_decode($x);
        if ($request->session()->has("user")) {
            if ($idPetani == $currentuserid and $z == [0]) {
                $petanicluster = "kosong";
                $namaPetani = $obj->nama;
            } elseif ($idPetani == $currentuserid and $z == [1]) {
                $petanicluster = "satu";
                $namaPetani = $obj->nama;
            } else {
                $namaPetani = "belum terisi";
                $petanicluster = "belum ada";
            }
        } else {
            echo 'Tidak ada data dalam session.';
        }
        return view('/pages/summarycluster/summarycluster', ['petanicluster' => $petanicluster], ['namapetani' => $namaPetani]);
    }
}
