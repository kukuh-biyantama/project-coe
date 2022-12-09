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

    <title>Form Tambah Data Lokasi Sawah</title>
  </head>
  <body>
    <h2 class="text-center mb-4 mt-3">Form Tambah Data Lokasi Sawah</h2>

        <!-- dev container untuk mengatur jarak tampilan -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/insertdatalokasisawah" method="POST" enctype="multipart/form-data">
                                @csrf
                                <a href="/datalokasisawah" type="button" class="btn btn-primary mb-4">Kembali</a>

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
                                    <select class="form-select" name="kabupaten" aria-label="Default select example">
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
                                <div class="mb-3 pt-2">
                                    <label for="lokasiKeterangan" class="form-label">Lokasi Keterangan</label>
                                    <input type="text" name="lokasi_keterangan" class="form-control" id="lokasiKeterangan" aria-describedby="lokasiKeterangan">
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
  </body>
</html>