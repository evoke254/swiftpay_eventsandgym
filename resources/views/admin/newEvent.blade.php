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
          <div class="col-md-12 text-center">
            <h2> Create / Edit an Event </h2>
          </div>
        </div>
        <div class="row d-flex justify-content-center">

        <form method="POST" action="maineventEditor" enctype="multipart/form-data">
            <input type="hidden" name="eventId" id="eventId" />
            <input type="hidden" name="event_id" id="event_id" />
           <div class="row w-100">
              <div class="col-md-6">
              <div class="form-group row">
                <label for='title' class="col-sm-3 col-form-label"> Title</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" id="title" name="title">
                </div>
              </div>
                <div class="form-group row" >
                  <div class="col-md-12">
                  <label for='start' class="col-sm-3 col-form-label"> Start</label>
                      <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                          <input type="text" name="start" id="start" class="form-control datetimepicker-input" data-target="#datetimepicker1" >
                          <div class="input-group-append" data-target="#datetimepicker1" id="startdiv" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for='status' class="col-sm-3 col-form-label"> Status</label>
                  <div class="col-md-12">
                    <select class="form-control" id="status" name="status">
                      <option value="Active">Active</option>
                      <option value="Cancelled">Cancelled</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for='image' class="col-sm-3 col-form-label"> Image</label>
                  <div class="col-md-12">
                    <a href="" data-lightbox="kahaki" id="lightboxImg">
                      <img src="" class="img-responsive" id="shImage" style="width: 150px;" alt="Kahaki Images">
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">  
              <div class="form-group row">
                <label for='venue' class="col-sm-3 col-form-label"> Venue</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" id="venue" name="venue">
                </div>
              </div>
                <div class="form-group row">
                  <div class="col-md-12">
                  <label for='start' class="col-sm-3 col-form-label"> Finish</label>
                      <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                          <input type="text" name="finish" id="finish" class="form-control datetimepicker-input" data-target="#datetimepicker2"/>
                          <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
                </div>
              <div class="form-group row">
                <label for='title' class="col-sm-3 col-form-label"> Cost</label>
                <div class="col-md-12">
                  <input type="number" class="form-control" id="cost" name="cost">
                </div>
              </div>
              <div class="form-group row">
                <label for='title' class="col-sm-3 col-form-label"> Image</label>
                <div class="col-md-12">
                  <input type="file" name="image" id="image" class="m-2"/>
                </div>
              </div>
              </div>
           </div>
           <div class="row">
              <div class="col-md-12">
                <label for="desc" class="col-sm-3 col-form-label">Description</label>
                <div class="col-md-12">
                  <textarea id="desc" class="form-control" name="desc"></textarea>
                </div>
              </div>
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-md btn-dark-green" id="createClassEvent">Create Event</button>            
              </div>
           </div>
        </form>
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