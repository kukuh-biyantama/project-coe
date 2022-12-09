@extends('layouts.app')
{{-- @include('layouts.navbars.navbar') --}}
@section('content')

<div class="container-fluid mt--7">
    <h2 class="text-center mb-4 mt-4">Data Kegiatan Penanaman Bawang</h2>

    <!-- dev container untuk mengatur jarak tampilan -->
    <div class="container">
        <div class="mb-4 mt-5">
            <a href="/tambahdatapenanamanbawang" type="button" class="btn btn-success" style="float: right;">Tambah Data</a>
            <a href="/home" type="button" class="btn btn-primary">Kembali</a>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <!-- <th scope="col">Penanaman ID</th> -->
                        <!-- <th scope="col">Lokasi Keterangan</th> -->
                        <th scope="col" colspan="4">Metode Pengairan</th>
                        <th scope="col" colspan="4">Sumber Modal</th>
                        <th scope="col" colspan="4">Luas Lahan (m<sup>2</sup>)</th>
                        <th scope="col" colspan="4">Jumlah Bibit (kg)</th>
                        <th scope="col" colspan="4">Waktu Tanam</th>
                        <th scope="col" colspan="4">Status Lahan</th>
                        <th scope="col" colspan="4">Jumlah Modal (Rp)</th>
                        <th scope="col" colspan="4">Kabupaten</th>
                        <th scope="col" colspan="4">Alamat</th>
                        <th scope="col" colspan="4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $view) {
                        $verify = $currentuserid;
                        if ($view->id_user == $verify) {
                            $verifyPanen = $view->ks_panen;
                            echo "<tr>";
                            echo "<td colspan='4'>" . ($view->ks_metode_pengairan) . "</td>";
                            echo "<td colspan='4' >" . ($view->ks_modal) . "</td>";
                            echo "<td colspan='4'>" . ($view->ks_luas_lahan) . "</td>";
                            echo "<td colspan='4'>" . ($view->ks_bibit) . "</td>";
                            echo "<td colspan='4'>" . ($view->ks_waktu_tanam) . "</td>";
                            echo "<td colspan='4'>" . ($view->ks_status_lahan) . "</td>";
                            echo "<td colspan='4'>" . ($view->ks_jumlah_modal) . "</td>";
                            echo "<td colspan='4'>" . ($view->kabupaten) . "</td>";
                            echo "<td colspan='4'>" . "sawah" . " " . ($view->id_lokasisawah) . "</td>";
                            echo "<td colspan='4'>" .
                                "<a href='/tampildatapenanamanbawang/$view->id' class='btn btn-warning'>Edit</a>" .
                                "</td>";
                            echo "</tr>";
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