<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}">

    <title>{{ config('app.name', 'TipwaTipwa') }} {{$title}}</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/kahaki.css') }}" id="theme" rel="stylesheet">

    <link href="{{ asset('css/blog/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog/style-responsive.min.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/theme.css') }}" id="theme" rel="stylesheet">
    <link href="{{ asset('css/ionicons/dist/css/ionicons.min.css') }}" rel="stylesheet">
    
    <script src="{{ asset('js/kahaki/pace.js') }}"></script>
    <script type="text/javascript"></script>
    <style type="text/css">
        scroll-behavior: smooth;
    </style>
</head>


<body data-spy="scroll" data-target="#header" data-offset="51">
    <div id="page-container" class="fade">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/kahaki/scrollMonitor.js') }}"></script>
    <script src="{{ asset('js/kahaki/jquery.paroller.js') }}"></script>
    <script src="{{ asset('js/kahaki/apps.min.js') }}"></script>

    @include('sweetalert::alert')
    @yield('scripts')
    <script>
        $(document).ready(function() {
            App.init();
            
            var hashURL = location.hash;
            if(hashURL != "" && hashURL.length > 1){
                $(window).scrollTop(0);
                smoothScrollTo(hashURL);
            }
         });

        function smoothScrollTo(anchor) {
            
                $('a[href^="#"]').bind('click', function(event){
                    var anchor = $(this).attr('href');
                    smoothScrollTo(anchor);
                    return false;
                });
              //  alert(anchor);
                var duration= 2000; //time (milliseconds) it takes to reach anchor point
                var targetY = $(anchor).offset().top;
                $("html, body").animate({
                    scrollTop : targetY
                }, duration);
            }



    </script>
</body>
</html>