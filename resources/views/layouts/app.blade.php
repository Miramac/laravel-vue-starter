<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" id="csrf-token">
    <meta name="authenticated" content="{{ (Auth::check()) ? 1 : 0 }}">
    <title>Laravel</title>

    <!-- Styles -->
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
    
</head>
<body id="app">
    <div id="app-nav">
        @include('layouts.nav')
    </div>
    <div id="app-body">
        @yield('content')
    </div>
    <div id="app-footer">
        @include('layouts.footer')
    </div>
    <!-- JavaScripts -->
    <script src="{{ url('/js/app.js') }}"></script>
</body>
</html>
