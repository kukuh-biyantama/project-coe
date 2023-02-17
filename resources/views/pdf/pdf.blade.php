<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bill</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <style type="text/css" media="all">
        body {
            font-family: "Roboto", serif;
            font-size: 0.7rem;
            font-weight: 400;
            line-height: 1.4;
            color: #000000;
        }

        .table {
            color: #000;
        }

        .table td,
        .table th {
            border-top: 1px solid #000;
            border-bottom: 1px solid #000;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #000;
        }

        .small-heading {
            font-size: 0.8rem;
            border: groove;
        }

        #sign {
            position: relative;
            min-height: 150px;
        }

        #sign-content {
            position: absolute;
            bottom: 0;
        }

        #thankyou {
            position: absolute;
            bottom: 0;
            right: 0;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container-fluid pt-2" style="border:1px solid black;">
        <!-- Invoice heading -->
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <td class="border-0">
                        <div class="row">
                            <div class="col text-center text-left mb-3">
                                <h4 class="mb-1">Daftar Panen</h4>
                            </div>
                            <div class="col-md text-center mb-3 mb-md-0" style="min-width: 50%">
                                <h4 class="mb-1">Petani Bawang Merah</h4>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col">
                <div class="table-responsive-xl" style="min-height: 500px">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tanggal Tanam<br>
                                    @foreach($data as $row)
                                    {{ $row->ks_waktu_tanam }}
                                    @endforeach
                                </th>
                                <th></th>
                                <th></th>
                                <th>kabupaten<br>
                                    <?php
                                    foreach ($data as $view) {
                                        $dataKabupaten = "";
                                        switch ($view->kabupaten) {
                                            case 1:
                                                $dataKabupaten = "Boyolali";
                                                break;
                                            case 4:
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
                                        echo $dataKabupaten;
                                    }
                                    ?>
                                </th>
                                <th></th>
                                <th>Sawah ke :<br>
                                    @foreach($data as $row)
                                    {{ $row->id_lokasisawah }}
                                    @endforeach
                                </th>
                                <th></th>
                                <th>Tanggal Panen<br>
                                    @foreach($data as $row)
                                    {{ $row->panen_tanggal }}
                                    @endforeach
                                </th>
                            </tr>
                        </thead>
                    </table>
                    <div class="w-100"></div>
                    <h4 class="mb-1" style="text-align: center;">Identitas Petani</h4>
                    <table border="1">
                        <thead>
                            <tr>
                                <th colspan="4">Nama</th>
                                <th colspan="4">Sumber Modal</th>
                                <th colspan="4">Jumlah Modal (Rp)</th>
                                <th colspan="4">Luas Lahan </th>
                                <th colspan="4">Jumlah Bibit (kg)</th>
                                <th colspan="4">Status Lahan</th>
                                <th colspan="4">Kondisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                            <tr>
                                <td colspan="4">{{ $row->namapetani }}</td>
                                <td colspan="4">{{ $row->ks_modal }}</td>
                                <td colspan="4">{{ $row->ks_jumlah_modal }}</td>
                                <td colspan="4">{{ $row->ks_luas_lahan }}</td>
                                <td colspan="4">{{ $row->ks_bibit }}</td>
                                <td colspan="4">{{ $row->ks_status_lahan }}</td>
                                <td colspan="4">sudah panen</td>";
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>