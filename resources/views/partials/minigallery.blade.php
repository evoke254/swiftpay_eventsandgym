
		<!-- begin #work -->
		<div id="work" class="content" data-scrollview="true">
			<!-- begin container -->
			<div class="container" data-animation="true" data-animation-type="fadeInDown" id= >
				<h2 class="content-title">Mini Gallery</h2>
				<p class="content-desc">
					Whether you want to capture the signature moments of a commonplace, or surprises triggered by nature at its very best, <br> I am prepared to satisfy your curiosity while enjoying the fun presented by every single moment.
				</p>
				<!-- begin row -->
				<div class="row d-flex justify-content-center row-space-10">
					<!-- begin col-3 -->
					@foreach ($images as $image)
					<div class="col-md-3 col-sm-6">
						<!-- begin work -->
						<div class="work rounded z-depth2">
							<div class="image z-depth3">
								<a href="#"><img src=" {{ $image->thumbnail }}" alt="{{$image->category}}" /></a>
							</div>
							<div class="desc text-center">
								<span class="desc-title">{{ $image->title }}</span>
								<span class="desc-text">{{ $image->caption }}</span>
							</div>
						</div>
					</div>
					@endforeach

				</div>
			</div>
		</div>
		<!-- end #work -->