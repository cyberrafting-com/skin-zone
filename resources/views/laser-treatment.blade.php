@php($title = "Skinzone")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<div class="boxed_wrapper">

    <!-- page-title end -->
    <section class="page-title service-details">
        <div class="bg-layer serv-breadscrum-sec"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Laser Treatment</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home')}}">Home</a></li>

                    <li>Laser Treatment</li>
                </ul>
            </div>
        </div>
    </section>


    <!-- contact-info-section -->
    <section class="video-section">
        <div class="auto-container">

            <div class="lower-box">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                        <a href="{{ route('laser-pigmentation')}}">
                            <div class="card main-treatment new">
                                <img src="{{ asset('/resources/assets/images/laser-pigmentation.jpg')}}" alt="">
                                <div class="card-content">
                                    <h2>
                                        Laser for Pigmentation


                                    </h2>
                                    <h2 class="txt-card">
                                        <a href="{{ route('laser-pigmentation')}}"> View All</a>
                                    </h2>


                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">

                        <a href="{{ route('hair-removal')}}">
                            <div class="card main-treatment new">
                                <img src="{{ asset('/resources/assets/images/hair-removal.jpg')}}" alt="">
                                <div class="card-content">
                                    <h2>

                                        Hair Removal


                                    </h2>
                                    <h2 class="txt-card">
                                        <a href="{{ route('hair-removal')}}"> View All</a>
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">

                        <a href="{{ route('fractional-laser-co2-mnrf')}}">
                            <div class="card main-treatment new">
                                <img src="{{ asset('/resources/assets/images/fractional-laser-CO2-mnRF.jpg')}}" alt="">
                                <div class="card-content">
                                    <h2>

                                        Fractional Laser (CO2 & MNRF)

                                    </h2>
                                    <h2 class="txt-card">
                                        <a href="{{ route('fractional-laser-co2-mnrf')}}"> View All</a>
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">

                        <a href="{{ route('skin-tightening-laser')}}">
                            <div class="card main-treatment new">
                                <img src="{{ asset('/resources/assets/images/skin-tightening-laser.jpg')}}" alt="">
                                <div class="card-content">
                                    <h2>

                                        Skin Tightening Laser

                                    </h2>
                                    <h2 class="txt-card">
                                        <a href="{{ route('skin-tightening-laser')}}"> View All</a>
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>








    @stop