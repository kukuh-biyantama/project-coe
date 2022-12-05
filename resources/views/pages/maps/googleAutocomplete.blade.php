<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How to Add Google Map in Laravel? - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
            height: 400px;
        }
    </style>
</head>

<body>
    <div style="text-align: center;">
        <p class="text-capitalize">CapiTaliZed text.</p>
        <h2 class="text-capitalize">Lokasi Petani {{$alamatPetani}}</h2>
        <h2>IOT {{$namaiot}}</h2>
        <div id="map"></div>
    </div>

    <script type="text/javascript">
        function initMap() {
            let latitude = <?php echo json_decode($latitude); ?>;
            let longitude = <?php echo json_decode($longitude); ?>;
            const myLatLng = {
                lat: latitude,
                lng: longitude
            };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: myLatLng,
            });

            new google.maps.Marker({
                position: myLatLng,
                map,
                title: "Hello Rajkot!",
            });
        }

        window.initMap = initMap;
    </script>

    <div class="d-grid gap-2 d-md-block mt-5" style="text-align: center;">
        <a href="/home" type="button" class="btn btn-info">Kembali</a>
    </div>

    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>
</body>

</html>