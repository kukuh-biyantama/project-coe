@extends('layouts.app')
{{-- @include('layouts.navbars.navbar') --}}
@section('content')

<div class="container-fluid mt--7">
  <h2 class="text-center mb-4 mt-3" style="color: white;">Form Tambah Data Pupuk</h2>

  <!-- dev container untuk mengatur jarak tampilan -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-7">
        <div class="card mt-5">
          <div class="card-body">
            <center>
              <p style="font-weight: 600;">Form ini digunakan untuk memulai aktivitas pemupukan Bapak/Ibu</p>
              <p style="font-weight: 600;">Silahkan mengisi form berikut, agar sistem dapat memberikan rekomendasi terbaik untuk kegiatan pertanian Bapak/Ibu</p>
            </center>
          </div>
        </div>
        <div class="card mt-3">
          <div class="card-body">
            <form action="/insertdatapupuk" method="POST" enctype="multipart/form-data">
              @csrf

              <!-- Lokasi -->
              <div class="mb-3">
                <label for="" class="form-label" style="font-weight: 600;">Lokasi *</label>
                <select class="form-control" name="lokasi_keterangan" aria-label="Default select example">
                  <option selected disabled>Pilih</option>
                  @foreach ($user_data as $iot)
                  <option value="{{$iot['lokasi_keterangan']}}">Sawah Ke {{$iot['lokasi_keterangan']}}</option>
                  @endforeach
                </select>
              </div>

              <!-- Tanggal Rabuk Pupuk -->
              <div class="mb-3">
                <label for="tglRabukPupuk" class="form-label" style="font-weight: 600;">Tanggal rabuk pupuk *</label>

                <input type="date" name="ks_pupuk_tgl_rabuk" class="form-control @error('ks_pupuk_tgl_rabuk') is-invalid @enderror" id="ks_pupuk_tgl_rabuk" value="{{ old('ks_pupuk_tgl_rabuk') }}">

                @error('ks_pupuk_tgl_rabuk')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <!-- Jenis Pupuk -->
              <div class="mb-3">
                  <label for="jenisPupuk" class="form-label" style="font-weight: 600;">Jenis pupuk *</label>

                  <select name="jenispupuk_id" id="jenispupuk_id" class="form-control @error('jenispupuk_id') is-invalid @enderror">
                      <option selected disabled>Pilih jenis pupuk</option>
                      @if (!empty($jenispupuks))
                          @foreach ($jenispupuks as $jenispupuk)
                              <option value="{{ $jenispupuk->id }}">{{ $jenispupuk->jenispupuk_nama }}</option>
                          @endforeach
                      @endif
                  </select>

                  @error('jenispupuk_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
              
              <!-- Merk Pupuk -->
              <div class="mb-3">
                  <label for="merkPupuk" class="form-label" style="font-weight: 600;">Merk pupuk *</label>

                  <select name="merkpupuk_id" id="merkpupuk_id" class="form-control @error('merkpupuk_id') is-invalid @enderror">
                      <option selected disabled>Pilih merk pupuk</option>
                  </select>

                  @error('merkpupuk_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>

              <!-- Jumlah Takaran Pupuk -->
              <div class="mb-3">
                <label for="jmlTakaranPupuk" class="form-label" style="font-weight: 600;">Jumlah takaran pupuk *</label><br>

                <input type="number" step="0.01" name="ks_pupuk_jumlah_takaran" style="width:100%" class="form-control @error('ks_pupuk_jumlah_takaran') is-invalid @enderror" value="{{ old('ks_pupuk_jumlah_takaran') }}">

                <div class="form-check">
                  <div class="">
                    <input class="inputan" type="radio" id="kilogram" name="stnPupuk" value="Kilogram">
                    <label>Kilogram</label>
                  </div>
                  <div class="">
                    <input class="inputan" type="radio" id="kuintal" name="stnPupuk" value="Kuintal">
                    <label>Kuintal</label>
                  </div>
                  <div class="">
                    <input class="inputan" type="radio" id="ton" name="stnPupuk" value="Ton">
                    <label>Ton</label>
                  </div>
                </div>

                @error('ks_pupuk_jumlah_takaran')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <!-- Keterangan Kegiatan Pemupukan -->
              <div class="mb-3" style="font-weight: 600;">
                <label for="PupukKeterangan" class="form-label">Keterangan Kegiatan</label>
                
                <textarea class="form-control" name="ks_pupuk_keterangan" rows="4"></textarea>
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

  <!-- Script AJAX Merk Pupuk -->
  <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
      });
    });

   $(document).ready(function(){
        $("#jenispupuk_id").change(function(){
            var jenispupuk_id = $(this).val();

            if (jenispupuk_id == "") {
                var jenispupuk_id = 0;
            } 

            $.ajax({
                url: '{{ url("/fetch-merkpupuks/") }}/'+jenispupuk_id,
                type: 'post',
                dataType: 'json',
                success: function(response) {                    
                    $('#merkpupuk_id').find('option:not(:first)').remove();
                
                    if (response['merkpupuks'].length > 0) {
                        $.each(response['merkpupuks'], function(key,value){
                            $("#merkpupuk_id").append("<option value='"+value['id']+"'>"+value['merkpupuk_nama']+"</option>")
                        });
                    } 
                }
            });            
        });
   });
  </script>

  @endsection
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  <!-- script jquery cdn -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- script sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- script toastr -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <footer class="py-5 bg-gradient-primary">
  </footer>

  </html>