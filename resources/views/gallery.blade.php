@php
    $description = '"Here are our Best moments. Imagine yourself at the top of Africas tallest mountains, on an excursion to the deepest end of our very own Great Rift Valley, in a marathon, or even at a fitness boot camp. It doesnt get any better than this."';

    $title = "Hiking and Trekking - TipwaTipwa | Fitness Events in Kenya | Upcoming Hiking  and mountain climbing Events in Kenya, Tanzania, Uganda, Rwanda, Ethiopia. Join TipwaTipwa in our next hike to Kilimanaro, Mt Elgon, Mt Kenya, Naivasha hikes, Mt Longonot | Hike Mount Kenya, mountain climbing, triathlons kenya, mombasa, hike Kereita Cave and Waterfall, hiking events in kenya, Kenya trekking companies, trek, Ngong Hills hike. Hiking events Westlands, Lavington, Team Building Fitness";

    $keywords = "Hike Mount Kenya, mountain climbing, triathlons kenya, mombasa, hike Kereita Cave and Waterfall, hiking events in kenya, Kenya trekking companies, trek, Ngong Hills hike";
@endphp
@extends('layouts.app')
@section('content')
    @include('partials.nav')
    <div class="mt-5">d</div>
    <div class="container-fluid mt-2">
        <div class="row animated fadeInUp slower">
            @foreach($eventTitles as $eventTitle)           
            <div class="col-sm-4 col-md-4 p-0 m-0 view hoverable overlay zoom">
                <a href="/grid/{{$eventTitle}}">
                    <img class="img-fluid" src='{{ asset("images/$eventTitle/img.jpg") }}'>
                    <div class="mask flex-center rgba-green-light">
                        <p class="btn btn-md btn-success">
                            <strong>{{$eventTitle}}</strong>
                        </p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
        
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
@endsection