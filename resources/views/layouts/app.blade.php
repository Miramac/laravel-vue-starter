<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
    
</head>
<body id="app">
    <div id="app-nav">
        @include('layouts.nav')
    </div>
    <div>
        @yield('content')
    </div>
    <!-- JavaScripts -->
    <script src="{{ url('/js/app.js') }}"></script>
</body>
</html>
