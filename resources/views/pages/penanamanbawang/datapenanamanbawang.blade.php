@extends('layouts.app')
{{-- @include('layouts.navbars.navbar') --}}
@section('content')

<div class="container-fluid mt--7">
    <h2 class="text-center mb-4 mt-4" style="color: white;">Data Kegiatan Penanaman Bawang</h2>

    <!-- dev container untuk mengatur jarak tampilan -->
    <div class="container">
        <div class="mb-4 mt-6">
            <a href="/tambahdatapenanamanbawang" type="button" class="btn btn-success" style="float: right;">Tambah Data</a>
            <a href="/home" type="button" class="btn btn-primary">Kembali</a>
        </div>
        <div class="row">
            <table class="table table-bordered table-responsive">
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
                        <th scope="col" colspan="4">Edit Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $view) {
                        $verify = $currentuserid;
                        $dataKabupaten = "";
                        switch ($view->kabupaten) {
                            case 1:
                                $dataKabupaten = "Boyolali";
                                break;
                            case 2:
                                $dataKabupaten = "Brebes";
                                break;
                            case 3:
                                $dataKabupaten = "Demak";
                                break;
                            case 4:
                                $dataKabupaten = "Kendal";
                                break;
                            case 5:
                                $dataKabupaten = "Temanggung";
                                break;
                            case 6:
                                $dataKabupaten = "Kudus";
                                break;
                            case 7:
                                $dataKabupaten = "Pati";
                                break;
                            default:
                                $dataKabupaten = "belum ada data";
                        }
                        if ($view->id_user == $verify) {
                            $verifyPanen = $view->ks_panen;
                            echo "<tr>";
                            echo "<td colspan='4'>" . ($view->ks_metode_pengairan) . "</td>";
                            echo "<td colspan='4' >" . ($view->ks_modal) . "</td>";
                            echo "<td colspan='4'>" .  number_format($view->ks_luas_lahan, 0, ',', '.') . "</td>";
                            echo "<td colspan='4'>" . number_format($view->ks_bibit, 0, ',', '.') . "</td>";
                            echo "<td colspan='4'>" . ($view->ks_waktu_tanam) . "</td>";
                            echo "<td colspan='4'>" . ($view->ks_status_lahan) . "</td>";
                            echo "<td colspan='4'>" . number_format($view->ks_jumlah_modal, 0, ',', '.')  . "</td>";
                            echo "<td colspan='4'>" . $dataKabupaten . "</td>";
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