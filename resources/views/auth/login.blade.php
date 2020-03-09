@php
    $description =' "We are all about putting oneself through fun yet rigorous group exercise activities that both push and rejuvenate the whole body- muscle, mind and spirit. It’s about working in groups and enjoying the great outdoors; all the while pushing one’s activity levels higher, with the goal of getting the cardiovascular and muscular systems to function at their optimum. It is about challenging oneself to be healthy physically and nutritiously and thus maintain a healthy diet and fitness lifestyle." ';

    $year = date("Y");
    
    $title = "TipwaTipwa - ".$year. " - Spin Cycling Nairobi, Gym Spin, Best Gym in Kenya, Premier fitness centre, gyms in nairobi, TipwaTipwa fitness studio, Weight loss, workout, spin cycle, Triathlons, Trainers, spin in Nairobi, Spin in Lavington, Spin cycling, Yoga in Nairobi, Lavington Gym, lavington Fitness centre, ";
    
    $keywords = date("Y"). " - Premier fitness centre, gyms in nairobi, TipwaTipwa fitness studion, Weight loss, workout, spin cycle, Triathlons, Trainers, spin in Nairobi, Spin in Lavington, Spin cycling, Yoga in Nairobi, Lavington Gym, lavington Fitness centre, Best Gym Westlands, Tipwatipwa Tetema, Nairobi Gyms, ca ";

@endphp
@extends('layouts.app')

@section('content')
<div class="content home overflow-hidden" style="height: 700px; overflow: hidden; background: url({{ asset('images/elgon/tipwa_tipwa_elgon04.jpg') }}); background-size: cover;">

            <div class="row d-flex justify-content-center login-form ">
                <div class="col-md-8 col-sm-2 align-items-center">
                    <div class="card text-center login-card">
                        <div class="card-body text-center">
                            <h4 class="text-center text-danger">* Login</h4>
                            <img class="img-responsive rounded z-depth-1 mb-4" style="max-height: 100px" src="{{ asset('images/img/kahaki_logo.png') }}">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row mb-4">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label ml-2" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0 text-center">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-md btn-dark-green">
                                            {{ __('Login') }}
                                        </button>
                                        <a href="/register">
                                            <button type="button" class="btn btn-md btn-amber">
                                                {{ __('Register') }}
                                            </button>
                                        </a>
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection
