<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
     * Show the application dashboard.aqs
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $currentuserid = Auth::user()->id;
        //session
        // $request->session()->put("user", $currentuserid);
        $api_url = 'http://couchadmin:petaniMerdeka2022@compute.dinus.ac.id:907/databaseasesmentpetani/_all_docs?include_docs=true';
        $json_data = file_get_contents($api_url);
        $response_data = json_decode($json_data);
        $user_data = $response_data->rows;
        $user_data = array_slice($user_data, 0);
        foreach ($user_data as $user) {
            //get doc in list
            $obj = $user->doc;
            $clusterHasil = $obj->cluster;
            $x = json_encode($clusterHasil);
            $z = json_decode($x);
            if ($obj->id_user == $currentuserid and  $z == [0]) {
                $petanicluster = "kosong";
                $namaPetani = $obj->nama;
            } elseif ($obj->id_user == $currentuserid and  $z == [1]) {
                $petanicluster = "satu";
                $namaPetani = $obj->nama;
            } else {
                $namaPetani = "belum terisi";
                $petanicluster = "belum ada";
            }
        }
        // $x = json_encode($clusterHasil);
        // $z = json_decode($x);
        // if (Auth::check()) {
        //     if ($idPetani == $currentuserid and $z == [0]) {
        //         $petanicluster = "kosong";
        //         $namaPetani = $obj->nama;
        //     } elseif ($idPetani == $currentuserid and $z == [1]) {
        //         $petanicluster = "satu";
        //         $namaPetani = $obj->nama;
        //     } else {
        //         $namaPetani = "belum terisi";
        //         $petanicluster = "belum ada";
        //     }
        // } else {
        //     echo 'Tidak ada data dalam session.';
        // }
        // foreach ($obj as $value) {
        //     $hasil_cluster = $value->nama;
        //     var_dump($hasil_cluster);
        // }
        // var_dump($obj);
        // // var_dump($currentuserid);
        return view('dashboard', ['petanicluster' => $petanicluster], ['namapetani' => $namaPetani]);
        // return view('dashboard');
    }
}


