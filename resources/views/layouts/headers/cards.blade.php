<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <style>
                .dot {
                    height: 50px;
                    width: 50px;
                    background-color: #5e72e4;
                    border-radius: 50%;
                    display: inline-block;
                }
            </style>
            <script>
                (function(d, s, id) {
                    if (d.getElementById(id)) {
                        if (window.__TOMORROW__) {
                            window.__TOMORROW__.renderWidget();
                        }
                        return;
                    }
                    const fjs = d.getElementsByTagName(s)[0];
                    const js = d.createElement(s);
                    js.id = id;
                    js.src = "https://www.tomorrow.io/v1/widget/sdk/sdk.bundle.min.js";

                    fjs.parentNode.insertBefore(js, fjs);
                })(document, 'script', 'tomorrow-sdk');
            </script>
            <?php
            // Construct the API endpoint URL
            $url = 'http://compute.dinus.ac.id:900/api/get/lokasi/' . ($data = Auth::user()->id);
            
            // Make the API request
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            curl_close($curl);
            
            // Decode the JSON response
            $data = json_decode($response, true);
            
            function tampilJSON($data)
            {
                foreach ($data as $item) {
                        echo $item['kab']['tommorow_code'];
                }
            }
            
            $hasilJSON = tampilJSON($data);
            
            ?>

            <div class="tomorrow" data-location-id="<?php echo $hasilJSON; ?>" data-language="ID" data-unit-system="METRIC"
                data-skin="light" data-widget-type="aqiPollen" style="padding-bottom:22px;position:relative;">
                <a href="https://www.tomorrow.io/weather/" rel="nofollow noopener noreferrer" target="_blank"
                    style="position: absolute; bottom: 0; transform: translateX(-50%); left: 50%;">
                </a>
            </div>
            {{-- <div class="container">
                    <div class="row">
                      <div class="col-4">.col-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
                      <div class="col-6">.col-6<br>Subsequent columns continue along the new line.</div>
                    </div>
                </div> --}}
            {{-- <div class="col-xl-4 col-lg-6 pt-2">
                    <div class="card card-stats bg-white mb-4 mb-xl-0 btn btn-secondary">
                        <div class="card-body pb-2">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0 text-black text-center">Sensor IoT</h3>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col">
                                    <h3 class="mb-0 text-black text-center">Suhu</h3>
                                    <h2 class="card-title text-uppercase text-black mb-0 wrap-text">39
                                        <span>&#8451;</span>
                                    </h2>
                                </div>
                                <div class="col">
                                    <h3 class="mb-0 text-black text-center">Kelembapan</h3>
                                    <h2 class="card-title text-uppercase text-black mb-0 wrap-text">109%</h2>
                                </div>
                                <div class="col">
                                    <h3 class="mb-0 text-black text-center">Ph Tanah</h3>
                                    <h2 class="card-title text-uppercase text-black mb-0 wrap-text">9
                                        <span>&#13271;</span>
                                    </h2>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="card card-stats mb-4 mb-xl-0 btn btn-secondary">
                            <a href="/datassensorsawah">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h2 class="card-title text-uppercase text-muted mb-0">IoT</h2>
                                        </div>
                                        <div class="col">
                                            <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                <i class="fas fa-thermometer-three-quarters"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> --}}
            <div class="row pt-2">
                <div class="container-xl-4 col-lg-4">
                    <div class="card card-stats mb-4 mb-xl-0 btn btn-secondary">
                        <a href="/datalokasisawah/">
                            <div class="card-body">
                                <div class="row">
                                    <h1 class="dot">1</h1>
                                    <div class="col">
                                        <h2 class="card-title text-uppercase text-muted mb-0">Lokasi</h2>
                                    </div>
                                    <div class="col">
                                        <div class="icon icon-shape bg-info text-black rounded-circle shadow">
                                            <i class="ni ni-square-pin"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="container-xl-8 col-lg-8">
                    <div class="card card-stats mb-2 mb-xl-0 btn btn-secondary">
                        <a href="/maps">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <!-- <h2 class="mb-0 text-sm  font-weight-bold">Lokasi, {{ auth()->user()->name }}</h2> -->
                                        <h2 class="mb-0 text-sm  font-weight-bold">Klik disini untuk melihat lokasi peta
                                            sawah Anda</h2>
                                    </div>
                                    {{-- <div class="col">
                                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                            <i class="fa fa-location-arrow"></i>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            {{-- </a> --}}
                    </div>
                </div>
                <div class="container-xl-4 col-lg-4 pt-2">
                    <div class="card card-stats bg-white mb-4 mb-xl-0 btn btn-secondary">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0 text-black text-center">Laporan Cuaca</h3>
                                </div>
                            </div>

                            <div class="row pt-4">
                                <div class="col">
                                    {{-- <h3 class="mb-0 text-black text-center">Suhu</h3>
                                    <h2 class="card-title text-uppercase text-black mb-0 wrap-text">#
                                        <span>&#8451;</span>
                                    </h2> --}}
                                </div>
                                <div class="col">
                                    {{-- <h3 class="mb-0 text-black text-center">Kelembapan</h3>
                                    <h2 class="card-title text-uppercase text-black mb-0 wrap-text">#</h2> --}}
                                </div>
                                <div class="col">
                                    {{-- <h3 class="mb-0 text-black text-center">Ph Tanah</h3>
                                    <h2 class="card-title text-uppercase text-black mb-0 wrap-text">#
                                        <span>&#13271;</span>
                                    </h2> --}}
                                </div>
                            </div>
                            {{-- @endforeach --}}
                            <div class="card card-stats mb-4 mb-xl-0 btn btn-secondary">
                                <a href="/datassensorsawah">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h2 class="card-title text-uppercase text-muted mb-0">IoT</h2>
                                            </div>
                                            <div class="col">
                                                <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                    <i class="fas fa-thermometer-three-quarters"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-stats mb-4 mb-xl-0 mt-2 btn btn-secondary">
                        <a href="/viewpenanamanbawang">
                            <div class="card-body">
                                <div class="row">
                                    <h1 class="dot">2</h1>
                                    <div class="col">
                                        <h2 class="card-title text-uppercase text-muted mb-4">Kegiatan Pertanian Bawang
                                        </h2>
                                    </div>
                                    <div class="col">
                                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                            <i class="fas fa-leaf"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="container-xl-4 col-lg-4 pt-2">
                    <div class="container-xl-4 row-lg-4">
                        <div class="card card-stats bg-white mb-4 mb-xl-0 btn btn-secondary">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <h1 class="dot">3</h1>
                                    <div class="col">
                                        <h3 class="mb-0 text-black text-center">Kapan Pestisida</h3>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="icon icon-shape text-black rounded-circle shadow">
                                        <i class="fas fa-calendar" style="width 100px, height 100px"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="card-title text-uppercase text-black mb-0 wrap-text">15 Januari 2023
                                        </h2>
                                    </div>
                                </div>
                                <div class="card card-stats mb-4 mb-xl-0 btn btn-secondary pt-2">
                                    <a href="/datapestisida/">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h2 class="card-title text-uppercase text-muted mb-2">Laporan
                                                        Pestisida</h2>
                                                </div>
                                                {{-- <div class="col">
                                                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                        <i class="ni ni-atom"></i>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-xl-4 row-lg-4 mt-2">
                        <div class="card card-stats bg-white mb-4 mb-xl-0 btn btn-secondary">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <h1 class="dot">4</h1>
                                    <div class="col">
                                        <h3 class="mb-0 text-black text-center">Kapan Pupuk</h3>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="icon icon-shape text-black rounded-circle shadow">
                                        <i class="fas fa-calendar" style="width 100px, height 100px"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="card-title text-uppercase text-black mb-0 wrap-text">10 Januari 2023
                                        </h2>
                                    </div>
                                </div>
                                <div class="card card-stats mb-4 mb-xl-0 btn btn-secondary text-balck pt-2">
                                    <a href="/datapupuk/">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h2 class="card-title text-uppercase text-muted mb-0">Laporan Pupuk
                                                    </h2>
                                                </div>
                                                {{-- <div class="col">
                                                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                        <i class="fas fa-tree"></i>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-stats bg-white mb-4 mb-xl-0 mt-2 btn btn-secondary">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <h1 class="dot">5</h1>
                                <div class="col">
                                    <h3 class="mb-0 text-black text-center">Perkiraan Hasil Panen</h3>
                                </div>
                            </div>
                            <div class="col">
                                <div class="icon icon-shape text-black rounded-circle shadow">
                                    <i class="ni ni-basket" style="width 100px, height 100px"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h2 class="card-title text-uppercase text-black mb-0 wrap-text">2 Ton</h2>
                                </div>
                            </div>
                            <div class="card card-stats mb-4 mb-xl-0 btn btn-secondary">
                                <a href="/datapanen/">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h2 class="card-title text-uppercase text-muted mb-0">Masukan Hasil
                                                    Panen</h2>
                                            </div>
                                            {{-- <div class="col">
                                                <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                    <i class="ni ni-basket"></i>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-xl-4 col-lg-4 pt-2">
                    <div class="card card-stats bg-white mb-4 mb-xl-0 btn btn-secondary">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h2 class="mb-0 text-black text-center">Saat ini Anda Berada Di Cluster</h2>
                                    <h2 class="mb-0 text-black text-center"> {{ $petanicluster }}</h2>
                                    <h2 class="mb-0 text-black text-center">Petani {{ $namapetani }}</h2>
                                </div>
                            </div>
                            {{-- <div class="col">
                                <div class="icon icon-shape text-black rounded-circle shadow">
                                    <i class="fas fa-calendar" style="width 100px, height 100px" ></i>
                                </div>
                            </div> --}}
                            {{-- <div class="row">
                                <div class="col">
                                    <h2 class="card-title text-uppercase text-black mb-0 wrap-text">14 November 2022</h2>
                                </div>
                            </div> --}}
                            <div class="card card-stats mb-0 mb-xl-0 btn btn-secondary">
                                <a href="/summarycluster/">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h2 class="card-title text-uppercase text-muted mb-0">Lihat Laporan
                                                </h2>
                                            </div>
                                            {{-- <div class="col">
                                                <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                    <i class="fas fa-snowflake"></i>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="container-xl-4 row-lg-4 pt-2">
                        <div class="card card-stats mb-4 mb-xl-0 btn btn-secondary">
                            <a href="/clusterpetani/">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h2 class="card-title text-uppercase text-muted mb-0">Cluster Petani</h2>
                                        </div>
                                        <div class="col">
                                            <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                <i class="fas fa-snowflake"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> --}}
                    <div class="card card-stats mb-0 mb-xl-0 mt-2 btn btn-secondary">
                        <a href="/riwayatpanen">
                            <div class="card-body">
                                <div class="row">
                                    <h1 class="dot">6</h1>
                                    <div class="col">
                                        <h2 class="card-title text-uppercase text-muted mb-0">Riwayat Penanaman Bawang
                                        </h2>
                                    </div>
                                    <div class="col mt-2">
                                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                            <i class="fa fa-history"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card card-stats mb-0 mb-xl-0 mt-2 btn btn-secondary">
                        <a href="{{ url('datapenyakit') }}">
                            <div class="card-body">
                                <div class="row">
                                    <h1 class="dot">?</h1>
                                    <div class="col">
                                        <h2 class="card-title text-uppercase text-muted mb-0">Penyakit Penanaman Bawang
                                        </h2>
                                    </div>
                                    <div class="col mt-2">
                                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                            <i class="fa fa-history"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0 btn btn-secondary">
                        <a href="/datapupuk/">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="card-title text-uppercase text-muted mb-0">Pupuk</h2>
                                    </div>
                                    <div class="col">
                                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                            <i class="fas fa-tree"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 row-lg-6 pt-2 ml-10">
                    <div class="card card-stats mb-4 mb-xl-0 btn btn-secondary">
                        <a href="/datapestisida/">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="card-title text-uppercase text-muted mb-0">Pestisida</h2>
                                    </div>
                                    <div class="col">
                                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                            <i class="ni ni-atom"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 pt-2">
                    <div class="card card-stats mb-4 mb-xl-0 btn btn-secondary">
                        <a href="/datapanen/">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="card-title text-uppercase text-muted mb-0">Panen</h2>
                                    </div>
                                    <div class="col">
                                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                            <i class="ni ni-basket"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> --}}
                {{-- <div class="col-xl-3 col-lg-6 pt-2">
                    <div class="card card-stats mb-4 mb-xl-0 btn btn-secondary">
                        <a href="/datahama/">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="card-title text-uppercase text-muted mb-0">Hama</h2>
                                    </div>
                                    <div class="col">
                                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                            <i class="fas fa-bug"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 pt-2">
                    <div class="card card-stats mb-4 mb-xl-0 btn btn-secondary">
                        <a href="/datapenyakit/">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="card-title text-uppercase text-muted mb-0">Penyakit</h2>
                                    </div>
                                    <div class="col">
                                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                            <i class="fas fa-snowflake"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 pt-2">
                    <div class="card card-stats mb-4 mb-xl-0 btn btn-secondary">
                        <a href="/summarycluster/">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="card-title text-uppercase text-muted mb-0">Summary Cluster</h2>
                                    </div>
                                    <div class="col">
                                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                            <i class="fas fa-snowflake"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
