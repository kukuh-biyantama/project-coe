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

    <title>Form Penanaman Bawang</title>
  </head>
  <body>
    <h2 class="text-center mb-4 mt-3">Form Penanaman Bawang</h2>

        <!-- dev container untuk mengatur jarak tampilan -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <!-- @csrf -->
                                <a href="/home" type="button" class="btn btn-primary mb-4">Kembali</a>

                                <!-- Metode Pengairan -->
                                <div class="mb-3">
                                    <label for="metodePengairan" class="form-label">Metode Pengairan</label>
                                    <div class="form-check">
                                        <div class="">
                                          <input class="" type="checkbox" name="">
                                          <label>Sumur</label>
                                        </div>
                                        <div class="">
                                            <input class="" type="checkbox" name="">
                                            <label>irigasi</label>
                                        </div>
                                        <div class="">
                                            <input class="" type="checkbox" name="">
                                            <label>Tadah Hujan</label>
                                        </div>
                                        <div class="">
                                            <input class="" type="checkbox" name="">
                                            <label>Mata Air</label>
                                        </div>
                                        <div class="">
                                            <input class="" type="checkbox" name="">
                                            <label>Sungai</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Sumber Modal -->
                                <div class="mb-3">
                                    <label for="sumberModal" class="form-label">Sumber Modal</label>
                                    <div class="form-check">
                                        <div class="">
                                          <input class="inputan" type="checkbox" name="">
                                          <label>Sendiri</label>
                                        </div>
                                        <div class="">
                                          <input class="inputan" type="checkbox" name="">
                                          <label>Pinjam</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Luas Lahan -->
                                <div class="mb-3">
                                    <label for="luasLahan" class="form-label">Luas Lahan</label><br>
                                    <input type="number" style="width:100%" class="form-control">
                                    <div class="form-check">
                                        <div class="">
                                          <input class="inputan" type="radio" id="meter" name="luas_lahan" value="Meter">
                                          <label>Meter</label>
                                        </div>
                                        <div class="">
                                          <input class="inputan" type="radio" id="hektar" name="luas_lahan" value="Hektar">
                                          <label>Hektar</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Bibit -->
                                <div class="mb-3">
                                    <label for="bibit" class="form-label">Bibit</label><br>
                                    <input type="number" style="width:100%" class="form-control">
                                    <div class="form-check">
                                        <div class="">
                                          <input class="inputan" type="radio" id="kilogram" name="bibit" value="Kilogram">
                                          <label>Kilogram</label>
                                        </div>
                                        <div class="">
                                            <input class="inputan" type="radio" id="kuintal" name="bibit" value="Kuintal">
                                            <label>Kuintal</label>
                                        </div>
                                        <div class="">
                                            <input class="inputan" type="radio" id="ton" name="bibit" value="Ton">
                                            <label>Ton</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Waktu Tanam -->
                                <div class="mb-3">
                                    <label for="waktuTanam" class="form-label">Waktu Tanam</label>
                                    <input type="date" name="waktu_tanam" class="form-control" id="waktuTanam" aria-describedby="waktuTanam">
                                </div>

                                <!-- Lokasi -->
                                <div class="mb-3">
                                    <label for="" class="form-label">Lokasi</label>
                                    <select class="form-select" name="" aria-label="Default select example">
                                        <option selected disabled>Pilih</option>
                                        <option value="1">Sawah pak Ridho</option>
                                    </select>
                                </div>

                                <!-- Status Lahan -->
                                <div class="mb-3">
                                    <label for="metodePengairan" class="form-label">Status Lahan</label>
                                    <div class="form-check">
                                        <div class="">
                                          <input class="" type="checkbox" name="">
                                          <label>Sewa</label>
                                        </div>
                                        <div class="">
                                            <input class="" type="checkbox" name="">
                                            <label>Milik Sendiri</label>
                                        </div>
                                        <div class="">
                                            <input class="" type="checkbox" name="">
                                            <label>Bagi Hasil</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Jumlah Modal -->
                                <label for="jumlahModal" class="form-label">Jumlah Modal</label><br>
                                <input type="number" style="width:100%" class="form-control">

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
