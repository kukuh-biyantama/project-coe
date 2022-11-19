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
</html>