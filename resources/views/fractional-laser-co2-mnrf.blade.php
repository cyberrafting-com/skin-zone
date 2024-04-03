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
            <h1>Fractional Laser (CO2 & mnRF)

            </h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home')}}">Home</a></li>
                <li><a href="{{ route('laser-treatment')}}">Laser Treatment</a></li>

                <li>Fractional laser (CO2 & mnRF)

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
                        <h2>Fractional Laser (CO2 & mnRF) : Benefits


                        </h2>
                        <figure class="image-box"><img src="{{ asset('/resources/assets/images/fractional-laser-co2-mnrf-single.png')}}" alt=""></figure>
                        <h2 class="course-txt1">What is Fractional Laser ?</h2>

                        <div class="text single-item1">
                            <p>Fractional Laser is an advanced skincare treatment that utilizes either CO2 or mnRF technology to deliver precise laser energy to targeted areas of the skin. This fractional approach stimulates collagen production and promotes skin renewal, resulting in smoother, healthier-looking skin.

                            </p>
                          
                        </div>
                    </div>
                    <div class="content-two">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                                <div class="content-box">
                                    <div class="text">
                                        <h2>CO2 Fractional Laser:</h2>

                                    </div>
                                    <div class="inner-box">
                                        <div class="single-item1">
                                            <p>CO2 Fractional Laser treatment is highly effective for reducing wrinkles, fine lines, and acne scars. It also improves skin texture and tone, leaving you with a more youthful appearance.</p>




                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="content-two">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                                <div class="content-box">
                                    <div class="text">
                                        <h2>mnRF Fractional Laser:</h2>

                                    </div>
                                    <div class="inner-box">
                                        <div class="single-item1">
                                            <!-- <h3>Facial and neck pigmentations are common in middle-aged women, and  Caused by –</h3> -->

                                            <div class="image-inner">
                                                <p>mnRF Fractional Laser treatment offers a non-ablative approach to skin rejuvenation. It targets specific layers of the skin to improve elasticity, reduce pigmentation, and enhance overall skin quality.</p>
                                                <!-- <ul class="list-item clearfix">
                                                    <li>If you have only swelling and pain but no oozing of pus then try soaking your feet in warm water for about 15 to 20 minutes every day followed by pushing skin away from the toenail edge with a cotton ball soaked in olive oil.


                                                    </li>
                                                    <li>If pain, swelling and oozing persists then see your dermatologist for partial nail removal along with localised matrixectomy This surgery prevents recurrence of ingrown toenail in 98% of patients.

                                                    </li>
                                                    <p>Your toenail will likely grow back a few months after a partial nail removal surgery. Ingrown toenails can be prevented by making several lifestyle changes: such as Trimming toenails straight across, avoiding cutting toenails too short and wearing proper fitting shoes.</p>



                                                </ul> -->

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    <div class="content-two">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                                <div class="content-box">
                                    <div class="text">
                                        <h2>Benefits of Anti-Aging:</h2>

                                    </div>
                                    <div class="inner-box">
                                        <div class="single-item1">
                                            <!-- <h3>Facial and neck pigmentations are common in middle-aged women, and  Caused by –</h3> -->

                                            <div class="image-inner">
                                              
                                                <ul class="list-item clearfix">
                                                    <li>Smoother Skin Texture


                                                    </li>
                                                    <li>Reduced Wrinkles and Fine Lines

                                                    </li>
                                                    <li>Minimized Acne Scars</li>
                                                    <li>Improved Skin Tone and Pigmentation</li>
                                                    <li>Enhanced Collagen Production</li>
                                                    <li>Minimal Downtime</li>
                                                   


                                                </ul>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

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