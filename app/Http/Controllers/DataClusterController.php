<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Test;


class DataClusterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // membuat requests API
        // $response = Http::post('compute.dinus.ac.id:900/ssensorsawah');
        // membuat view (blade)
        // return view('test', compact('response'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $id_iot = $request->input('id_iot');
        // $dataphtanah = $request->input('dataphtanah');

        // membuat requests API
        // $response = Http::post('compute.dinus.ac.id:900/ssensorsawah', [
        //     'id_iot' => $id_iot,
        //     'dataphtanah' => $dataphtanah
        // ]);

        // membuat view (blade)
        // return view('test', compact('response'));  

        // membuat view (blade)
        
        // json
        // return $request->json();

        // $test = new Test();
        // $test->fname = $request->input('fname');
        // $test->fname = $request->input('lname');
        // $test->fname = $request->input('email');

        // return response()->json($test);

        

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
