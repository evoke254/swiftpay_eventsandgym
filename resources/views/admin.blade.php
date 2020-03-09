@extends('admin.app')
@section('content')

        @include('admin.nav')
        
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