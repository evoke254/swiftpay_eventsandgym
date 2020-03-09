
<header>
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active" data-interval="10000" style="background-image:linear-gradient(90deg, rgba(52,52,52,0.5) 25%, rgba(78,78,78,0.5648459212786677) 56%, rgba(88,88,88,0.33795516497614675) 84%, rgba(97,97,97,0) 100%), url('{{ asset('images/shots_of_wild1.jpeg') }}')">
        <div class="carousel-text-pos animated slideInRight slower">
          <div class="col-md-5">
              <h2 class="display-4 carousel-text-style"> {{$land_cont[0]->heading}} </h2>
              <p class="lead">{{$land_cont[0]->des}}</p>
          </div>
        </div>
        <div class="d-flex justify-content-center fixed-bottom mb-5 animated slideInLeft delay-2s slower">
          <a href=" {{route('home')}} ">
            <button type="button" class="align-bottom btn peach-gradient btn-rounded">
              <i class="ios-font ion-ios-desktop"></i>
                Browse Site
            </button>
          </a>
        </div>
      </div>


      
      <div class="carousel-item" data-interval="10000" style="background-image:linear-gradient(90deg, rgba(52,52,52,0.5) 25%, rgba(78,78,78,0.5648459212786677) 56%, rgba(88,88,88,0.33795516497614675) 84%, rgba(97,97,97,0) 100%), url('{{ asset('images/shots_of_wild2.jpeg') }}')">
        <div class="carousel-text-pos animated slideInRight slower">
          <div class="col-md-5">
              <h2 class="display-4 carousel-text-style"> {{$land_cont[1]->heading}} </h2>
              <p class="lead">{{$land_cont[1]->des}}</p>
          </div>
        </div>
        <div class=" d-flex justify-content-center fixed-bottom mb-5 ">
          <div class="row d-flex justify-content-center">
              <div class=" padding-0">
                <a href="/gallery">
                    <button type="button" class="btn btn-outline-warning btn-md waves-effect animated zoomIn delay-1s slower">
                              <i class="ios-font ion-ios-images"></i>
                            PHOTO GALLERY
                    </button>
                </a>
              </div>
              <div class=" padding-0">
                <a href="/home#contact">
                  <button type="button" class="btn btn-outline-warning waves-effect btn-md animated zoomIn delay-4s slower">
                        <i class="ios-font ion-ios-phone-portrait"></i>
                      CONTACT US
                  </button>
                </a>
              </div>
              <div class=" padding-0">
                <a href="/prints">
                    <button type="button" class="btn btn-outline-warning waves-effect btn-md animated zoomIn delay-1s slower">
                                <i class="ios-font ion-ios-paw"></i>
                              PRINTS
                    </button>
                </a>
              </div>
              <div class=" padding-0">
                <a href="/home#about">
                    <button type="button" class="btn btn-outline-warning waves-effect btn-md animated zoomIn delay-4s slower">
                                <i class="ios-font ion-ios-camera"></i>
                              ABOUT
                    </button>
                </a>
              </div>
          </div>
      </div>
    </div>
      <div class="carousel-item" data-interval="10000" style="background-image:linear-gradient(90deg, rgba(52,52,52,0.9) 25%, rgba(78,78,78,0.6) 56%, rgba(88,88,88,0.4) 84%, rgba(97,97,97,0) 100%), url('{{ asset('images/shots_of_wild3.jpeg') }}')">
        <div class="carousel-text-pos animated slideInRight slower">
          <div class="col-md-5">
            <h2 class="display-4 carousel-text-style"> {{$land_cont[2]->heading}} </h2>
            <p class="lead"> {{$land_cont[2]->des}} </p>
          </div>
        </div>
        <div class=" d-flex justify-content-center fixed-bottom mb-5 ">
          <div class="row d-flex justify-content-center">
              <!--<div class=" padding-0">
                  <a href="/bookings">
                      <button type="button" class="btn btn-dark-green btn-md waves-effect animated zoomInLeft delay-2s slower">
                                <i class="ios-font ion-ios-alarm"></i>
                              BOOKINGS
                      </button>
                  </a>
              </div> -->
              <div class=" padding-0">
                  <a href="/safaris">        
                    <button type="button" class="btn btn-dark-green waves-effect btn-md animated zoomInLeft delay-2s slower">
                                <i class="ios-font ion-ios-heart-empty"></i>
                              PHOTOGRAPHY SAFARIS
                    </button>
                  </a>
              </div>
              <div class=" padding-0">
                <a href="/home#csr">
                    <button type="button" class="btn btn-dark-green waves-effect btn-md animated zoomInLeft delay-2s slower">
                                <i class="ios-font ion-ios-planet"></i>
                              CORPORATE SOCAIL RESPONSIBILITY
                    </button>
                </a>
              </div>
          </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>