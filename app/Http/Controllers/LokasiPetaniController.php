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
        $response = Http::get('http://example.com/users', [
            'id' => $currentuserid,
        ]);
    }
}
