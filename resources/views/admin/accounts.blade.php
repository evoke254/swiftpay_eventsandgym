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
    <div class="row d-flex justify-content-center">
      <div class="col-md-4 text-center">
        <h2>{{ config('app.name', 'Kahaki Softwares') }} Customer Accounts</h2>
      </div>
    </div>
      <div class="row d-flex justify-content-center">
          <div class="col-md-12">
            <table class="table">
              {{ $accounts->links() }}
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Names</th>
                  <th scope="col">Account ID</th>
                  <th scope="col">Ballance</th>
                  <th scope="col">Status</th>
                  <th scope="col">Details</th>
                </tr>
              </thead>
              <tbody class="table-striped">
                @foreach($accounts as $key => $account)
                  <tr scope="row">
                    <td> {{$key+1}} </td>
                    <td> {{$account->names}} </td>
                    <td> {{$account->accId}} </td>
                    <td> {{$account->ammount}} </td>
                    <td> {{$account->status}} </td>
                    <td> <a href="/bookings/{{$booking->id}}" class="btn btn-sm btn-dark-green">More ...</a>  </td>
                  </tr>
                @endforeach    
              </tbody>
              {{ $accounts->links() }}
            </table>
          </div>
      </div>
  </div>
</div>


@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
@endsection