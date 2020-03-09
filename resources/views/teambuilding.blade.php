@php
	$description =' " We offer a transformational outdoor experience using  hikes and games which result in better communication, energized and motivated teams We target high achieving teams or individuals who are exhausted, tired, stress and unmotivated or groups ,friends, family who just want to spend time together having fun outdoors."';

	$year = date("Y");
	
	$title = "Teambuilding Nairobi Kenya - ".$year. " - We provide fun and adventure and a great opportunity to forge bonds with your workmates, friends, family using  hikes, Games & Sports. In Kenya, Tanzania Uganda and beyond. ";
	
	$keywords = date("Y"). " - Hikes and team building in kenya";

@endphp
@extends('layouts.app')
@section('content')
        @include('partials.nav')
        @include('partials.team')
        @include('partials.footer')
@endsection
@section('scripts')

@endsection