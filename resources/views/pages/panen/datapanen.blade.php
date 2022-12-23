@extends('layouts.app')
{{-- @include('layouts.navbars.navbar') --}}
@section('content')
<div class="container-fluid mt--7">

    <h2 class="text-center mb-4 mt-4" style="color: white;">Laporan Data Panen</h2>

    <!-- dev container untuk mengatur jarak tampilan -->
    <div class="container">
        <div class="mb-4 mt-6">
            <!-- <a href="/formtambahdatapanen" type="button" class="btn btn-success" style="float: right;">Tambah Data</a> -->
            <a href="/home" type="button" class="btn btn-primary">Kembali</a>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Kabupaten</th>
                        <th scope="col">Lokasi sawah</th>
                        <th scope="col">Waktu tanam</th>
                        <th scope="col">Konfirmasi panen</th>
                        <th scope="col">Masukkan Hasil Panen</th>
                        <th scope="col">Hapus Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($users as $row) {
                        $dataPanen = $row->ks_panen;
                        $idSawah = $row->id;
                        echo "<tr>";
                        echo "<td>" . ($row->kabupaten) . "</td>";
                        echo "<td>" . "sawah " . ($row->id_lokasisawah) . "</td>";
                        echo "<td>" . ($row->ks_waktu_tanam) . "</td>";
                        if ($dataPanen == 0) {
                            echo "<td>" .
                                "<form id='formverify' action='/verifypetani' method='post' enctype='multipart/form-data'>" . @csrf_field() .
                                "<input type='hidden' id='idSawahpetani' value=$idSawah name='idSawahpetani'>" .
                                "<input type='checkbox' id='verify-checkbox' value=1 name='verify-checkbox' onclick='isChecked()' >" .
                                "<p id='message'>Belum panen</p>" .
                                "</form>" .
                                "</td>";
                        } else {
                            echo "<td>" .
                                "<input type='checkbox' id='verify-checkbox'  onclick='isChecked()' checked disabled/>" .
                                "<p id='message'>panen</p>" .
                                "</td>";
                        }
                        echo "<td>" .
                            "<a href='/formtambahdatapanen/$row->id' class='btn btn-success' id='submit_panen' onclick='isSubmit()' >Hasil Panen</a>" .
                            "</td>";
                        echo "<td>" .
                            "<a href='/deletedatapanen/$row->id' class='btn btn-danger'>Hapus</a>" .
                            "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    @endsection
    <script src="/assets/js/verifypanen.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- script jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- script sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- script toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
-->
    </body>
    <!-- script untuk konfirmasi menghapus data -->
    <script>
        $('.delete').click(function() {
            // var panenid = $(this).attr('data-id');
            // var panennama = $(this).attr('data-panen_nama');
            swal({
                    title: "Yakin?",
                    text: "Anda akan menghapus data panen dengan nama ...",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        // window.location = "/deletedatapanen/"+panenid+""
                        swal("Data panen berhasil dihapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data panen tidak jadi dihapus");
                    }
                });
        });
    </script>
    <script>

    </script>

    <!-- script toastr untuk menampilkan notifikasi jika data telah berhasil dieksekusi -->
    <!-- <script>
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif
</script> -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- script jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- script sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- script toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</div>

<footer class="py-5 bg-gradient-primary">
</footer>