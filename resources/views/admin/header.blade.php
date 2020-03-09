<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TT') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('css/tempus.css') }}" id="theme" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" id="theme" rel="stylesheet">
    <link href="{{ asset('css/fullcalendar.css') }}" id="theme" rel="stylesheet">
    <link href="{{ asset('css/ionicons/dist/css/ionicons.min.css') }}" rel="stylesheet">

    <script src="{{ asset('js/kahaki/pace.js') }}"></script>
</head>

