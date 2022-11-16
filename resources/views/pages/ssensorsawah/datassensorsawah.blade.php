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

    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">


    <title>Data IOT</title>
  </head>
  <body>
    <h2 class="text-center mb-4 mt-4">Data Sensor Sawah (IoT)</h2>

        <!-- dev container untuk mengatur jarak tampilan -->
        <div class="container">
            <a href="/home" type="button" class="btn btn-primary mb-4">Kembali</a>

            <!-- Lokasi -->
            <!-- <div class="row">
                <div class="col-5 mb-4">
                    <label for="" class="form-label" style="font-weight: 500;">Lokasi</label>
                    <select class="form-select" name="" aria-label="Default select example">
                        <option selected disabled>Pilih</option>
                        <option value="1">Sawah pak Ridho</option>
                    </select>
                </div>
            </div> -->
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">IoT ID</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kecepatan Angin</th>
                            <th scope="col">Suhu Udara</th>
                            <th scope="col">Kelembapan Udara</th>
                            <th scope="col">Ph Tanah</th>
                            <th scope="col">Kelembapan Tanah</th>
                            <th scope="col">Suhu Tanah</th>
                            <th scope="col">Status alat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Brebes</td>
                            <td>40</td>
                            <td>28</td>
                            <td>109</td>
                            <td>7</td>
                            <td>109</td>
                            <td>49</td>
                            <td>Aktif</td>
                        </tr>
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
    $('.delete').click( function(){
        // var iotid = $(this).attr('data-id');
        // var iotnama = $(this).attr('data-iot_nama');
        swal({
            title: "Yakin?",
            text: "Anda akan menghapus data IoT dengan ID ...",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                // window.location = "/deletedataiot/"+iotid+""
                swal("Data IOT berhasil dihapus", {
                icon: "success",
                });
            } else {
                swal("Data IOT tidak jadi dihapus");
            }
        });
    });
  </script>

  <!-- script toastr untuk menampilkan notifikasi jika data telah berhasil dieksekusi -->
  <!-- <script>
    @if (Session::has('success'))
        toastr.success("{{Session::get('success')}}")
    @endif
  </script> -->
</html>