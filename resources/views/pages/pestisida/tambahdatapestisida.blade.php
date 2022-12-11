@extends('layouts.app')
{{-- @include('layouts.navbars.navbar') --}}
@section('content')
    <div class="container-fluid mt--7">
        <h2 class="text-center mb-4 mt-4" style="color: white;">Form Tambah Data Pestisida</h2>

        <!-- dev container untuk mengatur jarak tampilan -->
        {{-- < class="container"> --}}
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card mt-5">
                    <div class="card-body">
                        <center>
                            <p style="font-weight: 600;">Form ini digunakan untuk memulai aktivitas penanaman bawang
                                Bapak/Ibu</p>
                            <p style="font-weight: 600;">Silahkan mengisi form berikut, agar sistem dapat memberikan
                                rekomendasi terbaik untuk kegiatan pertanian Bapak/Ibu</p>
                        </center>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <form action="/insertdatapestisida" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Lokasi -->
                            <div class="mb-3">
                                <label for="" class="form-label">Lokasi</label>
                                <select class="form-control" name="lokasi_keterangan" aria-label="Default select example">
                                    <option selected disabled>Pilih</option>
                                    @foreach ($user_data as $iot)
                                        <option value="{{ $iot['lokasi_keterangan'] }}">Sawah Ke
                                            {{ $iot['lokasi_keterangan'] }}</option>
                                    @endforeach
                                </select>

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
                                    <label for="tempatMembeliPestisida" class="form-label" style="font-weight: 600;">Tempat
                                        Membeli Pestisida</label>

                                    <div class="form-check @error('ks_pestisida_tempat_membeli') is-invalid @enderror"
                                        value="{{ old('ks_pestisida_tempat_membeli[]') }}">
                                        <div class="tempatMembeliPestisida">
                                            <input class="inputTempatMembeliPestisida" type="checkbox"
                                                name="ks_pestisida_tempat_membeli[]" value="Toko Obat Pertanian"> Toko Obat
                                            Pertanian<br>
                                        </div>
                                        <div class="inputTempatMembeliPestisida">
                                            <input class="" type="checkbox" name="ks_pestisida_tempat_membeli[]"
                                                value="Kelompok Tani"> Kelompok Tani<br>
                                        </div>
                                    </div>

                                    @error('ks_pestisida_tempat_membeli')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Tanggal Semprot Pestisida -->
                                <div class="mb-3">
                                    <label for="tglSemprotPestisida" class="form-label" style="font-weight: 600;">Tanggal
                                        Semprot Pestisida</label>

                                    <input type="date" name="ks_pestisida_tgl_semprot"
                                        class="form-control @error('ks_pestisida_tgl_semprot') is-invalid @enderror"
                                        value="{{ old('ks_pestisida_tgl_semprot') }}">

                                    @error('ks_pestisida_tgl_semprot')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Jumlah Takaran Pestisida -->
                                <div class="mb-3">
                                    <label for="jmlTakaranPestisida" class="form-label" style="font-weight: 600;">Jumlah
                                        Takaran Pestisida</label><br>

                                    <input type="decimal" style="width:100%"
                                        class="form-control  @error('ks_pestisida_jumlah_takaran') is-invalid @enderror"
                                        name="ks_pestisida_jumlah_takaran" value="{{ old('ks_pestisida_jumlah_takaran') }}">

                                    <div class="form-check">
                                        <div class="">
                                            <input class="inputan" type="radio" id="liter"
                                                name="stnJumlahTakaranPestisida" value="Liter">
                                            <label>Liter</label>
                                        </div>
                                        <div class="">
                                            <input class="inputan" type="radio" id="mililiter"
                                                name="stnJumlahTakaranPestisida" value="Mililiter">
                                            <label>Mililiter</label>
                                        </div>
                                    </div>

                                    @error('ks_pestisida_jumlah_takaran')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                </div>

                                <!-- Pestisida Keterangan -->
                                <div class="mb-3">
                                    <label for="pestisidaKeterangan" class="form-label" style="font-weight: 600;">Keterangan
                                        Kegiatan</label>
                                    <input type="text" name="ks_pestisida_keterangan" style="width:100%"
                                        class="form-control">
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

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
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

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
            </script>
            -->
    </div>
    </body>
    <!-- script toastr untuk menampilkan notifikasi jika data telah berhasil dieksekusi -->

    </div>
@endsection
<footer class="py-5 bg-gradient-primary">
</footer>

</html>
