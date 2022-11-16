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

    <title>Form Tambah Data Pestisida</title>
  </head>
  <body>
    <h2 class="text-center mb-4 mt-3">Form Tambah Data Pestisida</h2>

        <!-- dev container untuk mengatur jarak tampilan -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/insertdatapestisida" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Lokasi -->
                                <div class="mb-3">
                                    <label for="lokasiKeterangan" class="form-label">Keterangan</label>
                                    <textarea name="lokasi_keterangan" style="height: 100px" class="form-control" id="lokasiKeterangan" aria-describedby="lokasiKeterangan"></textarea>
                                </div>

                                <!-- Nama Pestisida -->
                                <div class="mb-3">
                                    <label for="namaPestisida" class="form-label">Nama Pestisida</label>
                                    <div class="form-check">
                                        <div class="">
                                          <input class="" type="checkbox" name="ks_pestisida_nama">
                                          <label>Nama Pestisida 1</label>
                                        </div>
                                        <div class="">
                                            <input class="" type="checkbox" name="ks_pestisida_nama">
                                            <label>Nama Pestisida 2</label>
                                        </div>
                                        <div class="">
                                            <input class="" type="checkbox" name="ks_pestisida_nama">
                                            <label>Nama Pestisida 3</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tanggal Semprot Pestisida -->
                                <div class="mb-3">
                                    <label for="tglSemprotPestisida" class="form-label">Tanggal Semprot Pestisida</label>
                                    <input type="date" name="ks_pestisida_tgl_semprot" class="form-control" id="tglSemprotPestisida" aria-describedby="tglSemprotPestisida">
                                </div>

                                <!-- Jumlah Takaran Pestisida -->
                                <div class="mb-3">
                                    <label for="jumlahTakaranPestisida" class="form-label">Jumlah Takaran Pestisida</label><br>
                                    <input type="number" name="ks_pestisida_jumlah_takaran" style="width:100%" class="form-control">
                                    <!-- <div class="form-check">
                                        <div class="">
                                          <input class="inputan" type="radio" id="mililiter" name="jml_takaran_pestisida" value="MiLiliter">
                                          <label>Mililiter (mL)</label>
                                        </div>
                                        <div class="">
                                          <input class="inputan" type="radio" id="liter" name="jml_takaran_pestisida" value="Liter">
                                          <label>Liter (L)</label>
                                        </div>
                                    </div> -->
                                </div>

                                <!-- Pestisida Keterangan -->
                                <div class="mb-3">
                                    <label for="pestisidaKeterangan" class="form-label">Keterangan</label>
                                    <textarea name="ks_pestisida_keterangan" style="height: 100px" class="form-control" id="pestisidaKeterangan" aria-describedby="pestisidaKeterangan"></textarea>
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