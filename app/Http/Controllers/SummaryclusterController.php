<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SummaryclusterController extends Controller
{
    public function index(){
        return view('/pages/summarycluster/summarycluster');
    }
}
