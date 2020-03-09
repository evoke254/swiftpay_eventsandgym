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

<div class="content" data-scrollview="true">
  <div class="container " data-animation="true" data-animation-type="fadeInUp">
    <div class="row d-flex justify-content-center">
      <div class="col-md-4 text-center">
        <h2>{{ config('app.name', 'Kahaki Softwares') }} Bookings</h2>
      </div>
    </div>
      <div class="row d-flex justify-content-center">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name | Phone</th>
                  <th scope="col">Class/Event</th>
                  <th scope="col">Slots</th>
                  <th scope="col">Transaction Code</th>
                  <th scope="col">Status</th>
                  <th scope="col">Details</th>
                </tr>
              </thead>
              <tbody class="table-striped">
                  @php
                    $count = 0;
                  @endphp
                @foreach($bookings as $key => $booking)
                @php $count++; @endphp 
                  <tr scope="row">
                    <td> {{$count}} </td>
                    <td> 
                      @foreach($users as $user)
                        @if ($user->id == $booking->user_id)
                          {{$user->fname }} <strong>{{$user->number}}</strong>
                        @endif
                      @endforeach
                    </td>
                    <td> {{$booking->title}} </td>
<!--                    <td> {{$booking->pay_option}} </td> -->
                    <td> {{$booking->slots}} </td>
                    <td> {{$booking->booking_code}} </td>
                    <td> {{$booking->status}} </td>
                    <td> <a href="/admin/bookings/{{$booking->id}}" class="btn btn-sm btn-dark-green">More ...</a>  </td>
                  </tr>
                @endforeach    
              </tbody>
            </table>
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