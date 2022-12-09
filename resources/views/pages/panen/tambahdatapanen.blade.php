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

    <title>Form Tambah Data Panen</title>
  </head>
  <body>
    <h2 class="text-center mb-4 mt-3">Form Tambah Data Panen</h2>

        <!-- dev container untuk mengatur jarak tampilan -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <!-- @csrf -->
                                
                                <!-- Lokasi -->
                                <div class="mb-3">
                                    <label for="" class="form-label">Lokasi</label>
                                    <select class="form-select" name="" aria-label="Default select example">
                                        <option selected disabled>Pilih</option>
                                        <option value="1">Sawah pak Ridho</option>
                                    </select>
                                </div>

                                <!-- Tanggal Panen -->
                                <div class="mb-3">
                                <label for="" class="form-label">Tanggal Panen</label>
                                <input type="date" name="panen_tanggal" class="form-control">
                                </div>
                                    

                                <!-- Hasil Produksi Panen -->
                                <div class="mb-3">
                                    <label for="hasilProduksiPanen" class="form-label">Hasil Produksi Panen</label><br>
                                    <input type="number" style="width:100%" class="form-control">
                                    <div class="form-check">
                                        <div class="">
                                            <input class="inputan" type="radio" id="kilogram" name="hasil_produksi_panen" value="Kilogram">
                                            <label>Kilogram</label>
                                        </div>
                                        <div class="">
                                            <input class="inputan" type="radio" id="Kuintal" name="hasil_produksi_panen" value="kuintal">
                                            <label>Kuintal</label>
                                        </div>
                                        <div class="">
                                            <input class="inputan" type="radio" id="ton" name="hasil_produksi_panen" value="ton">
                                            <label>Ton</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Kualitas A -->
                                <div class="mb-3">
                                    <label for="kualitas_a" class="form-label">Panen Kualitas A</label><br>
                                    <input type="number" style="width:100%" class="form-control">
                                    <div class="form-check">
                                        <div class="">
                                            <input class="inputan" type="radio" id="kilogram" name="kualitas_a" value="Kilogram">
                                            <label>Kilogram</label>
                                        </div>
                                        <div class="">
                                            <input class="inputan" type="radio" id="Kuintal" name="kualitas_a" value="kuintal">
                                            <label>Kuintal</label>
                                        </div>
                                        <div class="">
                                            <input class="inputan" type="radio" id="ton" name="kualitas_a" value="ton">
                                            <label>Ton</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Kualitas B -->
                                <div class="mb-3">
                                    <label for="kualitas_b" class="form-label">Panen Kualitas B</label><br>
                                    <input type="number" style="width:100%" class="form-control">
                                    <div class="form-check">
                                        <div class="">
                                            <input class="inputan" type="radio" id="kilogram" name="kualitas_b" value="Kilogram">
                                            <label>Kilogram</label>
                                        </div>
                                        <div class="">
                                            <input class="inputan" type="radio" id="Kuintal" name="kualitas_b" value="kuintal">
                                            <label>Kuintal</label>
                                        </div>
                                        <div class="">
                                            <input class="inputan" type="radio" id="ton" name="kualitas_b" value="ton">
                                            <label>Ton</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Kualitas C -->
                                <div class="mb-3">
                                    <label for="kualitas_c" class="form-label">Panen Kualitas C</label><br>
                                    <input type="number" style="width:100%" class="form-control">
                                    <div class="form-check">
                                        <div class="">
                                            <input class="inputan" type="radio" id="kilogram" name="kualitas_c" value="Kilogram">
                                            <label>Kilogram</label>
                                        </div>
                                        <div class="">
                                            <input class="inputan" type="radio" id="Kuintal" name="kualitas_c" value="kuintal">
                                            <label>Kuintal</label>
                                        </div>
                                        <div class="">
                                            <input class="inputan" type="radio" id="ton" name="kualitas_c" value="ton">
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