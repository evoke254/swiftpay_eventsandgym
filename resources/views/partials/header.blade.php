<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139628213-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-139628213-1');
    </script>

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
    <link href="{{ asset('css/theme.css') }}" id="theme" rel="stylesheet">
    <link href="{{ asset('css/kahaki.css') }}" id="theme" rel="stylesheet">
    <link href="{{ asset('css/ionicons/dist/css/ionicons.min.css') }}" rel="stylesheet">
    
    <script src="{{ asset('js/kahaki/pace.js') }}"></script>
    <script type="text/javascript"></script>
    <style type="text/css">
        scroll-behavior: smooth;
    </style>
</head>

