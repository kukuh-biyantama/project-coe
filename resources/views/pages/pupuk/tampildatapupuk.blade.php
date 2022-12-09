@extends('layouts.app')
{{-- @include('layouts.navbars.navbar') --}}
@section('content')

    <div class="container-fluid mt--7">

      <h2 class="text-center mb-4 mt-3">Form Edit Data Pupuk</h2>

      <!-- dev container untuk mengatur jarak tampilan -->
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-8">
                  <div class="card">
                      <div class="card-body">
                          <form action="/updatedatapupuk/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                              @csrf

                              <a href="/datapupuk" type="button" class="btn btn-primary mb-4">Kembali</a>
                              
                              <!-- Lokasi -->
                              <!-- <div class="mb-3">
                                  <label for="" class="form-label">Lokasi</label>
                                  <select class="form-select" name="" aria-label="Default select example">
                                      <option selected disabled>Pilih</option>
                                      <option value="1">Sawah pak Ridho</option>
                                  </select>
                              </div> -->

                              <!-- Jenis Pupuk -->
                              <div class="mb-3">
                                  <label for="jenisPupuk" class="form-label">Jenis Pupuk</label>
                                  <div class="form-check">
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_jenis[]" value="Organik"> Organik<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_jenis[]" value="Anorganik"> Anorganik<br>
                                      </div>
                                  </div>
                              </div>

                              <!-- Sumber Pupuk Organik -->
                              <div class="mb-3">
                                  <label for="sumberPupukOrganik" class="form-label">Sumber Pupuk Organik</label>
                                  <div class="form-check">
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_sumber_organik[]" value="Bantuan Pemerintah"> Bantuan Pemerintah<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_sumber_organik[]" value="Beli di Peternak"> Beli di Peternak<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_sumber_organik[]" value="Kompos"> Kompos<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_sumber_organik[]" value="Buat Sendiri"> Buat Sendiri<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_sumber_organik[]" value="Kelompok Tani"> Kelompok Tani<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_sumber_organik[]" value="Toko Pertanian"> Toko Pertanian<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_sumber_organik[]" value="Kotoran Ayam"> Kotoran Ayam<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_sumber_organik[]" value="Kotoran Sapi"> Kotoran Sapi<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_sumber_organik[]" value="Kotoran Kambing"> Kotoran Kambing<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_sumber_organik[]" value="Kotoran Hewan"> Kotoran Hewan<br>
                                      </div>
                                  </div>
                              </div>
                              
                              <!-- Sumber Pupuk Anorganik -->
                              <div class="mb-3">
                                  <label for="sumberPupukAnorganik" class="form-label">Sumber Pupuk Anorganik</label>
                                  <div class="form-check">
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_sumber_anorganik[]" value="Toko Pertanian"> Toko Pertanian<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_sumber_anorganik[]" value="Kelompok Tani"> Kelompok Tani<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_sumber_anorganik[]" value="Peternak"> Peternak<br>
                                      </div>
                                  </div>
                              </div>

                              <!-- Merk Pupuk -->
                              <div class="mb-3">
                                  <label for="merkPupuk" class="form-label">Merk Pupuk</label>
                                  <div class="form-check">
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="Bio to Grow"> Bio to Grow<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="DGW"> DGW<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="Mutiara"> Mutiara<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="Phoska"> Phoska<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="Saprodap"> Saprodap<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="HCL"> HCL<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="Kamas"> Kamas<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="Meroke"> Meroke<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="Pak Tani"> Pak Tani<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="Lao Ying"> Lao Ying<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="MKP"> MKP<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="Phonska"> Phonska<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="ZA"> ZA<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="DAP"> DAP<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="Golden Max"> Golden Max<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="KCL"> KCL<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="Mahkota"> Mahkota<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="NPK"> NPK<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="SP36"> SP36<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="Subur Kali"> Subur Kali<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="KSN"> KSN<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="Petroganik"> Petroganik<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="Pupuk Luar Negeri"> Pupuk Luar Negeri<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="Randex"> Randex<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="Urea"> Urea<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="Fosfat"> Fosfat<br>
                                      </div>
                                      <div class="">
                                        <input class="" type="checkbox" name="ks_pupuk_merk[]" value="Meganic"> Meganic<br>
                                      </div>
                                  </div>
                              </div>

                              <!-- Tanggal Rabuk Pupuk -->
                              <div class="mb-3">
                                  <label for="tglRabukPupuk" class="form-label">Tanggal Rabuk Pupuk</label>
                                  <input type="date" name="ks_pupuk_tgl_rabuk" class="form-control" id="tglRabukPupuk" aria-describedby="tglRabukPupuk" value="{{ $data->ks_pupuk_tgl_rabuk }}">
                              </div>

                              <!-- Jumlah Takaran Pupuk -->
                              <div class="mb-3">
                                  <label for="jmlTakaranPupuk" class="form-label">Jumlah Takaran Pupuk</label><br>
                                  <input type="decimal" name="ks_pupuk_jumlah_takaran" style="width:100%" class="form-control" value="{{ $data->ks_pupuk_jumlah_takaran }}">
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
                              </div>

                              <!-- Pupuk Keterangan -->
                                  <div class="mb-3">
                                  <label for="PupukKeterangan" class="form-label">Keterangan Kegiatan</label>
                                  <input type="text" name="ks_pupuk_keterangan" style="width:100%" class="form-control" value="{{ $data->ks_pupuk_keterangan }}">
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