@extends('layouts.app')
{{-- @include('layouts.navbars.navbar') --}}
@section('content')
    <div class="container-fluid mt--7">
        <h2 class="text-center mb-4 mt-4" style="color: white;">Form Tambah Data Pestisida</h2>

        <!-- dev container untuk mengatur jarak tampilan -->
        {{-- < class="container"> --}}
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <center>
                            <p style="font-weight: 600;">Form ini digunakan untuk memulai aktivitas pestisida bawang Bapak/Ibu</p>
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
                                <label for="" class="form-label" style="font-weight: 600;">Lokasi *</label>
                                <select class="form-control" name="lokasi_keterangan" aria-label="Default select example">
                                    <option selected disabled>Pilih</option>
                                    @foreach ($user_data as $iot)
                                        <option value="{{ $iot['lokasi_keterangan'] }}">Sawah Ke
                                            {{ $iot['lokasi_keterangan'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Tanggal Semprot Pestisida -->
                            <div class="mb-3">
                                <label for="tglRabukPestisida" class="form-label" style="font-weight: 600;">Tanggal semprot pestisida *</label>

                                <input type="date" name="ks_pestisida_tgl_semprot" class="form-control @error('ks_pestisida_tgl_semprot') is-invalid @enderror" id="ks_pestisida_tgl_semprot" value="{{ old('ks_pestisida_tgl_semprot') }}">

                                @error('ks_pestisida_tgl_semprot')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Nama Pestisida -->
                            <div class="mb-3">
                                <label for="pestisida" class="form-label" style="font-weight: 600;">Nama pestisida *</label>

                                <select name="pestisida_id" id="pestisida_id" class="form-control @error('pestisida_id') is-invalid @enderror">
                                    <option selected disabled>Pilih nama pestisida</option>
                                    @if (!empty($pestisidas))
                                        @foreach ($pestisidas as $pestisida)
                                            <option value="{{ $pestisida->id }}">{{ $pestisida->pestisida_nama }}</option>
                                        @endforeach
                                    @endif
                                </select>

                                @error('pestisida_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <!-- Jumlah Takaran Pestisida -->
                            <div class="mb-3">
                                <label for="jmlTakaranPestisida" class="form-label" style="font-weight: 600;">Jumlah takaran pestisida *</label><br>

                                <input type="number" step="0.01" name="ks_pestisida_jumlah_takaran" style="width:100%" class="form-control @error('ks_pestisida_jumlah_takaran') is-invalid @enderror" value="{{ old('ks_pestisida_jumlah_takaran') }}">

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
                            
                            <!-- Keterangan Kegiatan pestisida -->
                            <div class="mb-3" style="font-weight: 600;">
                                <label for="PestisidaKeterangan" class="form-label">Keterangan Kegiatan</label>
                                
                                <textarea class="form-control" name="ks_pestisida_keterangan" rows="4"></textarea>
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
