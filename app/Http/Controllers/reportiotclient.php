<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;


class reportiotclient extends Controller
{
    public function reportdataiot()
    {
        $currentuserid = Auth::user()->id;
        $url = "http://compute.dinus.ac.id:900/api/get/lokasi/" . $currentuserid;
        $response = Http::get($url);
        $data = json_decode($response, true);
        $sswahpage = view('pages/ssensorsawah/datassensorsawah', compact('data'));
        return $sswahpage;
    }
}
