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

    <title>Form Edit Data Pestisida</title>
  </head>
  <body>
    <h2 class="text-center mb-4 mt-3">Form Edit Data Pestisida</h2>

        <!-- dev container untuk mengatur jarak tampilan -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">

                            <form action="/updatedatapestisida/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <a href="/datapestisida" type="button" class="btn btn-primary mb-4">Kembali</a>

                                <!-- Lokasi -->
                                <!-- <div class="mb-3">
                                    <label for="" class="form-label">Lokasi</label>
                                    <select class="form-select" name="" aria-label="Default select example">
                                        <option selected disabled>Pilih</option>
                                        <option value="1">Sawah pak Ridho</option>
                                    </select>
                                </div> -->
                                {{-- <div class="mb-3">
                                <label for="" class="form-label">Lokasi</label>
                                <select class="form-control" name="lokasi" aria-label="Default select example">
                                    <option selected disabled>Pilih</option>
                                        <option value="{{ $data->id_lokasisawah }}">Sawah Ke
                                            {{ $data->id_lokasisawah }}</option>
                                </select>
                                </div> --}}
                                <!-- Nama Pestisida -->
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" style="font-weight: 600;">Nama
                                            Pestisida</label>
                                        <select class="form-control" name="ks_pestisida_nama"
                                            id="exampleFormControlSelect1">
                                            <option selected disabled>Pilih</option>
                                            <option value="Emacel">Emacel</option>
                                            <option value="Matador">Matador</option>
                                            <option value="Fenite">Fenite</option>
                                            <option value="Tenano">Curacron</option>
                                            <option value="Preza">Starelle</option>
                                            <option value="Prima-Cel">Prima-Cel</option>
                                            <option value="Brofreya">Brofreya</option>
                                            <option value="Meurtier">Meurtier</option>
                                            <option value="Ulate">Ulate</option>
                                            <option value="Biowasil">Biowasil</option>
                                            <option value="Promojoss">Promojoss</option>
                                            <option value="Marshal">Marshal</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Tempat Membeli Pestisida -->
                                <div class="mb-3">
                                    <label for="tempatMembeliPestisida" class="form-label">Tempat Membeli Pestisida</label>
                                    <div class="form-check">
                                        <div class="">
                                          <input class="" type="checkbox" name="ks_pestisida_tempat_membeli[]" value="Toko Obat Pertanian"> Toko Obat Pertanian<br>
                                        </div>
                                        <div class="">
                                          <input class="" type="checkbox" name="ks_pestisida_tempat_membeli[]" value="Kelompok Tani"> Kelompok Tani<br>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tanggal Semprot Pestisida -->
                                <div class="mb-3">
                                    <label for="tglSemprotPestisida" class="form-label">Tanggal Semprot Pestisida</label>
                                    <input type="date" name="ks_pestisida_tgl_semprot" class="form-control" id="tglSemprotPestisida" aria-describedby="tglSemprotPestisida" value="{{ $data->ks_pestisida_tgl_semprot }}">
                                </div>

                                <!-- Jumlah Takaran Pestisida -->
                                <div class="mb-3">
                                    <label for="jmlTakaranPestisida" class="form-label">Jumlah Takaran Pestisida</label><br>
                                    <input type="decimal" style="width:100%" class="form-control" name="ks_pestisida_jumlah_takaran" value="{{ $data->ks_pestisida_jumlah_takaran }}">
                                    <div class="form-check">
                                        <div class="">
                                          <input class="inputan" type="radio" id="liter" name="stnJumlahTakaranPestisida" value="Liter">
                                          <label>Liter</label>
                                        </div>
                                        <div class="">
                                          <input class="inputan" type="radio" id="mililiter" name="stnJumlahTakaranPestisida" value="Mililiter">
                                          <label>Mililiter</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pestisida Keterangan -->
                                <div class="mb-3">
                                    <label for="pestisidaKeterangan" class="form-label">Keterangan</label>
                                    <input type="text" name="ks_pestisida_keterangan" style="width:100%" class="form-control" value="{{ $data->ks_pestisida_keterangan }}">
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