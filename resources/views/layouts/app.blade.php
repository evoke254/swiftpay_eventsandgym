<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.header')
<body data-spy="scroll" data-target="#header" data-offset="51">
    <div id="page-container" class="fade">
        @yield('content')
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/kahaki/scrollMonitor.js') }}"></script>
    <script src="{{ asset('js/kahaki/jquery.paroller.js') }}"></script>
    <script src="{{ asset('js/kahaki/apps.min.js') }}"></script>
    <script src="{{ asset('js/kahaki/stepper.js') }}"></script>
    <script src="{{ asset('js/kahaki/lightgallery-all.min.js') }}">
    @include('sweetalert::alert')
    @yield('scripts')
    <script>
        $(document).ready(function() {
            App.init();
            setTimeout(() => {  $('#alertCalendar').modal({backdrop: false}); }, 1500);

            
            var stepper = document.querySelector('.stepper');
            var stepperInstace = new MStepper(stepper, {
              // options
              firstActive: 0, // this is the default
             feedbackPreloader: '<div class="spinner-layer spinner-blue-only">...</div>'
           })
            var hashURL = location.hash;
            if(hashURL != "" && hashURL.length > 1){
                $(window).scrollTop(0);
                smoothScrollTo(hashURL);
            }

                    $('.cantBook').click(function(xee){
                        xee.preventDefault();
                        $('#controllerError').text('Sorry this event or class cannot be booked.');
                        $('#alertErrorModal').modal({backdrop: false});
                    });                         
                        /*
                                $(window).resize(function() {
                                    if ($(this).width() < 749) {
                                            $("div.col-md-1_5").removeClass('col-md-1_5');
                                        }
                                    else if ($(this).width() >= 750) {
                                            $("div.col-md-1_5").addClass('col-md-1_5');
                                    }
                                });
                        */
                    var currentDate = moment().format("YYYY-MM-DD");
                    if ($(window).width() < 749) {
                          $('div.'+currentDate).removeClass('d-none').addClass('d-inline-flex align-items-center flex-wrap');
                          $('div#wideScreen').not('.'+currentDate).remove();
                        }
         });
            $('#nextWeek').click(function(zee){
      zee.preventDefault();
      $('#getNextWeek').submit();
    });
    $('#prevWeek').click(function(yee){
      yee.preventDefault();
      $('#getPrevWeek').submit();
    });


    $('#getPrevDayEvents').click(function(f){
      f.preventDefault();

          var currentDate = moment().format('YYYY-MM-DD'); 
          
          var checkDate = moment($('#begin').val()).subtract(1, 'days').format('YYYY-MM-DD');
          if ( moment(checkDate).isSameOrBefore(currentDate)) {
            $('div.prev').removeClass('d-inline-flex align-items-center').addClass('d-none');
          } else {
            $('div.prev').removeClass('d-none').addClass('d-inline-flex align-items-center flex-wrap');
          }
                var newBegin = moment($('#begin1').val()).subtract(1, 'days').format('YYYY-MM-DD');
                  $.ajax({
                    type: 'get',
                    url : '/schedule',
                    dataType: "json",
                    data: {
                        _token: '{{ csrf_token() }}',
                        mobile: 'true',
                        prev : 'true',
                        begin: $('#begin').val(),
                },
                    success: function (response, status, xhr) {
                      $('#begin1').val(newBegin);
                      $('#begin').val(newBegin);
                      $('div#wideScreen').remove();
                      var count = Object.keys(response).length;
                      if (count == 0) {
                            $('#controllerSuccess').text('There are no events scheduled for this day. Please call us for enquiries or click on next to check what we have tomorrow. Asante');
                            $('#alertSuccuessModal').modal({backdrop: false});
                      } else {

                          var firstElement = response[0];
                          var eventStart = moment(firstElement.start).format('ddd Do');
                          $('#ajaxAppend').empty();
                          $('#ajaxAppend').append('<h5> <strong> '+eventStart+' </strong> </h5>')
                          $.each( response, function( key, value ) {
                            var start = moment(value.start);
                            var finish = moment(value.finish);
                            var duration = finish.diff(start, 'minutes');
                            $('#ajaxAppend').append('<div class="col-sm-1 w-100 text-center"><a href="/schedule_editor/'+value.id+'" class="" ><div class="col-sm-auto" id="myTooltip" data-toggle="tooltip" data-placement="right" title="'+value.desc+'">'+ value.title +' <br>'+ value.code+' </div></a><hr></div>');
                          });
                      }
                    },
                    error: function (response, status, xhr) {
                        $('#controllerError').text(response.error);
                        $('#alertErrorModal').modal({backdrop: false});
                    }
                  });
      
    });

        $('#getNextDayEvents').click(function(g){
          g.preventDefault();
          
          var currentDate = moment().format('YYYY-MM-DD');
        
          if ( moment($('#begin1').val()).isSameOrAfter(currentDate)) {
            $('div.prev').removeClass('d-none').addClass('d-inline-flex align-items-center flex-wrap');
          } else {
            $('div.prev').removeClass('d-inline-flex align-items-center').addClass('d-none');
          }

          var newBegin = moment($('#begin1').val()).add(1, 'days').format('YYYY-MM-DD');
          
                  $.ajax({
                    type: 'get',
                    url : '/schedule',
                    dataType: "json",
                    data: {
                        _token: '{{ csrf_token() }}',
                        mobile: 'true',
                        next : 'true',
                        begin: $('#begin1').val(),
                },
                    success: function (response, status, xhr) {
                      $('#begin1').val(newBegin);
                      $('#begin').val(newBegin);
                      $('div#wideScreen').remove();
                      var count = Object.keys(response).length;
                      if (count == 0) {
                            $('#controllerSuccess').text('There are no events scheduled for this day. Please call us for enquiries or click on next to check what we have tomorrow. Asante');
                            $('#alertSuccuessModal').modal({backdrop: false});
                      } else {

                          var firstElement = response[0];
                          var eventStart = moment(firstElement.start).format('ddd Do');
                          $('#ajaxAppend').empty();
                          $('#ajaxAppend').append('<h5> <strong> '+eventStart+' </strong> </h5>')
                          $.each( response, function( key, value ) {
                            var start = moment(value.start);
                            var finish = moment(value.finish);
                            var duration = finish.diff(start, 'minutes');
                            $('#ajaxAppend').append('<div class="col-sm-1 w-100 text-center"><a href="/schedule_editor/'+value.id+'" class="" ><div class="col-sm-auto" id="myTooltip" data-toggle="tooltip" data-placement="right" title="'+value.desc+'">'+ value.title +' <br>'+ moment(value.start).format('HH:mm') +' <br>'+ value.code +' </div></a><hr></div>');
                          });
                      }
                    },
                    error: function (response, status, xhr) {
                        $('#controllerError').text('Sorry you can only view current week\'s classes or events on Mobile.');
                        $('#alertErrorModal').modal({backdrop: false});
                    }
                  });



    });


        function smoothScrollTo(anchor) {
            
                $('a[href^="#"]').bind('click', function(event){
                    var anchor = $(this).attr('href');
                    smoothScrollTo(anchor);
                    return false;
                });
              //  alert(anchor);
                var duration= 2000; //time (milliseconds) it takes to reach anchor point
                var targetY = $(anchor).offset().top;
                $("html, body").animate({
                    scrollTop : targetY
                }, duration);
            }



    </script>
</body>
</html>