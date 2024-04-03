@php($title = "Skinzone")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')


<!-- page-title -->
<!-- <section class="page-title sep-page">

    <div class="auto-container">
        <div class="upper-box">
            <div class="row clearfix">

                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title gal">
                            <span class="sub-title "></span>
                            <h2>Diploma in Trichologist</h2>
                        </div>
                        <div class="text">
                            <p>Know More About Course.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section> -->
<!-- page-title end -->




<!-- page-title -->
<section class="page-title service-details">
    <div class="bg-layer serv-breadscrum-sec"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Skin Tightening Laser

            </h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home')}}">Home</a></li>
                <li><a href="{{ route('laser-treatment')}}">Laser Treatment</a></li>

                <li>Skin Tightening Laser

                </li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->


<!-- service-details -->
<section class="service-details-page sec-pad">
    <div class="auto-container">
        <div class="row clearfix">


            <div class="col-lg-8 col-md-8 col-sm-12 content-side">
                <div class="service-details-content">
                    <div class="content-one">
                        <h2>RadioFrequency (RF) Skin Tightening


                        </h2>
                        <figure class="image-box"><img src="{{ asset('/resources/assets/images/skin-tightening-laser-single.png')}}" alt=""></figure>
                        <h2 class="course-txt1">Overview:</h2>

                        <div class="text single-item1">
                            <p>RF is a deeply penetrating light that is absorbed by water in the dermis (second layer of the skin) to cause both shrinking of loose tissue immediately, as well as long term collagen production that lifts and tightens loose skin over time.  


                            </p>
                            <p>Correctable conditions include early stages of saggy brows, eyelids, crow’s feet, nasolabial lines, jowls, and double chin. Perfect for patients in their late 30’s and 40’s to reverse early changes BEFORE surgery is needed in order to postpone or prevent the need.
                                </p>
                                <p>Most patients get 4-6 sessions done every 20 days. Each session takes less than 45 minutes in an office setting. Serial sessions, depending on the areas and severity, are completed within three months. Thereafter, maintenance is required once in 3-6 months.


                                </p>
                                <p>Super skin rejuvenation program, uses combined treatments of RF skin tightening, BOTOX®, and synthetic fillers to sculpt a saggy or heavy face. No incision is used.</p>
                        </div>
                    </div>
                    <div class="content-side">
                    <div class="faq-content">
                        <div class="upper-box">
                            <!-- <div class="title">
                                <h2>I Would Like to Know About</h2>
                            </div> -->

                        </div>
                        <ul class="accordion-box">
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <div class="icon-outer"><i class="flaticon-down-arrow"></i></div>
                                    <h4>1. When and What Results Might Be Expected? How long does the results last ?</h4>
                                </div>
                                <div class="acc-content current servtxt" style="display: block;">
                                    <div class="text ">
                                        <p>Some immediate tightening followed by gradual improvement of skin laxity over three months is expected. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="flaticon-down-arrow"></i></div>
                                    <h4>2. What is the recovery like? When can I return to work and activities ? </h4>
                                </div>
                                <div class="acc-content servtxt" style="display: none;">
                                    <div class="text">
                                        <p>There is no downtime. One may experience mild redness and minimal swelling that lasts for up to 20-30 minutes. Following each treatment, you can immediately resume all routine activities.</p>
                                    </div>
                                </div>
                            </li>

                           
                        </ul>
                    </div>
                </div>
                  

                   


                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 ">
                @include('includes.laser-treatment-sidebar')
            </div>

        </div>
    </div>
</section>
<!-- service-details end -->




@stop