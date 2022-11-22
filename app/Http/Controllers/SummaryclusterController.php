<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;


class SummaryclusterController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response = $client->get("http://couchadmin:petaniMerdeka2022@compute.dinus.ac.id:907/databaseasesmentpetani/_all_docs?include_docs=true");
        $hasil = $response->getBody()->getContents();
        echo $hasil;
        // return view('/pages/summarycluster/summarycluster');
    }
}
