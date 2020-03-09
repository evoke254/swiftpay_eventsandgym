<div class="content" data-scrollview="true" style="margin-top: -3%">
	<div class="container " data-animation="true" data-animation-type="fadeInUp">
		<div class="row d-flex justify-content-center">
			<div class="col-md-4 text-center">
				<h2>TT Trainers</h2>
			</div>
		</div>
			<div class="row d-flex justify-content-center">
			@foreach($trainers as $trainer)
			  <div class="col-lg-3 col-md-8 mb-4">
			    <div class="card card-cascade narrower mb-1 z-depth-">
		    	  <div class="card-header text-center">
			        <h5>{{$trainer->category}}</h5>
				  </div>
			      <div class="view view-cascade">
			        <img style="max-height: 350px; object-fit: cover !important;" src="{{ asset($trainer->image) }}" class="card-img-top rounded-0">
			        <a href="#!">
			        	<div class="mask flex-center rgba-green-dark"></div>
			        </a>
			      </div>
				  <div class="card-footer text-center">
				    <h5><strong> {{$trainer->fname}} </strong></h5>
				  </div>
			    </div>
			  </div>
			@endforeach
			</div>
	</div>
</div>