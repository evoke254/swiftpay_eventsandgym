@extends('admin.app')
@section('content')

@php
if (\Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'http://') || \Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'https://')) {
    $user_avatar = Auth::user()->avatar;
} else {
    $user_avatar = asset('storage/users/user.png');
}
@endphp

@include('voyager::dashboard.sidebar')
<main class="page-content">
@include('voyager::dashboard.navbar')

<div class="content" data-scrollview="true" style="margin-top: 2%">
  <div class="container " data-animation="true" data-animation-type="fadeInUp">
    <div class="card">
      <div class="card-body">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8 text-center">
            <h2>Booking Details : {{$booking->booking_code}} </h2>
          </div>
        </div>
          <div class="row d-flex justify-content-center">
              <div class="col-md-6">
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Booking Status</strong></label>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="title" name="title" value="{{$booking->status}}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Phone Number</strong></label>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$user->number}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Number of Slots</strong></label>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="title" name="title" value="{{$booking->slots}}">
                    </div>
                  </div>
                  <div class="form-group row input-group">
                    <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Amount</strong></label>
                      <div class="input-group-prepend align-items-center">
                        <span class="input-group text-center">Kshs.</span>
                      </div>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="cost" value="{{$booking->amount}}">
                    </div>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Customer Name</strong></label>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$user->fname}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Payment Option</strong></label>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$booking->pay_option}}">
                    </div>
                  </div>
                  @php
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Event Status</strong></label>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$class_event->status}}">
                    </div>
                  </div>
              </div>
              <div class="col-md-12"><hr></div>
                            <div class="col-md-6">
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Title</strong></label>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="title" name="title" value="{{$class_event->title}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-auto col-form-label"><strong>Description</strong></label>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$class_event->desc}}">
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
                    <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Venue</strong></label>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$class_event->venue}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Trainer</strong></label>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$trainer->fname ?? 'TT'}} {{$trainer->lname ?? 'Studio'}}">
                    </div>
                  </div>
                  <div class="form-group row input-group">
                    <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Cost</strong></label>
                      <div class="input-group-prepend align-items-center">
                        <span class="input-group text-center">Kshs.</span>
                      </div>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="cost" value="{{$class_event->cost}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Event Status</strong></label>
                    <div class="col-md-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$class_event->status}}">
                    </div>
                  </div>
              </div>
          </div>

      </div>
    </div>
  </div>
</div>
</main>



@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
@endsection