@php
	$description =' "We are all about putting oneself through fun yet rigorous group exercise activities that both push and rejuvenate the whole body- muscle, mind and spirit. It’s about working in groups and enjoying the great outdoors; all the while pushing one’s activity levels higher, with the goal of getting the cardiovascular and muscular systems to function at their optimum. It is about challenging oneself to be healthy physically and nutritiously and thus maintain a healthy diet and fitness lifestyle." ';

	$year = date("Y");
	
	$title = "TipwaTipwa - ".$year. " - Spin Cycling Nairobi, Gym Spin, Best Gym in Kenya, Premier fitness centre, gyms in nairobi, TipwaTipwa fitness studio, Weight loss, workout, spin cycle, Triathlons, Trainers, spin in Nairobi, Spin in Lavington, Spin cycling, Yoga in Nairobi, Lavington Gym, lavington Fitness centre, ";
	
	$keywords = date("Y"). " - Premier fitness centre, gyms in nairobi, TipwaTipwa fitness studion, Weight loss, workout, spin cycle, Triathlons, Trainers, spin in Nairobi, Spin in Lavington, Spin cycling, Yoga in Nairobi, Lavington Gym, lavington Fitness centre, Best Gym Westlands, Tipwatipwa Tetema, Nairobi Gyms, ca ";

@endphp
@extends('layouts.app')
@section('content')
        @include('partials.nav')
        <div class="w-100 overflow-hidden" style="height: 400px; background-image: url('{{ asset('images/Tipwa_Tipwa_car1.JPG') }}'); background-position: bottom; background-size: cover;">
        	<h2 class="text-center text-white" style="padding-top: 180px">TipwaTipwa Coach's Corner</h2>
        	<hr>
        	<h4 class="text-white text-center">Issue#1 December 2019</h4>
        	<hr>
        </div>
        <div class="row w-100 d-flex justify-content-center m-2 p-4 overflow-hidden">
        	<div class="col-md-8 col-sm-4">
        		<p>Hello all and welcome to our inaugural TT Coach’s Corner, where I’ll be sharing fitness related tips, info and advice. Hope it works for you.</p>

        		<p>So, its December and we are now in that season of letting go and letting be… the holidays, festive season, whatever you refer to it, but its relaxation times and for some it is also ‘parte after parte after parte…’.</p>
        	</div>
        	<div class="text-center col-md-10 col-sm-5 pt-4 pb-4 w-100 overflow-hidden">
        		<img class="rounded img-fluid" style="max-width: 500px" src="{{ asset('images/christmas.jpg') }}">
        	</div>
        	<div class="col-md-8 col-sm-4 overflow-hidden">
        		<p>Nothing wrong with some R & R or rest and recuperation. While this month has fewer trips to the gym, fewer if any runs put in, more travel, more grub and alcohol, even some over indulgence, an increase in sedentary activities and a general laissez faire attitude about putting one’s feet up, it is good to remember that you don’t want to fall off the proverbial fitness wagon. It’s not easy to get back on and if you’ve ever gone a few weeks without exercising you know what it’s like trying to get back in the grove.</p>
        	</div>
        	<div class="text-center col-md-10 col-sm-5 pt-4 pb-4 w-100 overflow-hidden">
        		<img class="rounded img-fluid" style="max-width: 500px" src="{{ asset('images/Tipwa_Tipwa33.jpg') }}">
        	</div>
        	<div class="col-md-8 col-sm-4 overflow-hidden">
        		<p>
        			I’m talking about doing things in moderation, and not getting too far away from some form of exercise.
        		</p>
        		<p>
        			If you travel, take a jump rope and a pair of trainers with you and remember that you can use them wherever you are. Getting even just a 20-minute run or walk or jumping/skipping rope for 10 minutes at least two times in a week, a yoga sun salutation here and there, and if you’re by a water mass of sorts, a 10-minute swim will do wonders. Better yet, those of you with kids in town or around, do these activities with them, and throw in bike rides – I can’t say enough how those young tikes can be your best motivators and cheer leaders. Not to mention that you would also be creating priceless memories with them – what’s not to like? This is all it will take you to keep your body still invigorated and active, and still ‘on the wagon’.
        		</p>
        		<p>
        			Not travelling? You can still do the very same things at home – so even if you skip the gym, you’re still staying active at home. Go on a walk or bicycle ride with the kids – if you are in Nairobi, Karura Forest is a good option for this. Check out ‘the other Karura forest’, off Thigiri Ridge road - a hidden gem via the Sigiria gate – really nice and peaceful.
        		</p>
        		<p>
        			Oh, and while we are on the subject of taking walks, TT went up Mts. Kilimanjaro, Kenya, Elgon and Ruwenzori this year. Let’s do it again in 2020. Bring a friend. That said, we look forward to seeing you back in January, for our group classes at the TT Fitness studio or outdoors on a TT hike or run or cycle.
        		</p>
        		<p>
        			Enjoy your December, travel safe, and stay active. Let’s not have you looking to hitch a ride on the January ‘fitness returnees’ band wagon. No excuses.
        		</p>
        		<p>
					Keep on! Keep moving.<br>
					Marika (Coach)
        		</p>
        	</div>
        </div>
	
        @include('partials.contact')
        @include('partials.footer')
@endsection
@section('scripts')

@endsection