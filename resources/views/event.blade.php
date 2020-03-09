@php
	$description =' "We are all about putting oneself through fun yet rigorous group exercise activities that both push and rejuvenate the whole body- muscle, mind and spirit. It’s about working in groups and enjoying the great outdoors; all the while pushing one’s activity levels higher, with the goal of getting the cardiovascular and muscular systems to function at their optimum. It is about challenging oneself to be healthy physically and nutritiously and thus maintain a healthy diet and fitness lifestyle." ';

	$year = date("Y");
	
	$title = "TipwaTipwa - ".$year. " - Spin Cycling Nairobi, Gym Spin, Best Gym in Kenya, Premier fitness centre, gyms in nairobi, TipwaTipwa fitness studio, Weight loss, workout, spin cycle, Triathlons, Trainers, spin in Nairobi, Spin in Lavington, Spin cycling, Yoga in Nairobi, Lavington Gym, lavington Fitness centre, ";
	
	$keywords = date("Y"). " - Premier fitness centre, gyms in nairobi, TipwaTipwa fitness studion, Weight loss, workout, spin cycle, Triathlons, Trainers, spin in Nairobi, Spin in Lavington, Spin cycling, Yoga in Nairobi, Lavington Gym, lavington Fitness centre, Best Gym Westlands, Tipwatipwa Tetema, Nairobi Gyms, ca ";

@endphp
@extends('layouts.app')
@section('content')
        @include('partials.nav')
        @include('partials.events')
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