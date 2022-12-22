<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard ERS') }}</title>
    <!-- Favicon -->
    <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Extra details for Live View on GitHub Pages -->

    <!-- Icons -->
    <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
    <link rel="stylesheet" href="toruskit.bundle.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

</head>

<body class="{{ $class ?? '' }}">
    @auth()
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @include('layouts.navbars.sidebar')
    @endauth

    <div class="main-content">
        @include('layouts.navbars.navbar')
        @yield('content')
    </div>

    @guest()
    @endguest

    <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    @stack('js')

    <!-- Argon JS -->
    <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
    <script language="JavaScript" type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    {{-- <script src="{{ asset('style/template/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script> --}}

</body>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
<div>
    <script>
        $(document).ready(function(){
        
         $('#id_penebas').keyup(function(){ 
                var query = $(this).val();
                if(query != '')
                {
                 var _token = $('input[name="_token"]').val();
                 $.ajax({
                  url:"{{ route('autocomplete.fetch') }}",
                  method:"POST",
                  data:{query:query, _token:_token},
                  success:function(data){
                   $('#penebas_list').fadeIn();  
                            $('#penebas_list').html(data);
                  }
                 });
                }
            });
        
            $(document).on('click', 'li', function(){  
                $('#name').val($(this).text());  
                $('#penebas_list').fadeOut();  
            });  
        
        });
        </script>

</html>
<footer>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    {{-- @include('layouts.footers.auth') --}}
</footer>
</div>