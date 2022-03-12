<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Three29 | @yield('title')</title>
    <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body class="h-full bg-[#0E264C] bg-[#FFFFFF]">
    <div id="root h-full flex flex-col  h-screen">
        @yield('content')
    </div>
    @yield('js')
</body>
</html>
