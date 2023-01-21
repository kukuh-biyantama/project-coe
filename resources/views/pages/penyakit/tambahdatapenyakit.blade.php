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
                            <form action="{{ route('penyakit.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="kegiatansawah_id">Kegiatan Sawah</label>
                                    <select name="kegiatansawah_id" id="kegiatansawah_id" class="form-control">
                                        @foreach($kegiatansawahs as $kegiatansawah)
                                            <option value="{{ $kegiatansawah->id }}">{{ $kegiatansawah->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="penyakit_id">Penyakit</label>
                                    <select name="penyakit_id" id="penyakit_id" class="form-control">
                                        @foreach($penyakits as $penyakit)
                                            <option value="{{ $penyakit->id }}">{{ $penyakit->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ks_penyakit_tanggal_terkena">Tanggal Terkena</label>
                                    <input type="date" name="ks_penyakit_tanggal_terkena" id="ks_penyakit_tanggal_terkena" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="ks_penyakit_keterangan">Keterangan</label>
                                    <textarea name="ks_penyakit_keterangan" id="ks_penyakit_keterangan" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
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