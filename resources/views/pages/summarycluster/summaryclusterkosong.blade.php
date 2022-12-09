

@extends('layouts.app')
{{-- @include('layouts.navbars.navbar') --}}
@section('content')

    <div class="container-fluid mt--7">
        <div class="shadow-none p-3 mb-5 bg-light rounded">
            <div class="container-fluid">
                <div class="border border p-2 mb-2 border-opacity-25">
                    <div>
                        <h1 class="fs-2" style="text-align: center;"><b>Laporan Hasil Cluster</b></h1>
                    </div>
                    <div>
                        <p class="fs-2" style="text-align: justify;"><b>Nama petani :</b> {{$namapetani}}</p>
                        <p class="fs-4" style="text-align: justify;"><b>Cluster :</b> {{$petanicluster}}</p>
                    </div>
                    <div>
                        <p class="fs-2" style="text-align: justify;"><b>Keterangan :</b> Anda saat ini berada pada cluster 0</p>
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
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </div>
@endsection

<footer>
</footer>
=======
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hasil cluster</title>
</head>

<body>
    <div class="shadow-none p-3 mb-5 bg-light rounded">
        <div class="container-fluid">
            <div class="border border p-2 mb-2 border-opacity-25">
                <div>
                    <h1 class="fs-2" style="text-align: center;"><b>Laporan Hasil Cluster</b></h1>
                </div>
                <div>
                    <p class="fs-2" style="text-align: justify;"><b>Nama petani :</b> {{$namapetani}}</p>
                    <p class="fs-4" style="text-align: justify;"><b>Cluster :</b> {{$petanicluster}}</p>
                </div>
                <div>
                    <p class="fs-2" style="text-align: justify;"><b>Keterangan :</b> Anda saat ini berada pada cluster 0</p>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

