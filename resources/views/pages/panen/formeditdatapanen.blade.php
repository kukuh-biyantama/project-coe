@extends('layouts.app')
{{-- @include('layouts.navbars.navbar') --}}
@section('content')

<div class="container-fluid mt--7">
    <h2 class="text-center mb-4 mt-3" style="color: white;">Form Edit Data Panen</h2>

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
                        <form action="/updatedatapanen/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Tanggal Panen -->
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal Panen</label>
                                <input type="date" name="panen_tanggal" class="form-control" value="{{ $data->panen_tanggal }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah Panen</label>
                                <p><input type="number" step="0.01" placeholder="Jumlah Panen" name="panen_jumlah" min="1" value="{{$data->panen_jumlah}}"></p>
                                <div class="form-radio">
                                    <div class="up">
                                        <input class="inputan" type="radio" name="stnJumlahpanen" id="kg" value="kg">
                                        <label>Kg</label>
                                    </div>
                                </div>
                                <div class="form-radio">
                                    <div class="down">
                                        <input class="inputan" type="radio" name="stnJumlahpanen" id="kwintal" value="kwintal">
                                        <label>Kwintal</label>
                                    </div>
                                </div>
                                <div class="form-radio">
                                    <div class="down">
                                        <input class="inputan" type="radio" name="stnJumlahpanen" id="Ton" value="Ton">
                                        <label>Ton</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 mt-4">
                                <label for="" class="form-label">Harga yang disepakati</label>
                                <input type="number" name="harga_sepakat" id="harga_sepakat" class="form-control" min="1" value="{{$data->panen_harga}}">
                            </div>
                            <!-- Button Submit dan Cancel -->
                            <div class="mb-4 mt-5 text-center">
                                <button type="submit" class="btn btn-primary me-4">Submit</button>
                                <button type="reset" class="btn btn-danger"><a href="/home">Cancel</a></button>
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