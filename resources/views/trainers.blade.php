@php
    $description = " 'With Our team of proffesionals trainers, what seems impossible today will be your warm up soon.'";

    $year = date("Y");

    $title = "Professional gym Trainers in Lavington and Westlands Nairobi ".$year. " | Best Gym in Nairobi Lavington | Certified gym trainers, Yoga, Strength and TRX trainers in Kenya | Spin trainers. Yoga Trainers Kenya. Best Gym Trainers in Kenya. Best Gym instructors in Lavington,  and Westlands";
    $keywords = "Yoga Trainers, Nairobi Spin trainers, Gym Trainers Kenya, Nairobi Proffesional Gym Trainers";
@endphp
@extends('layouts.app')
@section('content')

        @include('partials.nav')
<div style="margin-top: 100px">
        <div class="container " data-animation="true" data-animation-type="fadeInUp">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 text-center">
                <h2>Our Team</h2>
                <p>Meet your next trainer. </p>
            </div>
        </div>
            <div class="row d-flex justify-content-center">
                @foreach ($trainers as $trainer)
              <div class="col-md-3 mb-4">
                <div class="card card-cascade narrower mb-1 ">
                  <div class="view view-cascade text-center">             
                    <img style="max-height: 350px; object-fit: cover !important;" src="{{ asset($trainer->image) }}" class="card-img-top">
                    
                  </div>
                  <div class="card-body card-body-cascade text-center">
                    <h4 class="text-center text-green">{{$trainer->fname}}</h4>
                    <h5 class="text-center">{{ $trainer->category }}</h5>
                    <p class="card-text">{{ $trainer->description }}</p>
                    <hr>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
    </div>
</div>
@include('partials.footer')
        
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