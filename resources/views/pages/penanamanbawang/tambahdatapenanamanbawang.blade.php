@extends('layouts.app')
{{-- @include('layouts.navbars.navbar') --}}
@section('content')
<div class="container-fluid mt--7">
  <h2 class="text-center mb-4 mt-3" style="color: white;">Form Kegiatan Penanaman Bawang</h2>

  <!-- dev container untuk mengatur jarak tampilan -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card mt-5">
          <div class="card-body">
            <center>
              <p style="font-weight: 600;">Form ini digunakan untuk memulai aktivitas penanaman bawang Bapak/Ibu</p>
              <p style="font-weight: 600;">Silahkan mengisi form berikut, agar sistem dapat memberikan rekomendasi terbaik untuk kegiatan pertanian Bapak/Ibu</p>
            </center>
          </div>
        </div>
        <!-- <div class="card">
                  <a href="/datapenanamanbawang" type="button" class="btn btn-primary mb-4"  >Kembali</a>
                </div> -->
        <div class="card mt-3">
          <div class="card-body">
            <form action="/insertdatapenanamanbawang" method="POST" enctype="multipart/form-data">
              @csrf
              <!-- <a href="/datapenanamanbawang" type="button" class="btn btn-primary mb-4">Kembali</a> -->

              <!-- Lokasi -->
              <div class="mb-3">
                <label for="" class="form-label" style="font-weight: 600;">Lokasi</label>
                <select class="form-control" name="lokasi_keterangan" aria-label="Default select example">
                  <option selected disabled>Pilih</option>
                  @foreach ($user_data as $iot)
                  <option value="{{ $iot['lokasi_keterangan'] }}">Sawah Ke
                    {{ $iot['lokasi_keterangan'] }}
                  </option>
                  @endforeach
                </select>
              </div>

              <!-- Default panen -->
              <input class="inputan" type="hidden" name="ks_panen" value=0>


              <!-- Metode Pengairan -->

              <div class="mb-3">
                <label for="metodePengairan" class="form-label" style="font-weight: 600;">Metode Pengairan</label>

                <div class="form-check @error('ks_metode_pengairan') is-invalid @enderror" value="{{ old('ks_metode_pengairan') }}">
                  <div class="">
                    <input class="" type="checkbox" name="ks_metode_pengairan[]" value="Sumur"> Sumur<br>
                  </div>
                  <div class="">
                    <input class="" type="checkbox" name="ks_metode_pengairan[]" value="Irigasi"> Irigasi<br>
                  </div>
                  <div class="">
                    <input class="" type="checkbox" name="ks_metode_pengairan[]" value="Tadah Hujan"> Tadah Hujan<br>
                  </div>
                  <div class="">
                    <input class="" type="checkbox" name="ks_metode_pengairan[]" value="Mata Air"> Mata Air<br>
                  </div>
                  <div class="">
                    <input class="" type="checkbox" name="ks_metode_pengairan[]" value="Sungai"> Sungai<br>
                  </div>
                </div>

                @error('ks_metode_pengairan')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <!-- Sumber Modal -->
              <div class="mb-3">
                <label for="sumberModal" class="form-label" style="font-weight: 600;">Sumber Modal</label>

                <div class="form-check @error('ks_modal') is-invalid @enderror" value="{{ old('ks_modal') }}">
                  <div class="">
                    <input class="ksModal" type="checkbox" name="ks_modal[]" value="Sendiri"> Sendiri<br>
                  </div>
                  <div class="">
                    <input class="ksModal" type="checkbox" name="ks_modal[]" value="Pinjam"> Pinjam<br>
                  </div>
                </div>

                @error('ks_modal')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <!-- Luas Lahan -->
              <div class="mb-3">
                <label for="luasLahan" class="form-label" style="font-weight: 600;">Luas Lahan</label><br>

                <input type="number" step="0.01" style="width:100%" class="form-control @error('ks_luas_lahan') is-invalid @enderror" name="ks_luas_lahan" value="{{ old('ks_luas_lahan') }}">
                <div class="form-check">
                  <div class="">
                    <input class="inputan" type="radio" id="meter" name="stnLuasLahan" value="Meter">
                    <label>Meter</label>
                  </div>
                  <div class="">
                    <input class="inputan" type="radio" id="hektar" name="stnLuasLahan" value="Hektar">
                    <label>Hektar</label>
                  </div>
                </div>

                @error('ks_luas_lahan')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <!-- Bibit -->
              <div class="mb-3">
                <label for="bibit" class="form-label" style="font-weight: 600;">Jumlah Bibit</label><br>

                <input type="number" step="0.01" name="ks_bibit" style="width:100%" class="form-control @error('ks_bibit') is-invalid @enderror" value="{{ old('ks_bibit') }}">
                <div class="form-check">
                  <div class="">
                    <input class="inputan" type="radio" id="kilogram" name="stnBibit" value="Kilogram">
                    <label>Kilogram</label>
                  </div>
                  <div class="">
                    <input class="inputan" type="radio" id="kuintal" name="stnBibit" value="Kuintal">
                    <label>Kuintal</label>
                  </div>
                  <div class="">
                    <input class="inputan" type="radio" id="ton" name="stnBibit" value="Ton">
                    <label>Ton</label>
                  </div>
                </div>

                @error('ks_bibit')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <!-- Waktu Tanam -->
              <div class="mb-3">
                <label for="waktuTanam" class="form-label" style="font-weight: 600;">Waktu Tanam</label>

                <input type="date" name="ks_waktu_tanam" class="form-control form-control @error('ks_waktu_tanam') is-invalid @enderror" id="waktuTanam" aria-describedby="waktuTanam">

                @error('ks_waktu_tanam')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <!-- Status Lahan -->
              <div class="mb-3">
                <label for="" class="form-label" style="font-weight: 600;">Status Lahan</label>

                <div class="form-check @error('ks_status_lahan') is-invalid @enderror" value="{{ old('ks_status_lahan') }}">
                  <div class="">
                    <input class="" type="checkbox" name="ks_status_lahan[]" value="Sewa"> Sewa<br>
                  </div>
                  <div class="">
                    <input class="" type="checkbox" name="ks_status_lahan[]" value="Milik Sendiri"> Milik Sendiri<br>
                  </div>
                  <div class="">
                    <input class="" type="checkbox" name="ks_status_lahan[]" value="Bagi Hasil"> Bagi Hasil<br>
                  </div>
                </div>

                @error('ks_status_lahan')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <!-- Jumlah Modal -->
              <label for="jumlahModal" class="form-label" style="font-weight: 600;">Jumlah Modal</label><br>

              <input type="number" name="ks_jumlah_modal" style="width:100%" class="form-control @error('ks_jumlah_modal') is-invalid @enderror" value="{{ old('ks_jumlah_modal') }}" min="1">

              @error('ks_jumlah_modal')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror

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

  @endsection

  <footer class="py-5 bg-gradient-primary">
  </footer>