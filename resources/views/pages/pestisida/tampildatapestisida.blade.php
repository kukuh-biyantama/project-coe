@extends('layouts.app')
{{-- @include('layouts.navbars.navbar') --}}
@section('content')

    <div class="container-fluid mt--7">

        <h2 class="text-center mb-4 mt-3"  style="color: white;">Form Edit Data Pestisida</h2>

        <!-- dev container untuk mengatur jarak tampilan -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-7">
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
                            <form action="/updatedatapestisida/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <!-- Tanggal Semprot Pestisida -->
                                <div class="mb-3">
                                    <label for="tanggalPestisida" class="form-label" style="font-weight: 600;">Tanggal semprot pestisida *</label>

                                    <input type="date" class="form-control @error('ks_pestisida_tgl_semprot') is-invalid @enderror" name="ks_pestisida_tgl_semprot" id="ks_pestisida_tgl_semprot" value="{{ old('ks_pestisida_tgl_semprot', $data->ks_pestisida_tgl_semprot) }}">
                                    
                                    @error('ks_pestisida_tgl_semprot')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Nama Pestisida -->
                                <div class="mb-3">
                                    <label for="namaPestisida" class="form-label" style="font-weight: 600;">Nama pestisida *</label>
                                    
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

                                    <input type="number" step="0.01" name="ks_pestisida_jumlah_takaran" style="width:100%" class="form-control @error('ks_pestisida_jumlah_takaran') is-invalid @enderror" value="{{ old('ks_pestisida_jumlah_takaran', $data->ks_pestisida_jumlah_takaran) }}">
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
                               
                                <!-- Keterangan kegiatan pestisida -->
                                <div class="mb-3">
                                    <label for="tglSemprotPestisida" class="form-label" style="font-weight: 600;">Keterangan kegiatan pestisida</label>
                                    <textarea class="form-control" name="ks_pestisida_keterangan" rows="4">{{ $data->ks_pestisida_keterangan }}</textarea>
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