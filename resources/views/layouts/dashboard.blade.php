<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="<?php echo asset('css/dashboard.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/login.css') ?>" type="text/css">
</head>

<body>
    <div class="container">
        <div class="content">
            @yield('content')
        </div>
</body>

</html>