<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Data Lokasi Sawah</title>
</head>

<body>
    <h2 class="text-center mb-4 mt-4">Data Lokasi Sawah</h2>

    <!-- dev container untuk mengatur jarak tampilan -->
    <div class="container">
        <div class="mb-4 mt-5">
            <a href="/formtambahdatalokasisawah" type="button" class="btn btn-success" style="float: right;">Tambah Data</a>
            <a href="/home" type="button" class="btn btn-primary">Kembali</a>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID IoT</th>
                        <th scope="col">Lokasi Latitude</th>
                        <th scope="col">Lokasi Longitude</th>
                        <th scope="col">Kabupaten</th>
                        <th scope="col">Lokasi Keterangan</th>
                        <th scope="col">Edit Data</th>
                        <th scope="col">Hapus Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($user_data as $data) {
                        $verify = $currentuserid;
                        if ($data['user_id'] == $verify) {
                            $id = $data['id'];
                            echo "<tr>";
                            echo "<td>" . ($data['id_iot']) . "</td>";
                            echo "<td>" . ($data['lokasi_latitude']) . "</td>";
                            echo "<td>" . ($data['lokasi_longitude']) . "</td>";
                            echo "<td>" . ($data['kabupaten']) . "</td>";
                            echo "<td>" . ($data['lokasi_keterangan']) . "</td>";
                            echo "<td>" .
                                "<a href='/formeditdatalokasisawah/$id' class='btn btn-warning'>Edit</a>" .
                                "</td>";
                            echo "<td>" .
                                "<a href='/deletedatalokasisawah/$id' class='btn btn-warning'>Delete</a>" .
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- script jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- script sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- script toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

<!-- script untuk konfirmasi menghapus data -->
<script>
    $('.delete').click(function() {
        var lokasisawahid = $(this).attr('data-id');
        var lokasiket = $(this).attr('data-lokasi_keterangan');
        swal({
                title: "Yakin?",
                text: "Anda akan menghapus data lokasi " + lokasiket + " ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deletedatalokasisawah/" + lokasisawahid + ""
                    swal("Data lokasi sawah berhasil dihapus", {
                        icon: "success",
                    });
                } else {
                    swal("Data lokasi sawah tidak jadi dihapus");
                }
            });
    });
</script>

<!-- script toastr untuk menampilkan notifikasi jika data telah berhasil dieksekusi -->
<script>
    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}")
    @endif
</script>

</html>