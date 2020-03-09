<div class="container mt-4" data-animation="true" data-animation-type="fadeInUp">
		<div class="row d-flex justify-content-center">
			<div class="col-md-12 col-lg-12 col-sm-12 text-center">
				<h4 class="deep-orange-text">To book a slot using MPESA simply enter your details below.</h4>
				<p>*Confirm the STK pop up within 7 seconds to finish payment.*</p>
			</div>
		</div>
		<form class="validate-form" action="/bulletbooking" method="POST">
			@csrf
		    <ul class="stepper linear horizontal" style="min-height: 250px; overflow: hidden; border-style: none !important; ">
		      <li class="step active">
		        <div data-step-label="Book in seconds" class="step-title waves-effect waves-effect w-75">Step 1</div>
		        <div class="step-content mt-3">
		          <div class="row">
					<div class="col-md-4 col-lg-4 col-sm-4">
						<div class="wrap-input2 validate-input" data-validate="Code is required">
							<input class="input2" type="text" name="code" id="code" required> 
							<span class="focus-input2" data-placeholder="Event Code (Example : LJB-72)"></span>
						</div>
					</div>
					<div class="col-md-2 col-lg-2 col-sm-2">
						<div class="wrap-input2 validate-input" data-validate="How many slots would you like to book">
							<input class="input2" type="number" name="slots" required="Number of slots">
							<span class="focus-input2" data-placeholder="Number of Slots"></span>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 col-sm-4">
						<p class="deep-orange-text">* Codes can be found 👇 below in the schedule 🥳. </p>
					</div>
		            
		          <div class="step-actions">
		            <button class="btn btn-dark-green btn-sm next-step">CONTINUE</button>
		            <button class="btn btn-grey btn-sm previous-step">BACK</button>
		          </div>
		        </div>
		      </li>

		      <li class="step">
		        <div data-step-label="Bullet checkout" class="step-title waves-effect waves-effect w-75">Step 2</div>
		        <div class="step-content mt-3">
		          <div class="row">
					<div class="col-md-6 col-lg-6 col-sm-6">
						<div class="wrap-input2 validate-input">
							<input class="input2 valid" type="text" name="number" required="MPESA number">
							<span class="focus-input2" data-placeholder="MPESA Number (Format: 2547XXXXXXXX)"></span>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-sm-6">
						<img src="{{asset('images/img/mpesa.jpg')}}" class="img-responsive" style="max-height: 100px !important">
					</div>
		          </div>
		          <div class="step-actions">
		            <button class="btn btn-dark-green btn-sm next-step">CONTINUE</button>
		            <button class="btn btn-grey btn-sm previous-step">BACK</button>
		          </div>
		        </div>
		      </li>
		      <li class="step">
		        <div data-step-label="Done!" class="step-title waves-effect waves-effect w-75">Step 3</div>
		        <div class="step-content mt-3">
		          <div class="row">
					<div class="col-md-6 col-lg-6 col-sm-6 d-flex justify-content-center">
						<i class="text-success far fa-thumbs-up" style="font-size: 50px"></i>
						<p class="ml-3 d-flex align-items-middle">That was easy, wasn't it?</p>
					</div>
					<div class="col-md-6 col-lg-6 col-sm-6">
						<p class="text-danger">*Please ensure you entered correct details then submit the form. </p>
						<p>*By clicking submit you authorize Kahaki Solutions to send an STK push to book the hike or event</p>
					</div>
		            
		          <div class="step-actions">
		            <button type="submit" class="btn btn-dark-green btn-sm">SUBMIT</button>
		            <button class="btn btn-grey btn-sm previous-step">BACK</button>
		          </div>
		        </div>
		      </li>

		    </ul>
		  </form>
</div>


@section('scripts')

    <script>
    $(document).ready(function() {

			(function ($) {
			    "use strict";


			    /*==================================================================
			    [ Focus Contact2 ]*/
			    $('.input2').each(function(){
			        $(this).on('blur', function(){
			            if($(this).val().trim() != "") {
			                $(this).addClass('has-val');
			            }
			            else {
			                $(this).removeClass('has-val');
			            }
			        })    
			    })
			            
			  
			    
			    /*==================================================================
			    [ Validate ]*/
			    var code = $('.validate-input input[name="code"]');
			    var number = $('.validate-input input[name="number"]');
			    var slots = $('.validate-input input[name="slots"]');


			    ('.validate-form').on('submit',function(){
			        var check = true;
/*
			        if($(code).val().trim().match(/^[A-Z]{3}-{1}\d{2}$/i)){
			            showValidate(code);

			            check=false;
			        }
*/

			        if($(code).val().trim() == ''){
			            showValidate(code);

			            check=false;
			        }

			        if($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
			            showValidate(email);
			            check=false;
			        }

			        if($(message).val().trim() == ''){
			            showValidate(message);
			            check=false;
			        }

			        return check;
			    });


			    $('.validate-form .input2').each(function(){
			        $(this).focus(function(){
			           hideValidate(this);
			       });
			    });

			    function showValidate(input) {
			        var thisAlert = $(input).parent();

			        $(thisAlert).addClass('alert-validate');
			    }

			    function hideValidate(input) {
			        var thisAlert = $(input).parent();

			        $(thisAlert).removeClass('alert-validate');
			    }
			    
			})(jQuery);

    });
    </script>
@endsection
