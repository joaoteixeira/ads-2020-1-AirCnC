<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <title>@yield('title')</title>
</head>

<body>
    @yield('content')
    <img src="https://raw.githubusercontent.com/joaoteixeira/ads-2020-1-AirCnC/inicialconfig/assets/AirCnC-Logo.png" alt="aircnc-logo" width="100">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.5.1.slim.min.js') }}"> </script>
    <script src="{{ asset('js/popper.min.js') }}"> </script>
    <script src="{{ asset('js/bootstrap.min.js') }}"> </script>
</body>

</html>