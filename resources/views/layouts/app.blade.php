<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Leadership Feedback</title>
        <link rel="shortcut icon" href="{{ url('/img/favicon.ico') }}" type="image/x-icon">
        <!-- Styles -->
        <link href="{{ url('/css/bundel.css')}}" rel="stylesheet">
    </head>
    <body id="app-layout">
        
        @include('layouts.nav')




        <!--[if lte IE 8]>
            <div class="alert alert-danger text-center col-md-4 col-md-offset-4" role="alert">
                <strong>Leider wird Internet Explorer 8 oder älter nicht unterstützt.</strong>
                <br>
                Bitte benutzen Sie einen aktuellen Browser.
            </div> 

            <style>
                .nav {
                    display: none;
                }
                .content-container {
                    display: none;
                }
            </style>
        <![endif]-->
        <noscript>
            <div class="alert alert-danger text-center col-md-4 col-md-offset-4" role="alert">
                <strong>Bitte aktivieren Sie Javascript in Ihrem Browser.</strong>
                <br>
                <a href="https://wiki.selfhtml.org/wiki/JavaScript/Tutorials/JavaScript_aktivieren">Unter diesem Link finden Sie eine Anleitung, wie Sie JavaScript in Ihrem Browser aktivieren können.</a>
            </div> 
            <style>
                .nav {
                    display: none;
                }
                .content-container {
                    display: none;
                }
            </style>
        </noscript>
        
        <div class="content-container">
            @yield('content')
        </div>
        
        @include('layouts.footer')
        
        <script>
            window.app = window.app || {};     
            window.app.rootUrl = '{{url('/')}}';
               
        @if( !empty($status) && $status != '')
            window.app.statusNotify = {
                    type: '{{$status["type"]}}',
                    message: '{{$status["message"]}}'
            };
        @endif
        </script>

        <!-- JavaScripts -->
        <script src="{{ url('/js/app.js') }}"></script>
    </body>
</html>
