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
					<h3 class="tipwaname"> TipwaTipwa </h3>
			</div>
			</a>
		</div>
		<div class="collapse navbar-collapse align-top" id="header-navbar">
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item"><a class="nav-link active" href="/">Home </a></li>
<!--				<li class="nav-item"><a class="nav-link" href="/#about">About</a></li> -->
				<li class="nav-item"><a class="nav-link" href="/schedule">TT Schedule</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link" href="#" data-toggle="dropdown"><i class=" ion-ios-gift"></i> TT Services <b class="caret"></b></a>
					<div class="dropdown-menu dropdown-menu-left animated fadeInDown">
						<a href="/services" class="dropdown-item">Indoor Fun</a>
						<a href="/outdoor_services" class="dropdown-item">Outdoor Fun</a>
						<a href="/events" class="dropdown-item">Trail Hikes & More... </a>
						<a href="/teambuilding" class="dropdown-item">Team Building </a>
					</div>
				</li>
				<li class="nav-item"> <a href="/gallery" class="nav-link"> Gallery </a></li>
				<li class="nav-item"><a class="nav-link" href="/#contact">Contact</a></li>
				<li class="nav-item"><a class="nav-link" href="/blog">Coach's Corner</a></li>
				<li class="nav-item"><a class="nav-link" href="/trainers">Trainers</a></li>
				@guest
				<li class="nav-item dropdown">
					<a class="nav-link" href="#" data-toggle="dropdown"><i class=" ion-ios-keypad"></i> Sign In <b class="caret"></b> </a>
					<div class="dropdown-menu dropdown-menu-left animated fadeInDown">
						<a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
						 @if (Route::has('register'))
						 <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
						 @endif
					</div>
				</li>
				@endguest
				@auth
				<li class="nav-item dropdown">
					<a class="nav-link" href="#" data-toggle="dropdown"><i class=" ion-ios-keypad"></i> {{ Auth::user()->fname }} {{ Auth::user()->lname }} <b class="caret"></b> </a>
					<div class="dropdown-menu dropdown-menu-left animated fadeInDown">
						 <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }}
                          </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
					</div>
				</li>
				@endauth
			</ul>
		</div>
	</div>
</div>
