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
</head>
<body>
    
<div class="container-fluid">   
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
				Laporan Iot Sensor sawah
			</h3>
		</div>
	</div>
    @foreach ($data as $item);
	<div class="row">
		<div class="col-md-6">
			<h3>
				ID_IOT
			</h3>
			<div class="row">
				<div class="col-md-6">
					<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
				</div>
				<div class="col-md-6">
					<h3>
						{{ $item['id_iot'] }}
					</h3>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<h3>
				Alamat
			</h3>
			<div class="row">
				<div class="col-md-6">
					<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
				</div>
				<div class="col-md-6">
					<h3>
						{{-- {{ $item['Alamat'] }} --}}
					</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<h3>
				DATA KECEPATAN ANGIN
			</h3>
			<div class="row">
				<div class="col-md-6">
					<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" class="rounded-circle" />
				</div>
				<div class="col-md-6">
					<h3>
						{{ $item['datakecepatanangin'] }}
					</h3>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<h3>
				DATA SUHU UDARA
			</h3>
			<div class="row">
				<div class="col-md-6">
					<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" class="rounded-circle" />
				</div>
				<div class="col-md-6">
					<h3>
						{{ $item['datasuhuudara'] }}
					</h3>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<h3>
				Data Kelembaban Udara
			</h3>
			<div class="row">
				<div class="col-md-6">
					<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" class="rounded-circle" />
				</div>
				<div class="col-md-6">
					<h3>
						{{ $item['datakelembabantanah'] }}
					</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h3>
				Data Suhu Tanah
			</h3>
			<div class="row">
				<div class="col-md-6">
					<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
				</div>
				<div class="col-md-6">
					<h3>
						{{ $item['datasuhutanah'] }}
					</h3>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<h3>
				Status Alat
			</h3>
			<div class="row">
				<div class="col-md-6">
					<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
				</div>
				<div class="col-md-6">
					<h3>
						{{ $item['statusalat'] }}
					</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h3>
				Waktu
			</h3>
			<div class="row">
				<div class="col-md-6">
					<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
				</div>
				<div class="col-md-6">
					<h3>
						{{ $item['tanggal'] }}
					</h3>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<h3>
				Alamat
			</h3>
			<div class="row">
				<div class="col-md-6">
					<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
				</div>
				<div class="col-md-6">
					<h3>
						{{ $item['alamat'] }}
					</h3>
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach

</body>
</html>
