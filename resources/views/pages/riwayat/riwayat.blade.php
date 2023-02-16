@extends('layouts.app')
{{-- @include('layouts.navbars.navbar') --}}
@section('content')

<div class="container-fluid mt--7">
    <h2 class="text-center mb-4 mt-4" style="color: white">History Panen</h2>

    <!-- dev container untuk mengatur jarak tampilan -->
    <div class="container-fluid">
        <div class="mb-4 mt-6">
            <a href="/home" type="button" class="btn btn-primary">Kembali</a>
        </div>
        <div class="row table-responsive">
            <table class="table table-bordered" id="table">
                <thead>
                    <tr>
                        <!-- <th scope="col">Penanaman ID</th> -->
                        <!-- <th scope="col">Lokasi Keterangan</th> -->
                        <th>Tanggal panen</th>
                        <th>Metode Pengairan</th>
                        <th>Sumber Modal</th>
                        <th>Luas Lahan (m<sup>2</sup>)</th>
                        <th>Jumlah Bibit (kg)</th>
                        <th>Waktu Tanam</th>
                        <th>Status Lahan</th>
                        <th>Jumlah Modal (Rp)</th>
                        <th>Kabupaten</th>
                        <th>Alamat</th>
                        <th>Kondisi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $view) {
                        $verify = $currentuserid;
                        if ($view->id_user == $verify) {
                            // $verifyPanen = $view->ks_panen;
                            echo "<tr>";
                            echo "<td>" . ($view->panen_tanggal) . "</td>";
                            echo "<td>" . ($view->ks_metode_pengairan) . "</td>";
                            echo "<td>" . ($view->ks_modal) . "</td>";
                            echo "<td>" . number_format($view->ks_luas_lahan, 0, ',', '.')  . "</td>";
                            echo "<td>" . number_format($view->ks_bibit, 0, ',', '.')  . "</td>";
                            echo "<td>" . ($view->ks_waktu_tanam) . "</td>";
                            echo "<td>" . ($view->ks_status_lahan) . "</td>";
                            echo "<td>" . number_format($view->ks_jumlah_modal, 0, ',', '.')  . "</td>";
                            echo "<td>" . ($view->kabupaten) . "</td>";
                            echo "<td>" . "sawah" . " " . ($view->id_lokasisawah) . "</td>";
                            echo "<td>" . "Sudah Panen" . "</td>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha484-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- script jquery cdn -->
    <script src="https://code.jquery.com/jquery-4.6.0.min.js" integrity="sha256-/xUj+4OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- script sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- script toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH4jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- </body> --}}


</div>
@endsection

<footer class="py-5 bg-gradient-primary">
</footer>