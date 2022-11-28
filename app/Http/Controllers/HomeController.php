<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        //api
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
                $petanicluster = "";
            }
        }
        return view('dashboard', ['petanicluster' => $petanicluster], ['namapetani' => $namaPetani]);
    }
}
