<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Kerjoo') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset("asset/bootstrap.min.css") }}">

    <!-- Scripts -->
    <script src="{{ asset('asset/bootstrap.bundle.min.js') }}"></script>
</head>
<body>
    <div class="content-body">
        @yield('content')
    </div>
</body>
</html>
