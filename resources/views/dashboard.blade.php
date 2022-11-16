@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 mb-4 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                                <h2 class="text-white mb-0">Harga Bawang</h2>
                            </div>
                            <div class="col">
                                <ul class="nav nav-pills justify-content-end">
                                    <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[20, 20, 25, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k">
                                        <a href="#" class="nav-link py-2 px-2 active" data-toggle="tab">
                                            <span class="d-none d-md-block">Bulan</span>
                                            <span class="d-md-none">M</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[15, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
                                        <a href="#" class="nav-link py-2 px-2" data-toggle="tab">
                                            <span class="d-none d-md-block">Minggu</span>
                                            <span class="d-md-none">W</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Chart -->
                        <div class="chart">
                            <!-- Chart wrapper -->
                            <canvas id="chart-sales" class="chart-canvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 mb-4">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Overview</h6>
                                <h2 class="mb-0">Prediksi Cuaca</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Chart -->
                        <div class="chart">
                            <canvas id="chart-orders" class="chart-canvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                                <h3 class="mb-0">Prediksi Panen</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Jenis</th>
                                    <th scope="col">Nilai</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        Bawang Merah
                                    </th>
                                    <td>
                                        123 Ton
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Bawang Merah
                                    </th>
                                    <td>
                                        65 Ton
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Bawang Merah
                                    </th>
                                    <td>
                                        88 Ton
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Bawang Merah
                                    </th>
                                    <td>
                                        8 Ton
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Bawang Merah
                                    </th>
                                    <td>
                                        70 Ton
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Bawang Merah
                                    </th>
                                    <td>
                                        90 Ton
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Bawang Merah
                                    </th>
                                    <td>
                                        90 Ton
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="card card-stats bg-primary mb-4 mb-xl-0 btn btn-secondary">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0 text-white text-center">Kapan Pupuk</h3>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon icon-shape text-white rounded-circle shadow">
                                <i class="fas fa-calendar" style="width 100px, height 100px" ></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h2 class="card-title text-uppercase text-white mb-0 wrap-text">14 November 2022</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="card card-stats bg-primary mb-4 mb-xl-0 btn btn-secondary">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0 text-white text-center">Kapan Pestisida</h3>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon icon-shape text-white rounded-circle shadow">
                                <i class="fas fa-calendar" style="width 100px, height 100px" ></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h2 class="card-title text-uppercase text-white mb-0 wrap-text">14 November 2022</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="card card-stats bg-primary mb-4 mb-xl-0 btn btn-secondary">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0 text-white text-center">Kapan Panen</h3>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon icon-shape text-white rounded-circle shadow">
                                <i class="fas fa-calendar" style="width 100px, height 100px" ></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h2 class="card-title text-uppercase text-white mb-0 wrap-text">14 November 2022</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 pt-2">
                <div class="card card-stats bg-primary mb-4 mb-xl-0 btn btn-secondary">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0 text-white text-center">Perkiraan Panen</h3>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon icon-shape text-white rounded-circle shadow">
                                <i class="fas fa-leaf" style="width 100px, height 100px" ></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h2 class="card-title text-uppercase text-white mb-0 wrap-text">100 TON</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 pt-2">
                <div class="card card-stats bg-primary mb-4 mb-xl-0 btn btn-secondary">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0 text-white text-center">Perkiraan Cuaca</h3>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col">
                                <h3 class="mb-0 text-white text-center">Suhu</h3>
                                <h2 class="card-title text-uppercase text-white mb-0 wrap-text">39
                                    <span>&#8451;</span>
                                </h2>
                            </div>
                            <div class="col">
                                <h3 class="mb-0 text-white text-center">Kelembapan</h3>
                                <h2 class="card-title text-uppercase text-white mb-0 wrap-text">109%</h2>
                            </div>
                            <div class="col">
                                <h3 class="mb-0 text-white text-center">Ph Tanah</h3>
                                <h2 class="card-title text-uppercase text-white mb-0 wrap-text">9
                                    <span>&#13271;</span>
                                </h2>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
