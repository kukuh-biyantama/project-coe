@extends('layouts.app')
{{-- @include('layouts.navbars.navbar') --}}
@section('content')

<div class="container-fluid mt--7">
    <h2 class="text-center mb-4 mt-4 text-light">Hasil Cluster</h2>

    <div class="container mt-4">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card mt-7">
            <div class="shadow-none p-3 mb-5 mt-2 rounded">
                <div class="container-fluid mt-5">
                    <div class="border border p-2 mb-2 border-opacity-25">
                        <div>
                            <h1 class="fs-2" style="text-align: center;"><b>Laporan Hasil Cluster</b></h1>
                        </div>
                        <div>
                            <p class="fs-2" style="text-align: justify;"><b>Nama petani :</b> {{$namapetani}}</p>
                            <p class="fs-4" style="text-align: justify;"><b>Cluster :</b> {{$petanicluster}}</p>
                        </div>
                        <div>
                            <p class="fs-2" style="text-align: justify;"><b>Keterangan :</b> Anda saat ini berada pada cluster satu</p>
                        </div>
                        <div style="text-align: center;">
                            <p class="fs-2" style="text-align: center;"><b>Laporan bibit, pupuk dan kabupaten</b></p>
                            <img src="{{ url('storage/images/bibit_pupuk_kabupaten.png') }}" class="img-fluid" alt="Responsive image" />
                        </div>
                        <div style="text-align: center;" class="mt-5">
                            <p class="fs-2" style="text-align: center;"><b>Laporan bibit panen lahan</b></p>
                            <img src="{{ url('storage/images/bibit_panen_lahan.png') }}" class="img-fluid" alt="Responsive image" />
                        </div>
                        <div style="text-align: center;" class="mt-5">
                            <p class="fs-2" style="text-align: center;"><b>laporan seed land area dan district</b></p>
                            <img src="{{ url('storage/images/seed_land_area.png') }}" class="img-fluid" alt="Responsive image" />
                        </div>
                        <div style="text-align: center;" class="mt-5">
                            <p class="fs-2" style="text-align: center;"><b>laporan seed land harvest district</b></p>
                            <img src="{{ url('storage/images/seed_land_harvest.png') }}" class="img-fluid" alt="Responsive image" />
                        </div>
                        <div style="text-align: center;" class="mt-5">
                            <p class="fs-2" style="text-align: center;"><b>laporan seed harvest kabupaten pupuk</b></p>
                            <img src="{{ url('storage/images/seed_harvest_kabupaten_pupuk.png') }}" class="img-fluid" alt="Responsive image" />
                        </div>
                        <div style="text-align: center;" class="mt-5">
                            <p class="fs-2" style="text-align: center;"><b>laporan distribusi penjualan -> harvest - district - sell to</b></p>
                            <img src="{{ url('storage/images/harvest _district _sell_to.png') }}" class="img-fluid" alt="Responsive image" />
                        </div>
                        <div class="d-grid gap-2 d-md-block mt-5" style="text-align: center;">
                            <a href="/home" type="button" class="btn btn-info">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

    </html>
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