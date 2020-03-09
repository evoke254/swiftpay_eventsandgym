@php
$description = "";
$keywords = "";
$title = "";
@endphp
@extends('layouts.app')
@section('content')

@include('partials.nav')
<div class="content" data-scrollview="true" style="margin-top: 2%">
  <div class="container " data-animation="true" data-animation-type="fadeInUp">
    <div class="card">
      <div class="card-body">
        <form action="/bookings" method="POST" >
        @csrf  
              <div class="row d-flex justify-content-center">
                <div class="col-md-8 text-center">
                  <h2>Class | Event Details</h2>
                </div>
              </div>
              <div class="row d-flex justify-content-center">
              <div class="col-md-6">
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Title</strong></label>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="title" name="title" value="{{$class_event->title}}">
                      <input type="hidden" name="event_id" id="event_id" value="{{$class_event->id}}">
                      <input type="hidden" name="names" id="names" value=" {{ Auth::user()->fname }} {{ Auth::user()->lname }}">
                      <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }} ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-auto col-form-label"><strong>Description</strong></label>
                    <div class="col-md-8">
                      <textarea rows="4" readonly=" "class="form-control-plaintext" id="staticEmail">{{$class_event->desc ?? 'Event Description: Null'}}</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Start Time</strong></label>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ date('l, M jS', strtotime($class_event->start)) }} @ {{ date('H:i', strtotime($class_event->start)) }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label"><strong>End Time</strong></label>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ date('l, M jS', strtotime($class_event->finish)) }} @ {{ date('H:i', strtotime($class_event->finish)) }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Duration</strong></label>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ (int)(((strtotime($class_event->finish) - strtotime($class_event->start))/60)) }} Minutes">
                    </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Venue</strong></label>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$class_event->venue}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Trainer</strong></label>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$trainer->fname ?? 'Admin'}} {{$trainer->lname ?? 'Admin'}}">
                    </div>
                  </div>
                  <div class="form-group row input-group">
                    <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Cost</strong></label>
                      <div class="input-group-prepend align-items-center">
                        <span class="input-group text-center">Kshs.</span>
                      </div>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="cost" value="{{$class_event->cost}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Status</strong></label>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$class_event->status}}">
                    </div>
                  </div>
              </div>
              </div>
              <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                 <hr>
                </div>
                @if($submit === 0)
                <div class="col-md-8 text-center">
                    <h4 class="text-danger">You have already scheduled the above Event | Class</h4>
                </div>
                <div class="col-md-12 text-center">
                  <p>Please click on the edit button to change details of your booking or cancell your reservation.</p>
                  <button class="btn btn-sm btn-dark-green" id="editBooking">Edit Reservation</button>
                </div>
                  @elseif ($submit === 1)
                <div class="col-md-8 text-center">
                  <h5>You are about to book: {{$class_event->title}} </h5>
                </div>
              </div>
              <div class="row d-flex justify-content-center">
                  <div class="col-md-6">
                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-auto col-form-label"><strong>Number of Slot(s)</strong></label>
                          <div class="col-md-6">
                          <select class="form-control" name="slots" id="slots" >
                            @for ($i=1; $i <11 ; $i++)
                              <option value="{{$i}}">{{$i}}</option> 
                            @endfor
                          </select>
                          </div>
                        </div>
                        <div class="form-group row input-group mt-4">
                          <label for="staticEmail" class="col-sm-4 col-form-label"><strong>Amount</strong></label>
                            <div class="input-group-prepend align-items-center">
                              <span class="input-group text-center">Kshs.</span>
                            </div>
                          <div class="col-md-4">
                            <input type="text" readonly class="form-control-plaintext" id="amount" name="amount">
                          </div>
                        </div>
                    </div>
                  <div class="col-md-6">
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-auto col-form-label"><strong>Payment Options</strong></label>
                        <div class="col-md-6 w-50">
                          <select class="form-control" name="payWith" id="payWith" required="">
                            <option disabled="" >Please select your preferred payment option</option>
                            @foreach($PayOptions as $PayOption)
                              <option value="{{$PayOption->payWith}}"> {{$PayOption->payWith }} </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="input-group row mb-3 mt-4 ml-4">
                        <label for="staticEmail" class="col-sm-auto col-form-label"><strong>Coupon Code </strong></label>
                        <input type="text" class="form-control" id="coupon" name="coupon" placeholder="Enter your coupon code">
                        <div class="w-50 input-group-append">
                          <button class="btn btn-md btn-secondary m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="applyCoupon"> Apply </button>
                        </div>
                      </div>
                  </div>
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-md btn-dark-green" >Book</button>
                    </div>
              </div>
        </form>
        @endif 
      </div>
</div>




<div class="modal fade" id="alertSuccuessModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100 text-center" id="myModalLabel">Success</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="text-center">
          <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
          <h6 id="controllerSuccess"></h6>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="alertErrorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100 text-center" id="myModalLabel">Error</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="text-center">
          <i class="fas fa-times  fa-4x mb-3 animated rotateIn"></i>
          <h6 class="text-danger" id="controllerError">Something is not right. Check the coupon code and try again</h6>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



@endsection
@section('scripts')
    <script>
    $(document).ready(function() {
          var cost = $('#cost').val();
          var slots = $('#slots').val();
          var amount = slots*cost;
          //alert(amount);
          $('#amount').val(amount);
    });

        $('#slots').change(function(){
          var cost = $('#cost').val();
          var slots = $('#slots').val();
          var amount = slots*cost;
          //alert(amount);
          $('#amount').val(amount);
        });


    $('#applyCoupon').click( function(){
      
      var len = $('#coupon').val().length;

        var coupon = $('#coupon').val().toUpperCase();
                 var regex = /^[A-Z]{4}[0-9]{2}$/; 
                 coupon = coupon.replace(/\s/g, '');
                 if (regex.test(coupon))

                 {
                  $.ajax({
                        type: 'post',
                        url : '{{route("couponCheck")}}',
                        data: {
                            _token: '{{ csrf_token() }}',
                            couponCode: $('#coupon').val(),
                      },
                        success: function (response) {
                          if(response.status == 'Active'){
                            var initialAmount = $('#amount').val();
                            var finalAmount = initialAmount - response.amount;
                            $('#amount').val(finalAmount);

                            $('#controllerSuccess').text('Coupon Succesfully Applied. Kshs.' + response.amount + ' has been deducted from the total cost. Welcome to TipwaTipwa');
                              $('#alertSuccuessModal').modal({backdrop: false});
                          } 
                          else if (response.status == 'Cancelled') {
                              $('#controllerError').text('Sorry. The coupon code is no longer valid');
                              $('#alertErrorModal').modal({backdrop: false});  
                          } else {
                            $('#controllerError').text('Sorry. The coupon code is wrong. Please Check each character and retry');
                              $('#alertErrorModal').modal({backdrop: false});
                          }

                          
                          
                        },
                        error: function () {
                          $('#controllerError').text('Your Request was not processed please check your connection.');
                          $('#alertErrorModal').modal({backdrop: false});
                        },
                    });
                }
                else {                  
                      $('#controllerError').text('Sorry. coupon code is wrong. Please Check each character and retry');
                      $('#alertErrorModal').modal({backdrop: false});
                }

    });
    </script>
@endsection