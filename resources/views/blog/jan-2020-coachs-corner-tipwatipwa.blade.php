@php
	$description =' "
        Happy New Year all!
        With 2019 in the rear view, we can look back and say it was either a good year or not so good year, but isn’t it all relative? It depends on what you take into consideration, but for my corner we’ll just address matters fitness. ." ';

	$year = date("Y");
	
	$title = "TipwaTipwa - ".$year. " - Coach's corner Jan 2020. Spin Cycling Nairobi, Gym Spin, Best Gym in Kenya, Premier fitness centre, gyms in nairobi, TipwaTipwa fitness studio, Weight loss, workout, spin cycle, Triathlons, Trainers, spin in Nairobi, Spin in Lavington, Spin cycling, Yoga in Nairobi, Lavington Gym, lavington Fitness centre, ";
	
	$keywords = date("Y"). " - Premier fitness centre, gyms in nairobi, TipwaTipwa fitness studion, Weight loss, workout, spin cycle, Triathlons, Trainers, spin in Nairobi, Spin in Lavington, Spin cycling, Yoga in Nairobi, Lavington Gym, lavington Fitness centre, Best Gym Westlands, Tipwatipwa Tetema, Nairobi Gyms, ca ";

@endphp
@extends('layouts.app')
@section('content')
        @include('partials.nav')
        <div class="w-100 overflow-hidden" style="height: 400px; background-image: url('{{ asset('images/Tipwa_Tipwa30.jpg') }}'); background-position: top; background-size: cover; ">
        	<h2 class="text-center text-white" style="padding-top: 180px">TipwaTipwa Coach's Corner</h2>
        	<hr>
        	<h4 class="text-white text-center">Issue#2 January 2020</h4>
        	<hr>
        </div>
        <div class="row w-100 d-flex justify-content-center m-2 p-4 overflow-hidden">
        	<div class="col-md-8 col-sm-4">
        	        <p>
                                Happy New Year all!
                    </p>
                        <p>
                                With 2019 in the rear view, we can look back and say it was either a good year or not so good a year, but isn’t it all relative? It depends on what you take into consideration, but for my corner we’ll just address matters fitness. 
                        </p>

                        <p>
                                Did you go out and exercise as much as you wanted to or did you fall short on that aspect? Could you have exercised, be it run, cycle, yoga, kick box or strength train, more? Sure, you could have. However, it’s the myriad reasons or excuses that you can give that I want you to reflect on and turn around.
                        </p>
        	</div>

        	<div class="col-md-8 col-sm-4 overflow-hidden">
        		<p>It is said that the body always has the ability to do and do more, but it’s the mind that puts up blockers, and tilts the scale to not getting active. Let’s shut the mind and all its noises out and once we are well on the way to an active lifestyle, the mind always comes around. Try it you’ll see.
                </p>
                <p>
                        I’ll tackle one excuse that is usually given but is really very easy to nip – I’m not or wasn’t prepared. Make like a scout and always be prepared. If you are reading this I know you are prepared but your mind may be saying otherwise. I’ll address the aspect of the gear or kit that you need to go out there and enjoy being fit with, targeting some of the various exercises that TT is involved in.</p>
        	</div>

                        <div class="text-center col-md-10 col-sm-5 pt-4 pb-4 w-100 overflow-hidden">
                            <img class="rounded img-fluid" style="max-width: 500px" src="{{ asset('images/jan-2020-img.jpeg') }}">
                        </div>

        	<div class="col-md-8 col-sm-4 overflow-hidden">
        		<p>
        		      <span class="font-italic">Running</span>: basics - get yourself some ‘running specific’ sneakers. You can take your choice of Toi market at Adam’s Arcade, or what some may consider our active lifestyle folks’ toy shop – Decathlon. It’s located at the Hub in Karen. Make sure you get a size bigger than your normal shoe size.  This allows for the toe expansion that happens when you run and might save you a toe nail or two. If you are a dawn (or night) runner, you want to make sure that you are <span class="font-weight-bold">always visible</span>. Wearing black active gear may be cool, but it’s not so cool when a motorist only knows you were there after the thud of hitting you.  
                      <br><span class="font-weight-bold">Tip</span>:  <span class="font-italic">
                          if running on a road, always run against auto traffic so you can see them first. Wear bright colours and if running in the dark, wear reflective attire and a headlamp – the light will help you see that pot hole as well as ensure that you are seen.
                      </span>
                                <br>
                                <hr><span class="font-italic">Spinning</span>: basics - get yourself a pair or two of bike shorts. These are padded shorts to minimize soreness on the rear when you get on that saddle for a Spin class or go out riding on your bicycle. Come to a spin class with trainers/sneakers, not ngomas, leather shoes, lifestyle casuals or crocs. None of these will support your feet or allow a good strap-in on the pedals. You can also bring cleats, which some of our bikes accommodate. As you progress to serious mileage cycling outdoors, cleats will be a must. 
                                <br>
                                <hr>
                            </p>
                        </div>
                        <div class="text-center col-md-10 col-sm-5 pt-4 pb-4 w-100 overflow-hidden">
                            <img class="rounded img-fluid" style="max-width: 500px" src="{{ asset('images/jan-2020-img1.jpeg') }}">
                        </div>
                        <div class="col-md-8 col-sm-4 overflow-hidden">
                            <p>
                                <span class="font-italic"> Kick boxing </span>: basics – boxing gloves. You will find that having your own pair of gloves, that fit your hands, will let you enjoy the class more and allow you to control their hygiene. Again, Decathlon has you sorted here.
                                <br>
                                <hr>
                                <span class="font-italic">Yoga</span>: basics – a yoga mat. Having your own mat allows you to practice even at home or wherever you might travel to, but once again allows you to be in control of the hygiene of your space. Namaste.
                                <br>
                                <hr>
                </p>
            </div>
                        <div class="text-center col-md-10 col-sm-5 pt-4 pb-4 w-100 overflow-hidden">
                            <img class="rounded img-fluid" style="max-width: 500px" src="{{ asset('images/jan_tt_coach.jpg') }}">
                        </div>
            <div class="col-md-8 col-sm-4 overflow-hidden">
                        <p>
                                <span class="font-italic">Hiking</span>: basics – get a good grippy, pair of water proof hiking boots. Again, its Toi market or the ‘Toy store’ in Karen for these. They run the gamut in price, so make sure you are getting what you want and always a size or two bigger than your normal shoe size. That space comes in handy for toe expansion and on cold hikes or mountain climbs when you need to wear thick socks.
                                <br><br>
                                So, before any individual exercise or group class, lay out your kit the night/day before, so that when it’s time to go, you’re ready to go out there and enjoy what the activity brings.    
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