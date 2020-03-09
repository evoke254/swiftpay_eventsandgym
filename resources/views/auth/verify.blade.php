@php
    $description =' "We are all about putting oneself through fun yet rigorous group exercise activities that both push and rejuvenate the whole body- muscle, mind and spirit. It’s about working in groups and enjoying the great outdoors; all the while pushing one’s activity levels higher, with the goal of getting the cardiovascular and muscular systems to function at their optimum. It is about challenging oneself to be healthy physically and nutritiously and thus maintain a healthy diet and fitness lifestyle." ';

    $year = date("Y");
    
    $title = "TipwaTipwa - ".$year. " - Spin Cycling Nairobi, Gym Spin, Best Gym in Kenya, Premier fitness centre, gyms in nairobi, TipwaTipwa fitness studio, Weight loss, workout, spin cycle, Triathlons, Trainers, spin in Nairobi, Spin in Lavington, Spin cycling, Yoga in Nairobi, Lavington Gym, lavington Fitness centre, ";
    
    $keywords = date("Y"). " - Premier fitness centre, gyms in nairobi, TipwaTipwa fitness studion, Weight loss, workout, spin cycle, Triathlons, Trainers, spin in Nairobi, Spin in Lavington, Spin cycling, Yoga in Nairobi, Lavington Gym, lavington Fitness centre, Best Gym Westlands, Tipwatipwa Tetema, Nairobi Gyms, ca ";

@endphp
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
