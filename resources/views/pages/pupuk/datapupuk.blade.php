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
    <div class="container-fluid table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Lokasi Sawah</th>
                    <th scope="col">Tanggal Rabuk Pupuk</th>
                    <th scope="col">Jenis Pupuk</th>
                    <th scope="col">Merk Pupuk</th>
                    <th scope="col">Jumlah Takaran Pupuk</th>
                    <th scope="col">Keterangan Kegiatan</th>
                    <th scope="col">Ubah Data</th>
                    <th scope="col">Hapus Data</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $row) {
                    echo "<tr>";
                    echo "<td>" . "Sawah ke" . " " . ($row->id_lokasisawah) . "</td>";
                    echo "<td>" . \Carbon\Carbon::parse($row->ks_pupuk_tgl_rabuk)->translatedFormat('l, d F Y') . "</td>";
                    echo "<td>" . $row->jenispupuk_nama . "</td>";
                    echo "<td>" . $row->merkpupuk_nama  . "</td>";
                    echo "<td>" . $row->ks_pupuk_jumlah_takaran . " kg </td>";
                    echo "<td>" . $row->ks_pupuk_keterangan . "</td>";
                    echo "<td>" .
                        "<a href='/tampildatapupuk/$row->id' class='btn btn-primary'>Edit</a>" .
                        "</td>";
                    echo "<td>" .
                        "<a href='/deletepupuk/$row->id' class='btn btn-warning'>Delete</a>" .
                        "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
@endsection
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<!-- script jquery cdn -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- script sweetalert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- script toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- @if(Session::has('success'))
toastr.success("{{Session::get('success')}}")
@endif -->
</script>

<footer class="py-5 bg-gradient-primary">
</footer>
<!-- <script>
    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}")
    @endif
</script> -->

</html>