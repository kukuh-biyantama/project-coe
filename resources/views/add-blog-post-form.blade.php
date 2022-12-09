@extends('layouts.app')
{{-- @include('layouts.navbars.navbar') --}}
@section('content')

    <div class="container-fluid mt--7">
        <h2 class="text-center mb-4 mt-4 text-light">Form Kirim Lokasi</h2>

        <div class="container mt-4">
          @if(session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
          <div class="card">
            <div class="card-header text-center font-weight-bold">
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
                  <input type="id_iot" id="id_iot" name="id_iot" class="form-control">
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
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<!-- script jquery cdn -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- script sweetalert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- script toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<footer class="py-5 bg-gradient-primary">
</footer>

  