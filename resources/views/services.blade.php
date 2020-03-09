@php
  $description = '"Book a class or talk to us. For Fitness services and Team Building in Lavington, Kilimani, "';

  $year = date("Y");

  $title = "Contact TipwaTipwa Fitness Studio at Lavington Green for all fitness classes; Yoga, Pilates, Sculpt, Spin, High Intensity Training, Cardio, aerobic classes, unaerobix exercises, TRX raining in Lavington, Kileleshwa, Kilimani, Hurlingham, Jamuhuri, in ".$year. " | Book affordable fitness classes in Nairobi Parklands, Kilimani, Valley Arcade, Amboseli Lavington, James Gichuru Road Gym and Fitness Center.  Lavington Gym, TipwaTipwa Best fitness studio, Hiking events, Holistic fitness, | Yoga in Lavington, Spin in Lavington, Kickboxing in Westlands";

  $keywords = "Book fitness class, Lavington Gym, TipwaTipwa fitness studio, Hiking events, Holistic fitness ";

@endphp
@extends('layouts.app')
@section('content')

        @include('partials.nav')
<div style="margin-top: 100px">
        <div class="container " data-animation="true" data-animation-type="fadeInUp">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 text-center mb-4">
                <h2>Holistic Fitness</h2>
                <p>Our classes are available on two plans; a pay as you go plan that suits frequent trainees, and the long distance plan for those working with or interested in extended time plans. </p>
            </div>
        </div>
            <div class="row d-flex justify-content-center">
                @foreach ($services as $service)
              <div class="col-md-3 mb-4">
                <div class="card card-cascade narrower mb-1 ">
                    <div class="card-header text-center">
                        {!! nl2br(e($service->title)) !!}
                    </div>
                  <div class="view view-cascade text-center">
                    <a href="/login"><i class="{{ $service->icon }}"  style="font-size: 60px"></i></a>

                  </div>
                  <div class="card-body card-body-cascade text-center">
                    <p class="card-text">{!! $service->desc !!}</p>
                  </div>
                  <div class="card-footer text-muted text-center">
                    <a href="/schedule" class="btn btn-sm btn-dark-green">Book</a>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
    </div>
</div>
@include('partials.footer')
   
    <div class="modal fade" id="alertCalendar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-sm modal-notify modal-success modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title w-100 text-center font-weight-bold" id="myModalLabel">Our Calendar</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
             <div class="text-center">
              <i class="fas fa-check fa-4x mb-3 animated rotateIn text-green"></i>
              <hr>
              <img class="img-fluid img-responsive" style="height: 450px" src="{{ asset('images/gallery/TT_Tri.jpeg') }}">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

@endsection
@section('scripts')
   
@endsection