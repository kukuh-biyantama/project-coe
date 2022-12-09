<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('add-blog-post-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
            // $id = $request->input('id');
            $currentuserid = Auth::user()->id;
            $id_iot = $request->input('id_iot');
            $kabupaten = $request->input('kabupaten');
            $lokasi_latitude = $request->input('lokasi_latitude');
            $lokasi_longitude = $request->input('lokasi_longitude');
            $lokasi_keterangan = $request->input('lokasi_keterangan');
            $response = Http::post('http://compute.dinus.ac.id:900/api/post/location', 
            [
                'id' => $currentuserid,
                'id_iot' => $id_iot,
                'kabupaten' => $kabupaten,
                'lokasi_latitude' => $lokasi_latitude,
                'lokasi_longitude' => $lokasi_longitude,
                'lokasi_keterangan' => $lokasi_keterangan  
            ]
            );
            return redirect('/home')->with('status', 'Data Telah Terkirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
