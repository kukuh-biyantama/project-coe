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

    <title>Form Tambah Data Penyakit</title>
  </head>
  <body>
    <h2 class="text-center mb-4 mt-3">Form Tambah Data Penyakit</h2>

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

                                <!-- Nama penyakit -->
                                <div class="mb-3">
                                    <label for="penyakitNama" class="form-label">Nama Penyakit</label>
                                    <input type="text" name="penyakit_nama" class="form-control" id="penyakitNama" aria-describedby="penyakitNama">
                                </div>

                                <!-- Tanggal Terkena penyakit -->
                                <div class="mb-3">
                                    <label for="tanggal_terkena_penyakit" class="form-label">Tanggal Terkena Penyakit</label>
                                    <input type="datetime-local" name="tgl_terkena_penyakit" class="form-control" id="tanggal_terkena_penyakit" aria-describedby="tanggal_terkena_penyakit">
                                </div>
                           
                                <!-- Gambar penyakit -->
                                <div class="mb-3">
                                    <label for="gambar_penyakit" class="form-label">Gambar Penyakit</label>
                                    <input type="file" name="gambar_penyakit" class="form-control" id="gambar_penyakit" aria-describedby="gambar_penyakit">
                                </div>

                                <!-- Keterangan penyakit -->
                                <div class="mb-3">
                                    <label for="penyakitKeterangan" class="form-label">Keterangan</label>
                                    <textarea name="penyakit_keterangan" style="height: 100px" class="form-control" id="penyakitKeterangan" aria-describedby="penyakitKeterangan"></textarea>
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