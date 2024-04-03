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
                <h1>Skin Treatment</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home')}}">Home</a></li>

                    <li>Skin Treatment</li>
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
                <a href="{{ route('acne-acne-marks-scars')}}"><div class="card main-treatment new">
                             <img src="{{ asset('/resources/assets/images/acne-acne-marks-scars.jpg')}}" alt="">
                            <div class="card-content">
                                <h2>
                                    Acne & Acne Marks & Scars

                                </h2>
                                <h2 class="txt-card">
                                    <a href="{{ route('acne-acne-marks-scars')}}"> View All</a>
                                </h2>


                            </div>
                        </div></a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">

                    <a href="{{ route('black-patches-facial-melanosis')}}"> <div class="card main-treatment new">
                             <img src="{{ asset('/resources/assets/images/Black-patches-Facial-Melanosis.jpg')}}" alt="">
                            <div class="card-content">
                                <h2>

                                     Black Patches & Facial Melanosis


                                </h2>
                                <h2 class="txt-card">
                                    <a href="{{ route('black-patches-facial-melanosis')}}"> View All</a>
                                </h2>
                            </div>
                        </div></a>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">

                    <a href="{{ route('vitiligo')}}"><div class="card main-treatment new">
                           <img src="{{ asset('/resources/assets/images/vitiligo.jpg')}}" alt="">
                            <div class="card-content">
                                <h2>

                                     Vitiligo

                                </h2>
                                <h2 class="txt-card">
                                    <a href="{{ route('vitiligo')}}"> View All</a>
                                </h2>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">

                    <a href="{{ route('chemical-peels')}}"><div class="card main-treatment new">
                             <img src="{{ asset('/resources/assets/images/chemical-peels.jpg')}}" alt="">
                            <div class="card-content">
                                <h2>

                                     Chemical Peels

                                </h2>
                                <h2 class="txt-card">
                                    <a href="{{ route('chemical-peels')}}"> View All</a>
                                </h2>
                            </div>
                        </div></a>
                    </div>

                </div>
                <div class="row mt-4">
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <a href="{{ route('facials')}}"><div class="card main-treatment new">
                           <img src="{{ asset('/resources/assets/images/facials.jpg')}}" alt="">
                            <div class="card-content">
                                <h2>
                                    Facials

                                </h2>
                                <h2 class="txt-card">
                                    <a href="{{ route('facials')}}"> View All</a>
                                </h2>


                            </div>
                        </div></a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">

                    <a href="{{ route('microdermabrasion-skin-polishing')}}"> <div class="card main-treatment new">
                            <img src="{{ asset('/resources/assets/images/microdermabrasion-skin polishing.jpg')}}" alt="">
                            <div class="card-content">
                                <h2>

                                     Microdermabrasion (Skin Polishing)


                                </h2>
                                <h2 class="txt-card">
                                    <a href="{{ route('microdermabrasion-skin-polishing')}}"> View All</a>
                                </h2>
                            </div>
                        </div></a>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">

                    <a href="{{ route('nails')}}"><div class="card main-treatment new">
                           <img src="{{ asset('/resources/assets/images/nail.jpg')}}" alt="">
                            <div class="card-content">
                                <h2>

                                    Nails

                                </h2>
                                <h2 class="txt-card">
                                    <a href="{{ route('nails')}}"> View All</a>
                                </h2>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">

                    <a href="{{ route('anti-ageing')}}"> <div class="card main-treatment new">
                             <img src="{{ asset('/resources/assets/images/anti-ageing.jpg')}}" alt="">
                            <div class="card-content">
                                <h2>

                                    anti-ageing

                                </h2>
                                <h2 class="txt-card">
                                    <a href="{{ route('anti-ageing')}}"> View All</a>
                                </h2>
                            </div>
                        </div></a>
                    </div>

                </div>
            </div>
        </div>
    </section>








    @stop