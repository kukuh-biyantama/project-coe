@extends('layouts.app')
{{-- @include('layouts.navbars.navbar') --}}
@section('content')
    <div class="container-fluid mt--7">
        <h2 class="text-center mb-4 mt-4" style="color: white;">Data Pupuk</h2>

        <!-- dev container untuk mengatur jarak tampilan -->
        <div class="mb-5 mt-7">
            <a href="/tambahdatapupuk" type="button" class="btn btn-success" style="float: right;">Tambah Data</a>
            <a href="/home" type="button" class="btn btn-primary">Kembali</a>
        </div>
        <script>
            @if (session('status'))
                <
                div class = "alert alert-success" >
                    {{ session('status') }} <
                    /div>
            @endif
        </script>

        <div class="container-fluid">
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Lokasi Sawah</th>
                        <th scope="col">Tanggal Rabuk Pupuk</th>

                        <th scope="col">Jenis Pupuk</th>
                        <th scope="col">Sumber Pupuk Organik</th>
                        <th scope="col">Sumber Pupuk Anorganik</th>
                        <th scope="col">Merk Pupuk</th>
                        <th scope="col">Jumlah Takaran Pupuk (kg)</th>
                        <th scope="col">Keterangan Kegiatan</th>
                        <th scope="col">Ubah Data</th>
                        <th scope="col">Hapus Data</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $row->id_lokasisawah }}</td>
                            <td>{{ $row->ks_pupuk_tgl_rabuk }}</td>
                            <td>{{ $row->ks_pupuk_tgl_rabuk }}</td>

                            <td>{{ $row->ks_pupuk_jenis }}</td>
                            <td>{{ $row->ks_pupuk_sumber_organik }}</td>
                            <td>{{ $row->ks_pupuk_sumber_anorganik }}</td>
                            <td>{{ $row->ks_pupuk_merk }}</td>
                            <td>{{ $row->ks_pupuk_jumlah_takaran }}</td>
                            <td>{{ $row->ks_pupuk_keterangan }}</td>
                            <td>
                                <a href="/tampildatapupuk{{ $row->id }}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <a href="/tampildatapupuk/{{ $row->id }}" class="btn btn-warning">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->


        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
            </script>
            -->

        <!-- script toastr untuk menampilkan notifikasi jika data telah berhasil dieksekusi -->

    </div>
@endsection
</body>
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

</html>
