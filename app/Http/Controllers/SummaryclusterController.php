<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use PhpParser\Comment\Doc;
use function GuzzleHttp\Promise\all;

class SummaryclusterController extends Controller
{
    public function index()
    {
        $currentuserid = Auth::user()->id;
        $currentuserid = auth::user()->id;
        $response = Http::withHeaders([
            'Accept' => 'application/json'
        ])->post('http://couchadmin:petaniMerdeka2022@compute.dinus.ac.id:907/databaseasesmentpetani/_find', [
            'selector' => [
                'id_user' => $currentuserid
            ],
            'fields' => [
                "nama",
                "cluster"
            ],
            'skip' => 0,
            'execution_stats' => true
        ]);
        $response_data = json_decode($response);
        $user_data = $response_data->docs;
        $user_data = array_slice($user_data, 0);
        if ($user_data == null) {
            $namaPetani = "belum ada";
            $petanicluster = "tidak ada";
            return view('/pages/summarycluster/summarycluster', ['petanicluster' => $petanicluster], ['namapetani' => $namaPetani]);
        } else {
            foreach ($user_data as $user) {
                $hasilcluster = $user->cluster;
                $x = json_encode($hasilcluster);
                $z = json_decode($x);
                if ($z == [0]) {
                    $namaPetani = $user->nama;
                    $petanicluster = "kosong";
                } elseif ($z == [1]) {
                    $namaPetani = $user->nama;
                    $petanicluster = "satu";
                } else {
                    $namaPetani = "belum ada";
                    $petanicluster = "tidak ada";
                }
            }
            return view('/pages/summarycluster/summarycluster', ['petanicluster' => $petanicluster], ['namapetani' => $namaPetani]);
        }
    }
}
