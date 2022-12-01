<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan IoT sawah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    {{-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"> --}}
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js">
 
   </script>
    {{-- auto refresh 10 detik --}}
    <meta http-equiv="refresh" content="10" > 
    {{-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tanggal', 'Sales'],
          
          @foreach['{{ $item['waktu'] }}',  1000]
          
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    {{-- </script> --}}
</head>
<body>
    @foreach ($data as $item);
                     
                        <div class="col-lg-5 col-xl-4 col-xxl-6">
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-primary shadow">
                                        <div class="card-body">
                                            <p class="m-0">ID_IOT<br></p>
                                            <p class="text-white-100 small m-0">{{ $item['id_iot'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-success shadow">
                                        <div class="card-body">
                                            <p class="m-0">Alamat Sensor IoT<br></p>
                                            <p class="text-white-100 small m-0">{{ $item['alamat'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-success shadow">
                                        <div class="card-body">
                                            <p class="m-0">DATA KECEPATAN ANGIN<br></p>
                                            <p class="text-white-100 small m-0">{{ $item['datakecepatanangin'] }} KM/H</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-info shadow">
                                        <div class="card-body">
                                            <p class="m-0">DATA SUHU UDARA<br></p>
                                            <p class="text-white-100 small m-0">{{ $item['datasuhuudara'] }}<sup>C</sup></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-warning shadow">
                                        <div class="card-body">
                                            <p class="m-0">Data Kelembaban Udara<br></p>
                                            <p class="text-white-100 small m-0">{{ $item['datakelembabanudara'] }}<sup>C</sup></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-danger shadow">
                                        <div class="card-body">
                                            <p class="m-0">Data Ph Tanah<br></p>
                                            <p class="text-white-100 small m-0">{{ $item['dataphtanah'] }}p<sup>H</sup></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-secondary shadow">
                                        <div class="card-body">
                                            <p class="m-0">Data Kelembaban Tanah<br></p>
                                            <p class="text-white-100 small m-0">{{ $item['datakelembabantanah'] }}<sup>C</sup></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-warning shadow">
                                        <div class="card-body">
                                            <p class="m-0">Data Suhu Tanah<br></p>
                                            <p class="text-white-100 small m-0">{{ $item['datasuhutanah'] }}<sup>C</sup></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-success shadow">
                                        <div class="card-body">
                                            <p class="m-0">Status Alat<br></p>
                                            @if($item['statusalat'] == [1]){
                                                <p class="text-white-100 small m-0">Mati</p>

                                            }else{
                                                <p class="text-white-100 small m-0">Hidup</p>

                                            }
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-success shadow">
                                        <div class="card-body">
                                            <p class="m-0">Waktu<br></p>
                                            <p class="text-white-50 small m-0">{{ $item['waktu'] }}</p>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-success shadow">
                                        <div class="card-body">
                                            <p class="m-0">tanggal<br></p>
                                            <p class="text-white-50 small m-0">
                                            
                                            
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-3"><a href="/home"><button type="button" class="btn btn-primary">Kembali</button></a></div>
            </div>
            @endforeach
            <div id="curve_chart" style="width: 900px; height: 500px"></div>

   
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>
</html>

