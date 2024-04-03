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
                <h1>Hair Treatment</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home')}}">Home</a></li>

                    <li>Hair Treatment</li>
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
                    <a href="{{ route('hair-loss-in-women')}}"> <div class="card main-treatment new">
                            <img src="{{ asset('/resources/assets/images/Hair-loss-women.jpg')}}" alt="">
                            <div class="card-content">
                                <h2>
                                    Hair Loss in Women

                                </h2>
                                <h2 class="txt-card">
                                    <a href="{{ route('hair-loss-in-women')}}"> View All</a>
                                </h2>


                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">

                    <a href="{{ route('hair-loss-in-men')}}"><div class="card main-treatment new">
                            <img src="{{ asset('/resources/assets/images/hair-loss-men.jpg')}}" alt="">
                            <div class="card-content">
                                <h2>

                                    Hair Loss in Men


                                </h2>
                                <h2 class="txt-card">
                                    <a href="{{ route('hair-loss-in-men')}}"> View All</a>
                                </h2>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">

                    <a href="{{ route('dandruff')}}">  <div class="card main-treatment new">
                            <img src="{{ asset('/resources/assets/images/dandruff.jpg')}}" alt="">
                            <div class="card-content">
                                <h2>

                                    Dandruff

                                </h2>
                                <h2 class="txt-card">
                                    <a href="{{ route('dandruff')}}"> View All</a>
                                </h2>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">

                    <a href="{{ route('alopecia-areata')}}"> <div class="card main-treatment new">
                            <img src="{{ asset('/resources/assets/images/alopecia-areata.jpg')}}" alt="">
                            <div class="card-content">
                                <h2>

                                    Alopecia Areata

                                </h2>
                                <h2 class="txt-card">
                                    <a href="{{ route('alopecia-areata')}}"> View All</a>
                                </h2>
                            </div>
                        </div></a>
                    </div>

                </div>
            </div>
        </div>
    </section>








    @stop