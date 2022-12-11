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

    <title>Form Edit Data Panen</title>
  </head>
  <body>
    <h2 class="text-center mb-4 mt-3">Form Edit Data Panen</h2>

        <!-- dev container untuk mengatur jarak tampilan -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/updatedatapanen/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <!-- Tanggal Panen -->
                                <div class="mb-3">
                                <label for="" class="form-label">Tanggal Panen</label>
                                <input type="date" name="panen_tanggal" class="form-control" value="{{ $data->panen_tanggal }}">
                                </div>
                                    

                                <!-- Hasil Produksi Panen -->
                                <div class="mb-3">
                                    <label for="hasilProduksiPanen" class="form-label">Hasil Produksi Panen</label><br>

                                    <input type="decimal" name="panen_hasil_produksi" style="width:100%" class="form-control" value="{{ $data->panen_hasil_produksi }}">

                                    <div class="form-check">
                                        <div class="">
                                            <input class="inputan" type="radio" id="kilogram" name="stnpanenhasil" value="Kilogram">
                                            <label>Kilogram</label>
                                        </div>
                                        <div class="">
                                            <input class="inputan" type="radio" id="Kuintal" name="stnpanenhasil" value="Kuintal">
                                            <label>Kuintal</label>
                                        </div>
                                        <div class="">
                                            <input class="inputan" type="radio" id="ton" name="stnpanenhasil" value="Ton">
                                            <label>Ton</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Kualitas A -->
                                <div class="mb-3">
                                    <label for="kualitas_a" class="form-label">Panen Kualitas A</label><br>

                                    <input type="decimal" style="width:100%" name="panen_kualitas_a" class="form-control" value="{{ $data->panen_kualitas_a }}">

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

                                    <input type="decimal" name="panen_kualitas_b" style="width:100%" class="form-control" value="{{ $data->panen_kualitas_b }}">

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

                                    <input type="decimal" name="panen_kualitas_c" style="width:100%" class="form-control" value="{{ $data->panen_kualitas_c }}">

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

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>