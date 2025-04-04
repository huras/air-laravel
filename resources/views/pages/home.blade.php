@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="hero-section text-white bg-black">
    <div class="container min-vh-100 d-flex align-items-center">
        <div class="row w-100">
            <div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center text-center home-hero-wrapper">
                <h1 class="display-3 fw-light home-hero-text">Respiramos</h1>
                <h1 class="display-3 fw-light home-hero-text-secondary">influência.</h1>
            </div>
            <div class="col-lg-6 col-md-12 d-flex justify-content-center align-items-center home-hero-wrapper">
                <img src="{{ asset('images/air_logo_home.png') }}" alt="Air Logo Stroke" class="img-fluid hero-logo">
            </div>
        </div>
    </div>

    <div class="container-fluid px-0 d-flex align-items-center">
        <img src="{{ asset('images/home_bg_1.png') }}" alt="Air Logo Stroke" class="img-fluid w-100 hero-imgs-1">
        <img src="{{ asset('images/home_bg_2.png') }}" alt="Air Logo Stroke" class="img-fluid pe-4 w-100 hero-imgs-2">
    </div>
</section>


@endsection
