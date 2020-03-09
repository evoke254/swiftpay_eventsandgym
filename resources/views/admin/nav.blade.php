<div id="header" class="header navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header kahaki-navbar">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand">
      <div class=" logo-img d-flex align-items-center" style="float: left;">
          <img class="float-left img-responsive rounded" style="max-height: 80px !important;" src="{{ asset('images/logo.jpg') }}">
          
      </div>
      <div class="tipwaname d-flex align-items-center" style="float: left;">
          <h3> Admin </h3>
      </div>
      </a>
    </div>
    <div class="collapse navbar-collapse align-top" id="header-navbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item dropdown"><a class="nav-link" href="/bookings"> Bookings </a> </li>
        <li class="nav-item dropdown"><a class="nav-link" href="/accounts"> Accounts </a> </li>
        <li class="nav-item dropdown"><a class="nav-link" href="/coupons"> Coupons </a> </li>
        <li class="nav-item dropdown"><a class="nav-link" href="/schedule_editor">TT Schedule </a>
          <!--<b class="caret"></b>
          <div class="dropdown-menu dropdown-menu-left animated fadeInDown">
            <a class="dropdown-item" href="/addEvent">Add Event/Class</a>
          </div> -->
        </li>
        <li class="nav-item dropdown"> <a href="/admin_gallery" class="nav-link"> Gallery </a></li>
      <!--  <li class="nav-item dropdown">
          <a class="nav-link" href="#" data-toggle="dropdown"><i class="icon ion-ios-keypad"></i> More <b class="caret"></b> </a>
          <div class="dropdown-menu dropdown-menu-left animated fadeInDown">
            <a class="dropdown-item" href="/trainers">Gym Trainers</a>
          </div>
        </li> -->
      </ul>
    </div>
  </div>
</div>
