<div id="home" class="content has-bg home">
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
    	@foreach ($safaris as $key => $safari)
    		@if ($key == 0)
      		<li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="active"></li>
      		@else
      		<li data-target="#carouselExampleIndicators" data-slide-to=" {{$key}} "></li>
      		@endif
    	@endforeach	
    </ol>
    <div class="carousel-inner" role="listbox">
    	@foreach ($safaris as $key => $safari)
    		@if ($key == 0)
				<div class="mt-4 pt-4 carousel-item active" data-interval="10000" style="background-image: linear-gradient(90deg, rgba(52,52,52,0.8813725319229254) 41%, rgba(51,51,51,0.5648459212786677) 61%, rgba(88,88,88,0.44439774200695903) 84%, rgba(97,97,97,0) 100%), url('{{ $safari->bg_img }}');"
					data-paroller="true"
					data-paroller-factor="0.5"
					data-paroller-factor-xs="0.25">
					<div class="container mt-4 pt-4 rounded">
						<div class="container text-center">				
							<h1>Photography Safaris</h1>
							<p>Swipe left or right for more</p>
						</div>
						<div class="col-md-6 text-center">
						<h2 class="pt-4"> {{ $safari->title }} </h2><hr>
							<h5> {{$safari->des}} </h5> <hr>
						</div>
						
					</div>
					<div class="container text-center">
						<a href="https://wa.me/254714996368" class="text-center btn btn-success"> <i class="fab fa-whatsapp fa-fw"></i> ENQUIRE MORE</a>
					</div>	
				</div>
			@else
			<div class="mt-4 pt-4 carousel-item" data-interval="10000" style="background-image: linear-gradient(90deg, rgba(52,52,52,0.8813725319229254) 41%, rgba(51,51,51,0.5648459212786677) 61%, rgba(88,88,88,0.44439774200695903) 84%, rgba(97,97,97,0) 100%), url('{{ $safari->bg_img }}');"
					data-paroller="true"
					data-paroller-factor="0.5"
					data-paroller-factor-xs="0.25">
					<div class="container mt-4 pt-4 rounded">
						<div class="container text-center">				
							<h1>Photography Safaris</h1>
							<p>Swipe left or right for more</p>
						</div>
						<div class="col-md-6 text-center">
						<h2 class="pt-4"> {{ $safari->title }} </h2><hr>
							<h5> {{$safari->des}} </h5> <hr>
						</div>
						
					</div>
					<div class="container text-center">
						<a href="https://wa.me/254714996368" class="text-center btn btn-success"><i class="fab fa-whatsapp fa-fw"></i> ENQUIRE MORE</a>
					</div>	
				</div>
				@endif

    	@endforeach

		    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		          <span class="sr-only">Previous</span>
		        </a>
		    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		          <span class="carousel-control-next-icon" aria-hidden="true"></span>
		          <span class="sr-only">Next</span>
	        </a>

		</div>
	</div>
</div>

