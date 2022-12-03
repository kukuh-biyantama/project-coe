<!DOCTYPE html>
<html>

<head>
  <title>Laravel 8 Form Example Tutorial</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-4">
    @if(session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif
    <div class="card">
      <div class="card-header text-center font-weight-bold">
        Kirim Data Lokasi
      </div>
      <div class="card-body">
        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
          @csrf
          {{-- <div class="form-group">
          <label for="exampleInputEmail1">id</label>
          <input type="id" id="id" name="id" class="form-control" required="">
        </div> --}}
          <div class="form-group">
            <label for="exampleInputEmail1">id_iot</label>
            <input type="id_iot" id="id_iot" name="id_iot" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">kabupaten</label>
            <input type="kabupaten" id="kabupaten" name="kabupaten" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">lokasi_latitude</label>
            <input type="lokasi_latitude" id="lokasi_latitude" name="lokasi_latitude" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">lokasi_longitude</label>
            <input type="lokasi_longitude" id="lokasi_longitude" name="lokasi_longitude" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">lokasi Keterangan</label>
            <input type="lokasi_keterangan" id="lokasi_keterangan" name="lokasi_keterangan" class="form-control" required="">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    <a href="/home"><button type="button" class="btn btn-primary btn-lg">Kembali</button></a>
  </div>
</body>

</html>