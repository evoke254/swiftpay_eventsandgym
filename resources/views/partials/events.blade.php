<div id="about" class="content" data-scrollview="true" style="margin-top: 2%">
	<div class="container " data-animation="true" data-animation-type="fadeInUp">
		<div class="row d-flex justify-content-center">
			<div class="col-md-8 text-center">
				<h2>TipwaTipwa Upcoming Events</h2>
			</div>
		</div>
       <div class="row d-flex justify-content-center w-100">
		@foreach ($events as $event)
   		   		 <div class="col-md-4 mb-4">
				    <div class="card card-cascade narrower mb-1 z-depth-">
				      <div class="view view-cascade text-center text-">
				      	@if ($event->desc == 'tri')
						<i class="flaticon-triathlon-silhouettes-in-a-triangle light-green-text" style="font-size: 60px"></i>
						@elseif ($event->desc == 'bike')
						<i class="flaticon-man-cycling light-green-text" style="font-size: 60px"></i>
						@elseif ($event->desc == 'run')
						<i class="flaticon-running light-green-text" style="font-size: 60px"></i>
						@else
						<i class="flaticon-man-in-hike light-green-text" style="font-size: 60px"></i>
						@endif
				      </div>
				      <div class="card-body card-body-cascade text-center">
				        <h5 class="font-weight-bold pink-lighter-hover mb-3"><strong>{{$event->title}}</strong></h5><hr>
				        <h5 class="card-text"> Date: {{date('D, dS M Y', strtotime($event->start))}}</h5><hr>
				      </div>
				      <div class="card-footer text-center text-white success-color-dark">
				      	
				      </div>
				    </div>
				</div>
		@endforeach
   		</div>
	</div>
</div>