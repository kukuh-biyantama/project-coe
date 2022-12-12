@extends('layouts.app')
{{-- @include('layouts.navbars.navbar') --}}
@section('content')

<div class="container-fluid mt--7">
  <h2 class="text-center mb-4 mt-3" style="color: white;">Form Tambah Data Lokasi</h2>

  <!-- dev container untuk mengatur jarak tampilan -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card mt-5">
          <div class="card-body">
            <center>
              <p style="font-weight: 600;">Form ini digunakan untuk membuat lokasi Bapak/Ibu</p>
              <p style="font-weight: 600;">Silahkan mengisi form berikut, agar sistem dapat memberikan rekomendasi terbaik untuk kegiatan pertanian Bapak/Ibu</p>
            </center>
          </div>
        </div>  
        <div class="card">
            <div class="card-body">
                <form action="/insertdatalokasisawah" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- ID IOT -->
                    <div class="mb-3 pt-2">
                        <label for="idIot" class="form-label">ID IoT</label>
                        <input type="number" name="id_iot" class="form-control" id="idIot" aria-describedby="idIot">
                    </div>

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
                        <select class="form-control" name="kabupaten" aria-label="Default select example">
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
                        <label for="" class="form-label">Lokasi Keterangan</label>
                        <select class="form-control" name="lokasi_keterangan" aria-label="Default select example">
                            <option selected disabled>Pilih</option>
                            <option value="1">Sawah 1</option>
                            <option value="2">Sawah 2</option>
                            <option value="3">Sawah 3</option>
                            <option value="4">Sawah 4</option>
                            <option value="5">Sawah 5</option>
                        </select>
                    </div>

                    <!-- Button Submit dan Cancel -->
                    <div class="mb-4 mt-5 text-center">
                        <button type="submit" class="btn btn-success me-4">Submit</button>
                        <button type="reset" class="btn btn-danger ">Cancel</button>
                    </div>
                </form>
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

  @endsection
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  <!-- script jquery cdn -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- script sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- script toastr -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <footer class="py-5 bg-gradient-primary">
  </footer>

  </html>
