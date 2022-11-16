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

    <title>Form Tambah Data Pupuk</title>
  </head>
  <body>
    <h2 class="text-center mb-4 mt-3">Form Tambah Data Pupuk</h2>

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

                                <!-- Jenis Pupuk -->
                                <div class="mb-3">
                                    <label for="namaPupuk" class="form-label">Jenis Pupuk</label>
                                    <div class="form-check">
                                        <div class="">
                                          <input class="" type="checkbox" name="">
                                          <label>Organik</label>
                                        </div>
                                        <div class="">
                                            <input class="" type="checkbox" name="">
                                            <label>Anorganik</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Nama Pupuk -->
                                <div class="mb-3">
                                    <label for="namaPupuk" class="form-label">Nama Pupuk</label>
                                    <div class="form-check">
                                        <div class="">
                                          <input class="" type="checkbox" name="">
                                          <label>Nama Pupuk 1</label>
                                        </div>
                                        <div class="">
                                            <input class="" type="checkbox" name="">
                                            <label>Nama Pupuk 2</label>
                                        </div>
                                        <div class="">
                                            <input class="" type="checkbox" name="">
                                            <label>Nama Pupuk 3</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tanggal Semprot Pupuk -->
                                <div class="mb-3">
                                    <label for="tglSemprotPupuk" class="form-label">Tanggal Rabuk Pupuk</label>
                                    <input type="date" name="tgl_semprot_Pupuk" class="form-control" id="tglSemprotPupuk" aria-describedby="tglSemprotPupuk">
                                </div>

                                <!-- Jumlah Takaran Pupuk -->
                                <div class="mb-3">
                                    <label for="jumlahTakaranPupuk" class="form-label">Jumlah Takaran Pupuk</label><br>
                                    <input type="number" style="width:100%" class="form-control">
                                    <div class="form-check">
                                        <div class="">
                                            <input class="inputan" type="radio" id="kilogram" name="jml_takaran_Pupuk" value="Kilogram">
                                            <label>Kilogram</label>
                                        </div>
                                        <div class="">
                                            <input class="inputan" type="radio" id="Kuintal" name="jml_takaran_Pupuk" value="kuintal">
                                            <label>Kuintal</label>
                                        </div>
                                        <div class="">
                                            <input class="inputan" type="radio" id="ton" name="jml_takaran_Pupuk" value="ton">
                                            <label>Ton</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pupuk Keterangan -->
                                    <div class="mb-3">
                                    <label for="PupukKeterangan" class="form-label">Keterangan</label>
                                    <textarea name="Pupuk_keterangan" style="height: 100px" class="form-control" id="PupukKeterangan" aria-describedby="PupukKeterangan"></textarea>
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