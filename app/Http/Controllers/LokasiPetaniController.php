<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class LokasiPetaniController extends Controller
{

    public function index()
    {
        $currentuserid = Auth::user()->id;
        $url =   $url = "http://compute.dinus.ac.id:900/api/get/showiotuser/" . $currentuserid;
        $response = Http::get($url);
        $data = json_decode($response, true);
        $user_data = $data;
        $user_data = array_slice($user_data, 0);

        //mengambil data lokasi 
        foreach ($user_data as $data) {
            $alamatPetani = $data['alamat'];
        }
        return $alamatPetani;
    }
}
