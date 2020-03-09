@php
    $description = '" "';

    $title = " ";

    $keywords = "";
@endphp
@extends('layouts.blog')
@section('content')

@include('partials.blog-nav')

<div id="page-title" class="page-title has-bg">
    <div class="bg-cover" data-paroller="true" data-paroller-factor="0.5" style="background: url({{ asset('images/Tipwa_Tipwa_car1.JPG') }}) center 0px / cover no-repeat"></div>
    <div class="container">
        <h1>TT Coach's Corner</h1>
<!--        <p>Blog Concept Front End Page</p> -->
    </div>
</div>

    <div id="content" class="content" style="margin-top: -2% !important">
        <div class="container">
            <div class="row w-100">
                <div class="col-md-9">
                    <div class="row  d-flex justify-content-center">
                        <div class="col z-depth-1 rounded p-0 mt-3 mr-5">
                            <div class="post-content">
                                <div class="post-image post-image-with-carousel">
                                    <div id="carousel-post" class="carousel slide" data-ride="carousel">
                                        <!-- begin carousel-indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-post" data-slide-to="0" class="active"></li>
                                        </ol>
                                        <div class="carousel-inner rounded-top">
                                            <div class="carousel-item active">
                                                <a href="/feb-2020-coachs-corner-tipwatipwa"><img class="d-block w-100 img-fluid img-responsive" style="height: 150px " src="{{ asset('images/Tipwa_Tipwa33.jpg') }}" alt="" /></a>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-post" role="button" data-slide="prev">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-post" role="button" data-slide="next">
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="post-info p-5" style="padding: 6% !important">
                                    <h4 class="post-title">
                                        <a href="/feb-2020-coachs-corner-tipwatipwa">Issue#3: February 2020 </a>
                                    </h4>
                                    <div class="post-by">
                                        Posted By <a href="#">admin</a> <span class="divider">|</span> 26 feb 2020
                                    </div>
                                    <div class="post-desc">Every four years we get an extra day to get fit and 2020 is one of those – let’s take advantage of the leap year that is and get an extra run or dance session in. Given that this month ends[...]
                                    </div>
                                    <div class="read-btn-container">
                                        <a href="/feb-2020-coachs-corner-tipwatipwa">Read More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                    </div>






                    <div class="col z-depth-1 rounded p-0 mt-3">
                            <div class="post-content">
                                <div class="post-image post-image-with-carousel">
                                    <div id="carousel-post" class="carousel slide" data-ride="carousel">
                                        <!-- begin carousel-indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-post" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-post" data-slide-to="1"></li>
                                            <li data-target="#carousel-post" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner rounded-top">
                                            <div class="carousel-item active">
                                                <a href="/jan-2020-coachs-corner-tipwatipwa"><img class="d-block w-100 img-fluid img-responsive" style="height: 150px " src="{{ asset('images/jan-2020-img1.jpeg') }}" alt="" /></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="/jan-2020-coachs-corner-tipwatipwa"><img class="d-block w-100 img-fluid img-responsive" style="height: 150px " src="{{ asset('images/jan_tt_coach.jpg') }}" alt="" /></a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="/jan-2020-coachs-corner-tipwatipwa"><img class="d-block w-100 img-fluid img-responsive" style="height: 150px " src="{{ asset('images/jan-2020-img.jpeg') }}" alt="" /></a>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-post" role="button" data-slide="prev">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-post" role="button" data-slide="next">
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="post-info p-5" style="padding: 6% !important">
                                    <h4 class="post-title">
                                        <a href="/jan-2020-coachs-corner-tipwatipwa">Issue#2: January 2020 </a>
                                    </h4>
                                    <div class="post-by">
                                        Posted By <a href="#">admin</a> <span class="divider">|</span> 10 Jan 2020
                                    </div>
                                    <div class="post-desc">With 2019 in the rear view, we can look back and say it was either a good year or not so good year, but isn’t it all relative? It depends on what you take into consideration, but for my corn[...]
                                    </div>
                                    <div class="read-btn-container">
                                        <a href="/jan-2020-coachs-corner-tipwatipwa">Read More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col z-depth-1 rounded p-0 mt-3" style="margin-left: 5%;">
                            <div class="post-content">
                                <div class="post-image post-image-with-carousel">
                                    <div id="carousel-post" class="carousel slide" data-ride="carousel">
                                        <!-- begin carousel-indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-post" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-post" data-slide-to="1"></li>
                                            <li data-target="#carousel-post" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner rounded-top">
                                            <div class="carousel-item active">
                                                <a href="/dec-2019-coachs-corner-tipwatipwa">
                                                    <img class="d-block w-100 img-fluid img-responsive" style="height: 150px " src="{{ asset('images/Tipwa_Tipwa_car1.JPG') }}" alt="" />
                                                </a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="/dec-2019-coachs-corner-tipwatipwa">
                                                    <img class="d-block w-100 img-fluid img-responsive" style="height: 150px " src="{{ asset('images/christmas.jpg') }}" alt="" />
                                                </a>
                                            </div>
                                            <div class="carousel-item">
                                                <a href="/dec-2019-coachs-corner-tipwatipwa">
                                                    <img class="d-block w-100 img-fluid img-responsive" style="height: 150px " src="{{ asset('images/Tipwa_Tipwa33.jpg') }}" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-post" role="button" data-slide="prev">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-post" role="button" data-slide="next">
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="post-info p-5" style="padding: 6% !important">
                                    <h4 class="post-title">
                                        <a href="/dec-2019-coachs-corner-tipwatipwa">Issue#1: December 2019 </a>
                                    </h4>
                                    <div class="post-by">
                                        Posted By <a href="#">admin</a> <span class="divider">|</span> 01 Dec 2019
                                    </div>
                                    <div class="post-desc">Hello all and welcome to our inaugural TT Coach’s Corner, where I’ll be sharing fitness related tips, info and advice. Hope it works for you. So, its December and we are now in that seas [...]
                                    </div>
                                    <div class="read-btn-container">
                                        <a href="/dec-2019-coachs-corner-tipwatipwa">Read More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                    </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
   
@include('partials.footer')     
@endsection
@section('scripts')

    <script>

    </script>
@endsection




                        <!--
                        <div class="post-li col-md-6">
                            <div class="post-content">
                                <div class="post-video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_5aKcpAhTOk" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="post-info">
                                    <h4 class="post-title">
                                        <a href="post_detail.html">Blog Post Video</a>
                                    </h4>
                                    <div class="post-by">
                                        Posted By <a href="#">admin</a> <span class="divider">|</span> Oct 18, 2018
                                    </div>
                                    <div class="post-desc">
                                        Praesent maximus malesuada purus, sit amet auctor velit scelerisque nec. Suspendisse eget pellentesque dui, ut egestas orci. 
                                        Proin eget massa et magna faucibus pulvinar. Quisque tortor orci, volutpat vel auctor non, varius a augue. Cras non ante arcu. 
                                        Phasellus sit amet dolor non est dictum convallis vel eu lectus. 
                                        Etiam consectetur non leo at auctor. Proin porttitor tellus arcu, in accumsan eros tincidunt eget[...]
                                    </div>
                                    <div class="read-btn-container">
                                        <a href="post_detail.html">Read More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->