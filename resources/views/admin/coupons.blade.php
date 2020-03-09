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
            <h2>{{ config('app.name', 'Kahaki Softwares') }} Coupons</h2>
          </div>
        </div>
          <div class="row d-flex justify-content-center">
              <div class="col-md-12">
                <table class="table">
                  {{ $coupons->links() }}
                  <thead>
                  <button class="btn btn-sm btn-dark-green" id="createCoupon"><i class="ion-ios-add-circle-outline"></i> Add Coupon</button>
                    <tr>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Coupon Code</th>
                      <th scope="col">Description</th>
                      <th scope="col">Amount (Kshs.)</th>
                      <th scope="col">Valid From</th>
                      <th scope="col"> To </th>
                      <th scope="col">Status</th>
                      <th scope="col">Activate | Cancel</th>
                    </tr>
                  </thead>
                  <tbody class="table-striped">
                    @foreach($coupons as $key => $coupon)
                      <tr scope="row">
                        <td> {{$key+1}} </td>
                        <td> {{$coupon->code}} </td>
                        <td> {{$coupon->desc}} </td>
                        <td> {{$coupon->amount}} </td>
                        <td> {{ date('M, jS Y', strtotime($coupon->validFrom)) }} </td>
                        <td> {{ date('M, jS Y', strtotime($coupon->validTo)) }} </td>
                        <td> {{$coupon->status}} </td>
                        <td> 
                        <form action="{{ route('coupons.update', $coupon->id) }}" method="post" >
                              @csrf
                              @if($coupon->status == 'Cancelled')
                                  <input type="hidden" name="_method" value="put" />
                                  <input type="hidden" name="id" value="{{ $coupon->id }}" />
                                  <button type="submit" class="btn btn-sm btn-dark-green">Activate </button>
                              @elseif($coupon->status == 'Active')
                                  <input type="hidden" name="_method" value="put" />
                                  <input type="hidden" name="id" value="{{ $coupon->id }}" />
                                  <button type="submit" class="btn btn-sm btn-danger">Cancel </button> 
                              @endif

                        </form>
                        </td>
                      </tr>
                    @endforeach    
                  </tbody>
                  {{ $coupons->links() }}
                </table>
              </div>
          </div>
      </div>
    </div>

    <div class="modal fade" id="createKahakiCoupon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100" id="myModalLabel">Create New Coupon</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="" id="couponForm">

               <div class="row">
                  <div class="col-md-6">
                      <div id="etitle" class="form-group row">
                          <label class="col-sm-4 col-form-label"><span class="text-danger">*</span>Title</label>
                          <div class="col-md-12">
                              <input type="text" name="title" id="title" class="form-control" placeholder="Coupon Title" required="Please Enter Description" />
                          </div>
                      </div>
                      <div class="form-group row" >
                        <div class="col-md-12">
                        <label for='start' class="col-sm-4 col-form-label"><span class="text-danger">*</span>Valid From </label>
                            <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                <input type="text" name="getStart" id="getStart" class="form-control datetimepicker-input" data-target="#datetimepicker1" required="">
                                <div class="input-group-append" data-target="#datetimepicker1" id="startdiv" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="form-group row">
                          <label for='status' class="col-sm-4 col-form-label"><span class="text-danger">*</span>Status</label>
                          <div class="col-md-12">
                            <select class="form-control" id="getStatus" name="getStatus" required="A status is required">
                              <option value="Active">Active</option>
                              <option value="Cancelled">Cancelled</option>
                            </select>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">  
                      <div class="form-group row input-group" id="evenue">
                        <label for='venue' class="col-sm-3 col-form-label"><span class="text-danger">*</span>Amount</label>
                        <div class="col-md-12">
                          <input type="number" class="form-control" id="amount" name="amount" placeholder="Coupon Value" required="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-md-12">
                        <label for='start' class="col-sm-auto col-form-label"><span class="text-danger">*</span> Valid Until</label>
                            <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                                <input type="text" name="getFinish" id="getFinish" class="form-control datetimepicker-input" data-target="#datetimepicker2" required="" />
                                <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                      </div> 
                      <div class="form-group row input-group" id="evenue">
                        <label for='venue' class="col-sm-auto col-form-label text-green"><span class="text-danger">*</span>Redeemable for :</label>
                        <div class="col-md-12">
                          <input type="number" class="form-control" id="redeemable" name="redeemable" placeholder="How many classes | Events?" required="">
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
             
                        <button type="button" class="btn btn-md btn-grey" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-md btn-dark-green" id="generateCoupon">Generate Coupon</button>
                  </div>
              </div>
            </form>
        </div>
      </div>
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
              <h6 id="controllerSuccess">Coupon Succesfully Generated.</h6>
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
              <h6 class="text-danger" id="controllerError">Something is not right. Check that all fields have been properly filled before submitting the form. <br>If this error persists please contact Kahaki on 0742968713</h6>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="alertMessageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-sm modal-notify success" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title w-100" id="myModalLabel">Error</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
             <div class="text-center">
              <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
              <h6 class="text-danger" id="controllerError"></h6>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
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
    
    $.fn.datetimepicker.Constructor.Default = $.extend({}, $.fn.datetimepicker.Constructor.Default, {
            icons: {
                time: 'icon ion-ios-time',
                date: 'icon ion-ios-calendar',
                up: 'icon ion-ios-arrow-dropup',
                down: 'icon ion-ios-arrow-dropdown',
                previous: 'icon ion-ios-arrow-dropleft',
                next: 'icon ion-ios-arrow-dropright',
                today: 'icon ion-ios-calendar',
                clear: 'icon ion-ios-trash',
                close: 'icon ion-ios-close-circle-outline'
            } });


      $('#createCoupon').click(function(){
            $('#createKahakiCoupon').modal({backdrop: false});
      });


       $(function () {
                $('#datetimepicker1').datetimepicker({
                  format : 'YYYY-MM-DD HH:mm:ss',
                });
            });
        $(function () {
          $('#datetimepicker2').datetimepicker({
            format : 'YYYY-MM-DD HH:mm:ss',
          });
      });

            $('#generateCoupon').click(function(e) {
                  e.preventDefault();
                  $.ajax({
                    type: 'POST',
                    url : '/coupons',
                    dataType: "json",
                    data: {
                        _token: '{{ csrf_token() }}',
                        title: $('#title').val(),
                        redeemable: $('#redeemable').val(),
                        validFrom: $('#getStart').val(),
                        amount: $('#amount').val(),
                        validTo: $('#getFinish').val(),
                        status: $('#getStatus').val(),
                },
                    success: function (response, status, xhr) {
                      $('#controllerSuccess').text(response.success);
                      $('#alertSuccuessModal').modal({backdrop: false});
                      location.reload();
                    },
                    error: function (response, status, xhr) {
                      $('#controllerError').text(response.error);
                      $('#alertErrorModal').modal({backdrop: false});
                    }
                  });
                  //$('#createKahakiCoupon').modal('hide');
              });

        });
    </script>
@endsection