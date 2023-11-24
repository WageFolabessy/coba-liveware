<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GPIB SILOAM PONTIANAK</title>
    <link rel="shortcut icon" href="img/logo.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    @include('components.layouts.navbar')
    {{ $slot }}
    @include('components.layouts.footer')
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
