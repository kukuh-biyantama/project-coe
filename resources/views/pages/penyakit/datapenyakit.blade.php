@extends('layouts.app')
{{-- @include('layouts.navbars.navbar') --}}
@section('content')
    <div class="container-fluid mt--7">
        <h2 class="text-center mb-4 mt-4">Laporan Data Penyakit</h2>

        <!-- dev container untuk mengatur jarak tampilan -->
        <div class="container">
            <div class="mb-4 mt-5">
                <a href="/tambahdatapenyakit" type="button" class="btn btn-success" style="float: right;">Tambah Data</a>
                <a href="/home" type="button" class="btn btn-primary">Kembali</a>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Penyakit ID</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Nama Penyakit</th>
                            <th scope="col">Tanggal Terkena Penyakit</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sawah pak Ridho</td>
                            <td>Nama penyakit 1</td>
                            <td>12/12/2022 04:36 PM</td>
                            <td>Penyakit ini berbahaya</td>
                            <td>penyakit1.jpg</td>
                            <td>
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger delete">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
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
                // var penyakitid = $(this).attr('data-id');
                // var penyakitnama = $(this).attr('data-penyakit_nama');
                swal({
                        title: "Yakin?",
                        text: "Anda akan menghapus data penyakit dengan nama ...",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            // window.location = "/deletedatapenyakit/"+penyakitid+""
                            swal("Data penyakit berhasil dihapus", {
                                icon: "success",
                            });
                        } else {
                            swal("Data penyakit tidak jadi dihapus");
                        }
                    });
            });
        </script>

        <!-- script toastr untuk menampilkan notifikasi jika data telah berhasil dieksekusi -->
        <!-- <script>
            @if (Session::has('success'))
                toastr.success("{{ Session::get('success') }}")
            @endif
        </script> -->
    </div>
    @endsection

    <footer class="py-5 bg-gradient-primary">
    </footer>

    </html>
