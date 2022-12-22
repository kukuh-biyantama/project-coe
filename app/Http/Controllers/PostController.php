<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Auth;
use Illuminate\Support\Facades\DB;

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
        $response = Http::post(
            'http://compute.dinus.ac.id:900/api/post/location',
            [
                'id' => $currentuserid, //user_id
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
    // public function penebas()
    // {
    //     $data = DB::table('biodatas')->where('nama')->get();
    // }
    // function l(Request $request)
    // {
    //  if($request->get('query'))
    //  {
    //   $query = $request->get('query');
    //   $data = DB::table('biodatas')
    //     ->where('nama', 'LIKE', "%{$query}%")
    //     ->get();
    //   $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
    //   foreach($data as $row)
    //   {
    //    $output .= '
    //    <li><a href="#">'.$row->nama.'</a></li>
    //    ';
    //   }
    //   $output .= '</ul>';
    //   echo $output;
    //  }
    // }
    public function loadData(Request $request)
    {
        if ($request->has('q')) {
            $cari = $request->q;
            $data = DB::table('biodatas')->select('id', 'nama')->where('nama', 'LIKE', '%' . $cari . '%')->get();
            return response()->json($data);
        }
    }
}
