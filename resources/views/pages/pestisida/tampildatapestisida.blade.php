@extends('layouts.app')
{{-- @include('layouts.navbars.navbar') --}}
@section('content')

    <div class="container-fluid mt--7">

        <h2 class="text-center mb-4 mt-3"  style="color: white;">Form Edit Data Pestisida</h2>

        <!-- dev container untuk mengatur jarak tampilan -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card mt-5">
                        <div class="card-body">
                            <center>
                                <p style="font-weight: 600;">Form ini digunakan untuk memulai aktivitas pestisida bawang Bapak/Ibu</p>
                                <p style="font-weight: 600;">Silahkan mengisi form berikut, agar sistem dapat memberikan
                                    rekomendasi terbaik untuk kegiatan pertanian Bapak/Ibu</p>
                            </center>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">

                            <form action="/updatedatapestisida/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                {{-- <a href="/datapestisida" type="button" class="btn btn-primary mb-4">Kembali</a> --}}

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


@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<!-- script jquery cdn -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- script sweetalert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- script toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<footer class="py-5 bg-gradient-primary">
</footer>