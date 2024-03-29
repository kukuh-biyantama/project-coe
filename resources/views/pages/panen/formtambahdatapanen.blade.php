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
                            <!-- Kabupaten -->
                            <div class="mb-3">
                                <!-- <label for="" class="form-label">id</label> -->
                                <input name="id" id="id" style="width:100%" class="form-control" value="{{ $users->id }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Kabupaten</label>
                                <input type="text" name="kabupaten" style="width:100%" class="form-control" value="{{ $users->kabupaten }}" disabled>
                            </div>
                            <!-- idlokasi -->
                            <div class="mb-3">
                                <label for="" class="form-label">Lokasi</label>
                                <input type="text" name="" id="" style="width:100%" class="form-control" value="Sawah {{ $users->id_lokasisawah }}" disabled>
                            </div>
                            <div class="mb-3">
                                <!-- <label for="" class="form-label">Lokasi</label> -->
                                <input type="hidden" name="lokasi" id="lokasi" style="width:100%" class="form-control" value="{{ $users->id_lokasisawah }}">
                            </div>
                            <!-- luas lahan -->
                            <div class="mb-3">
                                <label for="" class="form-label">Luas lahan</label>
                                <input type="text" name="" style="width:100%" class="form-control" value="{{ $users->ks_luas_lahan }} Meter" disabled>
                            </div>
                            <!-- waktu tanam -->
                            <div class="mb-3">
                                <label for="" class="form-label">Waktu Tanam</label>
                                <input type="text" name="" id="" style="width:100%" class="form-control" value="{{ $users->ks_waktu_tanam }}" disabled>
                            </div>
                            <div class="mb-3">
                                <!-- <label for="" class="form-label">Waktu Tanam</label> -->
                                <input type="hidden" name="waktutanam" id="waktutanam" style="width:100%" class="form-control" value="{{ $users->ks_waktu_tanam }}">
                            </div>
                            <!-- Tanggal Panen -->
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal Panen</label>
                                <input type="date" name="panen_tanggal" class="form-control">
                            </div>
                            <!-- <div class="mb-3">
                                <label for="" class="form-label">Jumlah panen</label>
                                <input type="number" name="panen_jumlah" class="form-control">
                            </div> -->
                            <div class="mb-3">
                                <label class="form-label">Jumlah Panen</label>
                                <p><input type="number" step="0.01" placeholder="Jumlah Panen" name="panen_jumlah" min="1"></p>
                                <div class="form-radio">
                                    <div class="up">
                                        <input class="inputan" type="radio" name="stnJumlahpanen" id="kilogram" value="kg">
                                        <label>Kg</label>
                                    </div>
                                </div>
                                <div class="form-radio">
                                    <div class="down">
                                        <input class="inputan" type="radio" name="stnJumlahpanen" id="kuintal" value="kwintal">
                                        <label>Kwintal</label>
                                    </div>
                                </div>
                                <div class="form-radio">
                                    <div class="down">
                                        <input class="inputan" type="radio" name="stnJumlahpanen" id="ton" value="Ton">
                                        <label>Ton</label>
                                    </div>
                                </div>
                            </div>
                            <!-- nama penebas -->
                            <div class="mb-3">
                                <label for="" class="form-label">Cari Nama Penebas/Pembeli</label>
                                <br>
                                <select class="cari form-control" style="width:500px;" name="cari" id="id_penebas"></select>
                                <input type="text" name="cari" class="form-control" style="width:500px; margin-top:10px;" placeholder="Tidak menemukan hasil? Masukkan secara manual">
                            </div>


                            {{ csrf_field() }}
                            <div class="mb-3 mt-4">
                                <label for="" class="form-label">Harga yang disepakati</label>
                                <input type="number" name="harga_sepakat" id="harga_sepakat" class="form-control" min="1">
                            </div>
                            <!-- Button Submit dan Cancel -->
                            <div class="mb-4 mt-5 text-center">
                                <!-- <button type="submit" class="btn btn-primary me-4">Submit</button>
                                <button type="reset" class="btn btn-danger">Cancel</button> -->
                                <?php
                                if ($reviewpanen == "datakosong") {
                                    echo  "<button class='btn btn-primary' type='submit'>Jual</button>";
                                } else {
                                    foreach ($reviewpanen as $verifypanen) {
                                        if ($verifypanen->id_penanaman == $id) {
                                            echo   "<button class='btn btn-primary' type='submit' disabled>Jual</button>";
                                            echo "<br>";
                                            echo "Data Sudah Terisi";
                                        } else {
                                            echo  "<button class='btn btn-primary' type='submit'>Jual</button>";
                                        }
                                    }
                                }
                                ?>
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