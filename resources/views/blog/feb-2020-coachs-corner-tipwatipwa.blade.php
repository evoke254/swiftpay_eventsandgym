@php
	$description =' "
        Leap year greetings ." ';

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
        	<h4 class="text-white text-center">Issue#3 February 2020</h4>
        	<hr>
        </div>
        <div class="row w-100 d-flex justify-content-center m-2 p-4 overflow-hidden">
        	<div class="col-md-8 col-sm-4">
        	        <p>
                                Leap year greetings!
                    </p>
                        <p>
                                Every four years we get an extra day to get fit and 2020 is one of those – let’s take advantage of the leap year that is and get an extra run or dance session in. Given that this month ends on a Saturday, go out there and make that day count for something active (for Garmin users, there is a badge for completing an activity on 29th February).  
                        </p>

                        <p>
                                Speaking of dancing, we want to say thanks for attending our inaugural ‘TT Awards Gala’ last month, and making it a fun night with some of you finding your groove on the dance floor. I must say it was a night of double takes because we did not immediately recognise each other out of our sports kits – clearly, we “clean up” well - the way folks dolled and gussied up for the evening. You all looked “the business”. 
                        </p>
        	</div>

        	<div class="col-md-8 col-sm-4 overflow-hidden">
        		<p>
        			TT was happy to recognise and acknowledge your efforts in fitness over the past year as the awards ran the gamut with over 20 medals and certificates given. For the sake of those that didn’t make it to the Gala, and even for those that were there but were too ‘mellow’ to remember, you will find the full list of awards on our website. However, it is for all you TT faithful to know that you all have a chance to win an award (medals and certificates) as Tasha quipped “kumbe you can win awards without ever having to run?” 
                </p>
                <p>
                       If you show consistency in effort whether in the studio, out there hiking or even just for being a cheerleader, you will be noticed and acknowledged. For instance, if you book and pay for hikes and repeatedly fail to show up, you will be recognised with the ‘Rock Hyrax’ award. This year the undisputed winner in this category was our friend Muta. Other awards include ‘Summit’, ‘Weekend Nomad’, ‘Walkman’, ‘Miles in the Saddle’, ‘Funga Mshipi’, YOD Champion, and Spin Champion, to name a few. The crème de la crème of the awards that we should all aspire to win is the ‘Spirit of TipwaTipwa’ shield, which is awarded to the most consistent and all-round TT member. This year’s winner was Akuol – she brought it - hearty congratulations!
                   </p>
        	</div>

                        <div class="text-center col-md-10 col-sm-5 pt-4 pb-4 w-100 overflow-hidden">
                            <img class="rounded img-fluid" style="max-width: 500px" src="{{asset('images/Tipwa_Tipwa33.jpg') }}">
                        </div>

        	<div class="col-md-8 col-sm-4 overflow-hidden">
        		<p>
        		      Given it is only February there’s still plenty of time to gun for an award, and we are there to help you along.  TipwaTipwa is divided into three distinct groups. One group, and really the catch all, caters to runners and cyclists and everyone in between. On WhatsApp this is the ‘TipwaTipwa’ original group. Over time we developed a group for those that like hiking and climbing mountains and this group is aptly called ‘TT Trekkers’. The third group is ‘TT Studio’ and this is for the folks who take the classes offered in the studio at Lavington. As you can see, there should be no shortage of options available to you, if you want to keep moving.
                <hr>
                            </p>
                        </div>
                        <div class="col-md-8 col-sm-4 overflow-hidden">
                            <p>
                            I’ll urge you to find a way to track your effort in running, cycling, hiking, walking and, even, swimming so that at the end of the year you can share your stats and they can be tallied toward an award. Whether it's with your Garmin or equivalent watch gizmo, a phone app (too many to mention), find one that tracks your stats off the phone somewhere just in case. Without a doubt the leader phone app for active or fitness conscious folks is <a href="https://www.strava.com">Strava</a> as it not only tracks but has features in it that make tracking your activities ‘a thing’, not to mention the community aspect of it. Don’t worry it’s free. Of course, for more bells and whistles there’s a pay version. 
                                <br>
                                <hr>
                </p>
            </div>
            <div class="col-md-8 col-sm-4 overflow-hidden">
                        <p>
                              As we gear up and train for the Kilimanjaro Marathon or the Beyond Zero Half Marathon at the start of next month, let’s start tracking those training runs and workouts and keep ourselves on point. You may win an award come January next year, even just for encouraging others to go out there and do something or cheering them on.
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