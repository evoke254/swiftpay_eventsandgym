
@extends('layouts.app')
@section('content')

        @include('partials.nav')
        @include('partials.safaris')
        
@endsection
@section('scripts')
    <script src="{{ asset('js/kahaki/demo/dashboard.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
            Dashboard.init();
        });
    </script>
@endsection