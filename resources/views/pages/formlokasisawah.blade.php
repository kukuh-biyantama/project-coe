<html>
<head>
    <title>IOT Add Data Peta</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <!-- Success message -->
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    <form action="" method="post" action="{{ route('location.store') }}">
        <!-- CROSS Site Request Forgery Protection -->
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
          
       
        <button type="submit" name="send" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>