<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use Illuminate\Support\Facades\Http;


class reportiotclient extends Controller
{
    public function reportdataiot(){
    $currentuserid = auth::user()->id;
    $url = "http://compute.dinus.ac.id:900/api/get/reportiotssawah/" . $currentuserid;
    // $url = 'http://compute.dinus.ac.id:900/api/get/reportiotssawah/3';
    $response = Http::get($url);
    $data = json_decode($response, true);
    return view('pages/ssensorsawah/datassensorsawah', compact('data'));
    }
}
