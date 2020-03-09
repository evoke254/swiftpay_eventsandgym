@php
    $description = '"Here are our Best moments. Imagine yourself at the top of Africas tallest mountains, on an excursion to the deepest end of our very own Great Rift Valley, in a marathon, or even at a fitness boot camp. It doesnt get any better than this."';

    $title = "Hiking and Trekking - TipwaTipwa | Fitness Events in Kenya | Upcoming Hiking  and mountain climbing Events in Kenya, Tanzania, Uganda, Rwanda, Ethiopia. Join TipwaTipwa in our next hike to Kilimanaro, Mt Elgon, Mt Kenya, Naivasha hikes, Mt Longonot | Hike Mount Kenya, mountain climbing, triathlons kenya, mombasa, hike Kereita Cave and Waterfall, hiking events in kenya, Kenya trekking companies, trek, Ngong Hills hike. Hiking events Westlands, Lavington, Team Building Fitness";

    $keywords = "Hike Mount Kenya, mountain climbing, triathlons kenya, mombasa, hike Kereita Cave and Waterfall, hiking events in kenya, Kenya trekking companies, trek, Ngong Hills hike";
@endphp
@extends('layouts.app')
@section('content')
@include('partials.nav')
<div class="mt-5">d</div>
<div class="container-fluid mt-2" >
    <div class="container">
        <div class="row col-md-12 d-flex justify-content-center">
            <div class="col-md-10 text-center">    
                <h2 class="font-weight-bold text-center green-text">{{$category}}</h2>
                <!--
                <p><strong>Kevin, It's been a while since you've updated sections of your Profile. Take a few moments to make sure that it's all up to date.</strong></p>
            -->
            </div>
        </div>
    <div class="row p-0 m-0" id="test">
        @foreach ($files as $file)
            @php
                $path = explode('/', $file, 2);
                $path = end($path);
            @endphp
                <a class="view overlay col-lg-3 col-md-4 p-0 m-1" style="max-height: 180px !important" href="{{ asset('storage/'.$path) }}" data-download-url="false">
                    <img src="{{ asset('storage/'.$path) }}" class="img-fluid img-responsive" alt="">
                    <div class="mask flex-center rgba-black-strong">
                        <i class=" text-white h2 ion-ios-reverse-camera"></i>
                    </div>
                </a>
        @endforeach
    </div>
  </div>
</div>
<div class="mt-5"></div>
        @include('partials.footer')

        
@endsection
@section('scripts')
<script type="text/javascript">
    
        $(document).ready(function() {
            $(".img-fluid").addClass("wow fadeIn z-depth-1-half");

           $('#test').lightGallery({
                thumbnail: 'false',
                download: 'false',
                fullScreen: 'true',
                share: 'false'
            });
        });
</script>
         
@endsection
