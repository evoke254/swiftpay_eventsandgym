<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('admin.header')
<body data-spy="scroll" data-target="#header" data-offset="51">
    <div id="page-container" class="fade">
    <div class="page-wrapper chiller-theme toggled">
        @yield('content')
    </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/kahaki/scrollMonitor.js') }}"></script>
    <script src="{{ asset('js/kahaki/jquery.paroller.js') }}"></script>
    <script src="{{ asset('js/kahaki/apps.min.js') }}"></script>
     @include('sweetalert::alert')

     @yield('scripts')

</body>
</html>