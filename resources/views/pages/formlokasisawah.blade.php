<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Link CSS -->
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">

    <title>Form Lokasi Sawah</title>
  </head>
  <body>
    <h2 class="text-center mb-4 mt-3">Form Lokasi Sawah</h2>
        <!-- dev container untuk mengatur jarak tampilan -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form id="lokasiForm" action="/lokasisawahjson" method="POST">
                                @csrf
                                <a href="/home" type="button" class="btn btn-primary">Kembali</a>
                                <!-- Latitude -->
                                <div class="mb-3 pt-2">
                                    <label for="lokasiLatitude" class="form-label">Latitude</label>
                                    <input type="number" name="lokasi_latitude" class="form-control" id="lokasiLatitude" aria-describedby="lokasiLatitude">
                                </div>
                                <!-- Longitude -->
                                <div class="mb-3">
                                    <label for="lokasiLongitude" class="form-label">Longitude</label>
                                    <input type="number" name="lokasi_longitude" class="form-control" id="lokasiLongitude" aria-describedby="lokasiLongitude">
                                </div>
                                <!-- Kabupaten -->
                                <div class="mb-3">
                                    <label for="" class="form-label">Kabupaten</label>
                                    <select class="form-select" name="kabupaten" aria-label="Default select example">
                                        <option selected disabled>Pilih</option>
                                        <option value="Boyolali">Boyolali</option>
                                        <option value="Brebes">Brebes</option>
                                        <option value="Demak">Demak</option>
                                        <option value="Kendal">Kendal</option>
                                        <option value="Temanggung">Temanggung</option>
                                        <option value="Kudus">Kudus</option>
                                        <option value="Pati">Pati</option>
                                    </select>
                                </div>
                                <!-- Keterangan -->
                                <div class="mb-3">
                                    <label for="lokasiKeterangan" class="form-label">Keterangan</label>
                                    <textarea name="lokasi_keterangan" style="height: 100px" class="form-control" id="lokasiKeterangan" aria-describedby="lokasiKeterangan"></textarea>
                                </div>
                                <!-- ID IoT -->
                                <div class="mb-3 pt-2">
                                    <label for="id_iot" class="form-label">ID IoT</label>
                                    <input type="number" name="id_iot" class="form-control" id="id_iot" aria-describedby="id_iot">
                                </div>
                                <!-- Button Submit dan Cancel -->
                                <div class="mb-4 mt-5 text-center">
                                    <button type="submit" class="btn btn-primary me-4">Submit</button>
                                    <button type="reset" class="btn btn-danger ">Cancel</button>
                                </div>
                            </form>
                            <script src="/assets/js/scriptlokasisawah.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
{{-- 
<html>
<head>
    <title>IOT Add Data Peta</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
        IOT Add Data Peta
    </div>
    <div class="card-body">
      <form name="tambahlokasi" id="tambahlokasi" method="post" action="{{url('lokasiterkirim')}}">
       @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Latitude</label>
            <input type="text" id="lokasi_latitude" name="lokasi_latitude" class="form-control" required="">
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Longitude</label>
            <input type="text" id="lokasi_longitude" name="lokasi_longitude" class="form-control" required="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">kabupaten</label>
            <input type="text" id="kabupaten" name="kabupaten" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">lokasi keterangan</label>
            <input type="text" id="lokasi_keterangan" name="lokasi_keterangan" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">id_iot</label>
            <input type="text" id="id_iot" name="id_iot" class="form-control" required="">
          </div>
          
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html> --}}