<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class GooglemapsController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        //get Api Lokasi petani
        $currentuserid = Auth::user()->id;
        $url =   $url = "http://compute.dinus.ac.id:900/api/get/showiotuser/" . $currentuserid;
        $response = Http::get($url);
        $data = json_decode($response, true);
        if ($data == null) {
            return view('/pages/responslokasi/responslokasi');
        } else {
            $user_data = $data;
            $user_data = array_slice($user_data, 0);

            //mengambil data lokasi 
            foreach ($user_data as $data) {
                $alamatPetani = $data['kabupaten'];
            }
            return view('/pages/maps/googleAutocomplete', ['alamatPetani' => $alamatPetani]);
        }
    }
}
