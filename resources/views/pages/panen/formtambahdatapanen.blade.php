@extends('layouts.app')
{{-- @include('layouts.navbars.navbar') --}}
@section('content')

<div class="container-fluid mt--7">
  <h2 class="text-center mb-4 mt-3" style="color: white;">Form Tambah Data Panen</h2>

  <!-- dev container untuk mengatur jarak tampilan -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card mt-5">
            <div class="card-body">
                <center>
                    <p style="font-weight: 600;">Form ini digunakan untuk memulai aktivitas panen bawang Bapak/Ibu</p>
                    <p style="font-weight: 600;">Silahkan mengisi form berikut, agar sistem dapat memberikan
                        rekomendasi terbaik untuk kegiatan pertanian Bapak/Ibu</p>
                </center>
            </div>
        </div>
            <div class="card">
                <div class="card-body">
                    <form action="/insertdatapanen" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="" class="form-label">Lokasi</label>
                                <select class="form-control" name="lokasi_keterangan" aria-label="Default select example">
                                <option selected disabled>Pilih</option>
                                @foreach ($user_data as $iot)
                                <option value="{{$iot['lokasi_keterangan']}}">Sawah Ke {{$iot['lokasi_keterangan']}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Tanggal Panen -->
                        <div class="mb-3">
                        <label for="" class="form-label">Tanggal Panen</label>
                        <input type="date" name="panen_tanggal" class="form-control">
                        </div>

                        <!-- Kualitas A -->
                        <div class="mb-3">
                            <label for="kualitas_a" class="form-label">Panen Kualitas A</label><br>

                            <input type="decimal" style="width:100%" name="panen_kualitas_a" class="form-control">

                            <div class="form-check">
                                <div class="">
                                    <input class="inputan" type="radio" id="kilogram" name="stnpanenkualitas_a" value="Kilogram">
                                    <label>Kilogram</label>
                                </div>
                                <div class="">
                                    <input class="inputan" type="radio" id="Kuintal" name="stnpanenkualitas_a" value="Kuintal">
                                    <label>Kuintal</label>
                                </div>
                                <div class="">
                                    <input class="inputan" type="radio" id="ton" name="stnpanenkualitas_a" value="Ton">
                                    <label>Ton</label>
                                </div>
                            </div>
                        </div>

                        <!-- Kualitas B -->
                        <div class="mb-3">
                            <label for="kualitas_b" class="form-label">Panen Kualitas B</label><br>

                            <input type="decimal" name="panen_kualitas_b" style="width:100%" class="form-control">

                            <div class="form-check">
                                <div class="">
                                    <input class="inputan" type="radio" id="kilogram" name="stnpanenkualitas_b" value="Kilogram">
                                    <label>Kilogram</label>
                                </div>
                                <div class="">
                                    <input class="inputan" type="radio" id="Kuintal" name="stnpanenkualitas_b" value="kuintal">
                                    <label>Kuintal</label>
                                </div>
                                <div class="">
                                    <input class="inputan" type="radio" id="ton" name="stnpanenkualitas_b" value="Ton">
                                    <label>Ton</label>
                                </div>
                            </div>
                        </div>

                        <!-- Kualitas C -->
                        <div class="mb-3">
                            <label for="kualitas_c" class="form-label">Panen Kualitas C</label><br>

                            <input type="decimal" name="panen_kualitas_c" style="width:100%" class="form-control">

                            <div class="form-check">
                                <div class="">
                                    <input class="inputan" type="radio" id="kilogram" name="stnpanenkualitas_c" value="Kilogram">
                                    <label>Kilogram</label>
                                </div>
                                <div class="">
                                    <input class="inputan" type="radio" id="Kuintal" name="stnpanenkualitas_c" value="kuintal">
                                    <label>Kuintal</label>
                                </div>
                                <div class="">
                                    <input class="inputan" type="radio" id="ton" name="stnpanenkualitas_c" value="Ton">
                                    <label>Ton</label>
                                </div>
                            </div>
                        </div>


                        <!-- Button Submit dan Cancel -->
                        <div class="mb-4 mt-5 text-center">
                            <button type="submit" class="btn btn-primary me-4">Submit</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
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

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->

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
