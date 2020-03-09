@php

	$description = '"Book Gym and Fitness classes Online.Check out upcomnig Kenya Mountain Excursions, Trail Hikes, Fitness Runs, and more ..."';

	$title = " Book Gym and Fitness classes online at Tipwatipwa Lavington, Westlands, Nairobi. Free Gym Classes. Premium workout center, Get fit at Tipwatipwa. Book classes online. Lavington online Gym. Spin and shred, Sculpt your body, Yoga, Pilattes, Kickboxing classes and more.  Mountain Climbing - TipwaTipwa | Hiking events Kenya | Best Hiking Groups in Kenya, Menengai crater hike, Naro moru hikes | fitness walks near me | Health Walks | Weight loss running Nairobi ";

	$keywords = "Kenya Mountain Excursions, Trail Hikes, Fitness Runs, , workout, spin cycle, Triathlons, Trainers, Best gym classes, dedicated gym trainers, Yoga in Westlands, Pilates in Lavington, Boot camp and circuits workouts. Nairobi Westlands and Lavinton Gym Sessions and classes, TipwaTipwa, Gym Workout Tips, Gym workout chart, gym exercises Kenya, Lavington gym schedule, Nairobi Gym workout plan, Weight Training for Women, Healthy workout schedule";
@endphp
@extends('layouts.app')
@section('content')
@include('partials.nav')
<div class="row" style="margin-top: 120px !important"></div>
@include('partials.home_schedule')
@include('partials.footer')
        
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
@endsection