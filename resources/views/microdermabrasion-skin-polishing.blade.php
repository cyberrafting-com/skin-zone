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
            <h1>Microdermabrasion (Skin Polishing)


            </h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home')}}">Home</a></li>
                <li><a href="{{ route('skin-treatment')}}">Skin Treatment</a></li>

                <li>Microdermabrasion (Skin Polishing)





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
                        <h2>Microdermabrasion (Skin Polishing)


                        </h2>
                        <figure class="image-box"><img src="{{ asset('/resources/assets/images/microdermabrasion-skin-polishing-single.png')}}" alt=""></figure>
                        <h2 class="course-txt1">Overview</h2>

                        <div class="text single-item1">
                            <p>MICRODERMABRASION (SKIN POLISHING) is a scientific procedure that uses micro crystals of aluminum oxide to progressively abrade the skin surface. It is helping thousands of men and women to experience painless facial rejuvenation and improvement in skin appearance, texture, and tone. This procedure imparts glow to the skin.




                            </p>
                            <p>Microdermabrasion is not painful and anesthesia is not required. You will be able to see immediate results as this unique approach removes dead and flaking skin cells and stimulates production of fresh young skin cells and collagen.


                            </p>
                            <p>For best results initial series of 4-6 treatments is recommended 2-3 weeks apart followed by maintenance treatments as infrequently as every two to three months.

                            </p>

                            <p>It is safe for all skin types and colors.

                            </p>
                        </div>
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
                                    <h4>1. Who should consider Microdermabrasion ?</h4>
                                </div>
                                <div class="acc-content current servtxt" style="display: block;">
                                    <div class="text ">
                                        <p>Microdermabrasion is right for all skin types and for anyone interested in minimizing the appearance of: Scarring. Fine lines. Pigmentation problems. Uneven skin tones. Dull, lifeless and sun-damaged skin. Prior to any function.

                                        </p>
                                    </div>
                                </div>
                            </li>



                        </ul>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 ">
                @include('includes.skin-treatment-sidebar')
            </div>

        </div>
    </div>
</section>
<!-- service-details end -->




@stop