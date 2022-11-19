<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LokasiSawahController extends Controller
{
    public function index(){
        return view('/pages/formlokasisawah');
        
    }
    public function tambahlokasi(request $request){
        $lokasi_latitude = $request->input('lokasi_latitude');
        $lokasi_longitude = $request->input('lokasi_longitude');
        $kabupaten = $request->input('kabupaten');
        $lokasi_keterangan = $request->input('lokasi_keterangan');
        $id_iot = $request->input('id_iot');
    
        $post = Http::post('http://compute.dinus.ac.id:900/api/tambah/datalokasi', [
    
                'lokasi_latitude' => $lokasi_latitude,
                'lokasi_longitude' => $lokasi_longitude,
                'kabupaten' => $kabupaten,
                'lokasi_keterangan' => $lokasi_keterangan,
                'id_iot' => $id_iot,
            ]);
            // $tanggal = $date->format('Y-m-d H:i:s');
            // return response()->json(['massage'=> 'insert data success', 'data' => $tambahlokasi]);
            return redirect('tambahlokasi')->with(['success' => 'Data Berhasil Terinput']);}
}




// 
// <html>
// <head>
//     <title>IOT Add Data Peta</title>
//     <meta name="csrf-token" content="{{ csrf_token() }}">
//     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
// </head>
// <body>
//   <div class="container mt-4">
//     @if ($message = Session::get('success'))
//     <div class="alert alert-success alert-block">
//       <button type="button" class="close" data-dismiss="alert">×</button>	
//         <strong>{{ $message }}</strong>
//     </div>
//   @endif
//   <div class="card">
//     <div class="card-header text-center font-weight-bold">
//         IOT Add Data Peta
//     </div>
//     <div class="card-body">
//       <form name="tambahlokasi" id="tambahlokasi" method="post" action="{{url('lokasiterkirim')}}">
//        @csrf
//         <div class="form-group">
//             <label for="exampleInputEmail1">Latitude</label>
//             <input type="number" id="lokasi_latitude" name="lokasi_latitude" class="form-control" required="">
//           </div>
//         <div class="form-group">
//             <label for="exampleInputEmail1">Longitude</label>
//             <input type="number" id="lokasi_longitude" name="lokasi_longitude" class="form-control" required="">
//         </div>
//         <div class="form-group">
//             <label for="exampleInputEmail1">kabupaten</label>
//             <input type="text" id="kabupaten" name="kabupaten" class="form-control" required="">
//           </div>
//           <div class="form-group">
//             <label for="exampleInputEmail1">lokasi keterangan</label>
//             <input type="text" id="lokasi_keterangan" name="lokasi_keterangan" class="form-control" required="">
//           </div>
//           <div class="form-group">
//             <label for="exampleInputEmail1">id_iot</label>
//             <input type="text" id="id_iot" name="id_iot" class="form-control" required="">
//           </div>
          
       
//         <button type="submit" class="btn btn-primary">Submit</button>
//       </form>
//     </div>
//   </div>
// </div>  
// </body>
// </html>