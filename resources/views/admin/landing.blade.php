
<!-- begin #about -->
<div id="about" class="content mt-3" data-scrollview="true">
	<!-- begin container -->
	<div class="container" data-animation="true" data-animation-type="fadeInDown">
				<ul class="nav nav-pills mb-3 mt-4 z-depth-3 rounded" id="pills-tab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
				      aria-controls="pills-home" aria-selected="true">Home</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
				      aria-controls="pills-profile" aria-selected="false">About Us</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
				      aria-controls="pills-contact" aria-selected="false">Contact</a>
				  </li>
				</ul>
				<div class="float-left tab-content pt-2 pl-1" id="pills-tabContent">
				  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
				  	@foreach ($land_cont as $content)
					<div class="col-md-4 float-left">
						<div class="card">
						  <div class="card-header">
							    <h5 class="card-title"><a> Slide {{$content->id}} </a></h5>
						  </div>
						  <div class="card-body">
						    	<form action=" {{route('admin.update', $content->id)}} " class="rounded border-success" method="POST">	
						    		@method('PATCH')
						    		@csrf
						    		<input type="hidden" name="id" value="{{$content->id}}">
							    	<div class="col-md-12 mt-4 justify-content-center">
	                                    <div class="form-group row m-b-15">
	                                        <label class="col-form-label col-md-3">Header</label>
	                                        <div class="col-md-9">
	                                        	<textarea class="form-control" rows="5" cols="300" name="heading">{{$content->heading}}</textarea>
	                                        </div>
	                                    </div>
	                                    <div class="form-group row m-b-15">
	                                        <label class="col-form-label col-md-3">Des</label>
	                                        <div class="col-md-9">
	                                        	<textarea class="form-control" rows="5" cols="300" name="des">{{$content->des}}</textarea>
	                                        </div>
	                                    </div>
	                                    <button name="landing" type="submit" class="text-center justify-content-center btn btn-md btn-amber">Update</button>
							    	</div>
						    	</form>
						  </div>
						</div>
					</div>
					@endforeach
				</div>







				  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
				  	@foreach ($abouts as $about)
					<div class="col-md-10 float-left">
						<div class="card">
						  <div class="card-header">
							    <h5 class="card-title"><a> Edit About </a></h5>
						  </div>
						  <div class="card-body">
						    	<form action=" {{route('admin.update', $about->id)}} " class="rounded border-success" method="POST">	
						    		@method('PATCH')
						    		@csrf
						    		<input type="hidden" name="id" value="{{$about->id}}">
							    	<div class="col-md-12 mt-4 justify-content-center">
	                                    <div class="form-group row m-b-15">
	                                        <label class="col-form-label col-md-3">{{$about->abt_head}}</label>
	                                        <div class="col-md-9">
	                                        	<input type="text" name="abt_head" class="form-control" placeholder=" {{$about->abt_head}} " value="{{$about->abt_head}}">
	                                        </div>
	                                    </div>
	                                    <div class="form-group row m-b-15">
	                                        <label class="col-form-label col-md-3">About Body</label>
	                                        <div class="col-md-9">
	                                        	<textarea class="form-control" rows="3" cols="300" name="abt_body">{{$about->abt_body}}</textarea>
	                                        </div>
	                                    </div>
	                                    <div class="form-group row m-b-15">
	                                        <label class="col-form-label col-md-3"> {{$about->stry_head}} </label>
	                                        <div class="col-md-9">

	                                        	<input type="text" name="stry_head" class="form-control" placeholder=" {{$about->stry_head}} " value="{{$about->stry_head}}">
	                                        </div>
	                                    </div>
	                                    <div class="form-group row m-b-15">
	                                        <label class="col-form-label col-md-3"> Story Body </label>
	                                        <div class="col-md-9">
	                                        	<textarea class="form-control" rows="3" cols="300" name="stry_body">{{$about->stry_body}}</textarea>
	                                        </div>
	                                    </div>
	                                    <div class="form-group row m-b-15">
	                                        <label class="col-form-label col-md-3"> Philosophy </label>
	                                        <div class="col-md-9">
	                                        	<input type="text" name="philo" value="{{$about->philo}}" class="form-control">
	                                        </div>
	                                    </div>
	                                    <div class="form-group row m-b-15">
	                                        <label class="col-form-label col-md-3"> {{$about->why}} </label>
	                                        <div class="col-md-9">
	                                        	<input class="form-control" type="text" name="why" value="{{$about->why}}">
	                                        </div>
	                                    </div>
	                                    <div class="form-group row m-b-15">
	                                        <label class="col-form-label col-md-3"> Body </label>
	                                        <div class="col-md-9">
	                                        	<input type="text" name="why_body" value="{{$about->why_body}}" class="form-control">
	                                        </div>
	                                    </div>


	                                    <button name="about" type="submit" class="text-center justify-content-center btn btn-md btn-amber">Update</button>
							    	</div>
						    	</form>
						  </div>
						</div>
					</div>
					@endforeach
				  	
				  </div>
				  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
				  	@foreach ($contacts as $contact)
					<div class="col-md-10 float-left">
						<div class="card">
						  <div class="card-header">
							    <h5 class="card-title"><a> Edit Contacts Pane </a></h5>
						  </div>
						  <div class="card-body">
						    	<form action=" {{route('admin.update', $contact->id)}} " class="rounded border-success" method="POST">	
						    		@method('PATCH')
						    		@csrf
						    		<input type="hidden" name="id" value="{{$contact->id}}">
							    	<div class="col-md-12 mt-4 justify-content-center">
	                                    <div class="form-group row m-b-15">
	                                        <label class="col-form-label col-md-3">{{$contact->contact_head}}</label>
	                                        <div class="col-md-9">
	                                        	<input type="text" name="contact_head" class="form-control" placeholder=" {{$contact->contact_head}} " value="{{$contact->contact_head}}">
	                                        </div>
	                                    </div>
	                                    <div class="form-group row m-b-15">
	                                        <label class="col-form-label col-md-3">Contact Body</label>
	                                        <div class="col-md-9">
	                                        	<textarea class="form-control" rows="3" cols="300" name="contact_body">{{$contact->contact_body}}</textarea>
	                                        </div>
	                                    </div>
	                                    <div class="form-group row m-b-15">
	                                        <label class="col-form-label col-md-3"> Contact Us heading </label>
	                                        <div class="col-md-9">

	                                        	<input type="text" name="pleft_head" class="form-control" placeholder="{{$contact->pleft_head}}" value="{{$contact->pleft_head}}">
	                                        </div>
	                                    </div>
	                                    <div class="form-group row m-b-15">
	                                        <label class="col-form-label col-md-3"> Paragraph Body </label>
	                                        <div class="col-md-9">
	                                        	<textarea class="form-control" rows="3" cols="300" name="pleft_body">{{$contact->pleft_body}}</textarea>
	                                        </div>
	                                    </div>
	                                    <div class="form-group row m-b-15">
	                                        <label class="col-form-label col-md-3"> Business Name </label>
	                                        <div class="col-md-9">
	                                        	<input type="text" name="pleft_bizname" value="{{$contact->pleft_bizname}}" class="form-control">
	                                        </div>
	                                    </div>
	                                    <div class="form-group row m-b-15">
	                                        <label class="col-form-label col-md-3"> Address (From left to right) </label>
	                                        <div class="col-md-3">
	                                        	<input class="form-control" type="text" name="pleft_addr1" value="{{$contact->pleft_addr1}}">
	                                        </div>
	                                        <div class="col-md-3">
	                                        	<input class="form-control" type="text" name="pleft_addr2" value="{{$contact->pleft_addr2}}">
	                                        </div>
	                                        <div class="col-md-3">
	                                        	<input class="form-control" type="text" name="pleft_addr3" value="{{$contact->pleft_addr3}}">
	                                        </div>
	                                    </div>
	                                    <div class="form-group row m-b-15">
	                                        <label class="col-form-label col-md-3"> Phone Numbers </label>
	                                        <div class="col-md-4">
	                                        	<input type="text" name="pleft_mob1" value="{{$contact->pleft_mob1}}" class="form-control">
	                                        </div>
	                                        <div class="col-md-4">
	                                        	<input type="text" name="pleft_mob2" value="{{$contact->pleft_mob2}}" class="form-control">
	                                        </div>
	                                    </div>
	                                    <div class="form-group row m-b-15">
	                                        <label class="col-form-label col-md-3"> Email Address</label>
	                                        <div class="col-md-4">
	                                        	<input type="text" name="pleft_mail" value="{{$contact->pleft_mail}}" class="form-control">
	                                        </div>
	                                    </div>

	                                    <button name="contact" type="submit" class="text-center justify-content-center btn btn-md btn-amber">Update</button>
							    	</div>
						    	</form>
						  </div>
						</div>
					</div>
					@endforeach
				  </div>
				</div>

			</div>

		</div>
