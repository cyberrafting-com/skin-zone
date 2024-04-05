@php($title = "Skinzone")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<div class="boxed_wrapper">


    <video id="carouselExampleControls" width="100%" autoplay="" muted="" loop="" class="desktop-view-video">
        <source src="{{ asset('/resources/assets/images/where-mumbai-goes-for-beauty-video.mp4')}}" type="video/mp4">
    </video>


    <!-- banner-style-three -->
    <section class="banner-style-three centred mobile-view-img">
        <div class="banner-carousel owl-theme owl-carousel ">
            <div class="slide-item">
                <!-- <div class="image-layer" style="background-image: url({{ asset('/resources/assets/images/mobile-view-banner1.jpg')}});"></div> -->
                <div class="auto-container banner-sec">
                    <div class="content-box">
                        <!-- <p>Committed to Quality Service</p> -->
                        <h2><span class="first">Where Mumbai Goes </span></h2>
                        <h2><span class="two">for </span> <span class="sec-txt-title">Beauty</span></h2>
                        <div class="btn-box aptt">
                            <a href="{{ route('appointment')}}" class="theme-btn light">Book Appointment</a>
                        </div>
                        <div class="btn-box">
                            <li> <a href="https://www.facebook.com/drskinzone/"><i class="fa-brands fa-facebook"></i></a></li>
                            <li> <a href="https://youtube.com/channel/UCVZ7ILFupIFMprvm3lRlE3g"><i class="fa-brands fa-youtube"></i></a></li>
                            <li> <a href="https://www.instagram.com/drskinzone/"><i class="fa-brands fa-instagram"></i></a></li>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- banner-style-three end -->

    <!-- Why Choose Skin Zone Clinics -->
    <section class="newsletter-section">
        <div class="auto-container">
            <div class="inner-container">

                <div class="row">
                    <div class="sec-title centred">

                        <h2 class=""> Welcome to Our Trusted SKIN ZONE Center
                        </h2>
                        <!-- <span class="sub-title">Why Choose Skin Zone Clinics</span> -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 form-column">
                        <div class="icon first"><i class="fa-solid fa-briefcase-medical icon-chose"></i></div>
                        <p class="icon-txt">35+ Years Experience</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 form-column">
                        <div class="icon first"><i class="fas fa-user-md icon-chose"></i></div>
                        <p class="icon-txt">Certified Surgeons</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 form-column">
                        <div class="icon first"><i class="fas fa-hand-holding-medical icon-chose"></i></div>
                        <p class="icon-txt">Guaranteed Safety</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 form-column">
                        <div class="icon first"><i class="fa-solid fa-user-group icon-chose"></i></div>
                        <p class="icon-txt">Friendly & Knowledgeable Staff</p>
                    </div>


                </div>




            </div>
        </div>

    </section>
    <!-- newsletter-section end -->




    <!-- banner-section -->
    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
     
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/resources/assets/images/skin-zone-banner1.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item desktop-img">
                <img src="{{ asset('/resources/assets/images/Banner2.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item mobile-img">
                <img src="{{ asset('/resources/assets/images/banner-mobile view.jpg')}}" class="d-block w-100" alt="...">
            </div>
        </div>
      
    </div> -->
    <!-- banner-section end -->

    <!-- <section class="excellence-section">
        <div class="auto-container">
            <div class="row  align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="content-box nre">
                       
                        <div class="inner-box" style="background: radial-gradient(#e945a6, #1a1214);">

                            <div class="text">
                                <h3>Our Treatments</h3>
                             
                            </div>
                            <ul class="list-style-one clearfix">
                                <li>Hair loss in women</li>
                                <li>Alopecia areata</li>
                                <li>Dandruff</li>
                                <li>Acne & Acne marks and scars</li>
                                <li>Black patches & Facial Melanosis</li>
                                <li>Vitiligo</li>
                                <li>Laser for pigmentation</li>
                                <li>Hair removal</li>
                                <li>Skin tightening laser</li>
                            </ul>
                          
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                      
                        <div class="inner-box" style="background: radial-gradient(#e945a6, #1a1214);">

                            <div class="text">
                                <h3>Our Timings</h3>
                                <p>Monday-Saturday</p>
                            </div>
                            <ul class="list-style-one clearfix">
                                <li>10:00 am - 1:30 pm & 4:30 pm - 8:30</li>

                            </ul>
                            <div class="text">

                                <p>Sunday:</p>
                            </div>
                            <ul class="list-style-one clearfix">
                                <li>Closed</li>

                            </ul>
                            <div class="text">
                                <h3>Our Location</h3>
                                <p>
                                    No.404, Vini Elegance, L. T. Road, Borivali West, above Tanishq Jewellers, Mumbai, Maharashtra 400092</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> -->



    <!-- about-style-two -->
    <section class="about-style-two sec-pad">
        <div class="container-fluid">
            <div class="upper-box">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <figure class="image-box"><img src="{{ asset('/resources/assets/images/abt-img1.png')}}" alt=""></figure>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box hom-abt">
                            <div class="sec-title">

                                <h2 class="abt-txtt1 ">Your confidence is our priority</h2>
                                <h2 class="abt-txtt">Skinzone Clinics</h2>
                            </div>
                            <div class="text">
                                <p>We provide our patients with a thoughtful treatment journey that honors and safeguards their skin, utilizing various aesthetic solutions that complement each other harmoniously. These methods have been thoroughly tested and proven effective, reflecting our unwavering confidence in them.</p>
                                <p> Our commitment to our patients extends beyond their appointments. We strive to create a lasting impact on their skin rather than just a temporary fix, ensuring that their treatment journey is transparent in its objectives, intelligent in its methodology, and mindful of their skin's long-term well-being. Welcome to Skinzone Clinic.</p>

                                <span class="sub-title1">Dr. Girish K Shah , Founder,
                                </span><br>
                                <span class="sub-title1">
                                    Director and Head of Dermatology Department </span>

                            </div>

                            <a href="{{ route('about')}}" class="abt-btn"> Read More</a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- main 3 treatments start -->



    <!-- -hair treatment-- -->
    <!-- All treatments -->
    <section class="project-style-two">
        <div class="auto-container all-treat">
            <!-- <div class="sec-title">
                    <span class="sub-title">Research</span>
                    <h2>Latest from case studies</h2>
                    <div class="btn-box"><a href="index-2.html" class="theme-btn">View More</a></div>
                </div> -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-12 project-block">
                    <div class="project-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('/resources/assets/images/hair.jpg')}}" alt=""></figure>
                            <div class="content-box">
                                <!-- <div class="view-btn"><a href="assets/images/project/project-7.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div> -->
                                <div class="text">
                                    <h6>Hair</h6>
                                    <h4><a href="{{ route('hair-treatment')}}" class="border-b">Hair loss in men</a></h4>
                                    <h4><a href="{{ route('hair-treatment')}}">Hair loss in women </a></h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 project-block">
                    <div class="project-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('/resources/assets/images/skin.jpg')}}" alt=""></figure>
                            <div class="content-box">
                                <!-- <div class="view-btn"><a href="assets/images/project/project-8.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div> -->
                                <div class="text">
                                    <h6>Skin</h6>
                                    <h4><a href="{{ route('skin-treatment')}}" class="border-b">Fillers and Botox</a></h4>
                                    <h4><a href="{{ route('skin-treatment')}}" class="border-b">Skin tightening</a></h4>
                                    <h4><a href="{{ route('skin-treatment')}}" class="border-b">Facelift</a></h4>
                                    <h4><a href="{{ route('skin-treatment')}}" >HIFU</a></h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 project-block">
                    <div class="project-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('/resources/assets/images/IV-lounge.jpg')}}" alt=""></figure>
                            <div class="content-box">
                                <!-- <div class="view-btn"><a href="assets/images/project/project-8.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div> -->
                                <div class="text">
                                    <h6>IV LOUNGE</h6>
                                    <h4><a href="#" class="border-b">Glutathione</a></h4>
                                    <h4><a href="#" class="border-b">Vitamin C</a></h4>
                                    <h4><a href="#" class="border-b">Multi Complex Vitamins</a></h4>
                                    <h4><a href="#" >HIFU</a></h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 project-block">
                    <div class="project-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('/resources/assets/images/laser.jpg')}}" alt=""></figure>
                            <div class="content-box">
                                <!-- <div class="view-btn"><a href="assets/images/project/project-9.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div> -->
                                <div class="text">
                                    <h6>Laser</h6>
                                    <h4><a href="{{ route('laser-treatment')}}" class="border-b">Pigmentation</a></h4>
                                    <h4><a href="{{ route('laser-treatment')}}" class="border-b">Hair removal</a></h4>
                                    <h4><a href="{{ route('laser-treatment')}}" class="border-b" >Fractional Co2 & MNRF</a></h4>
                                    <h4><a href="{{ route('laser-treatment')}}" >Skin tightening</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- All treatments end -->






    <!-- <section class="main-tret">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card main-treatment">
                    <img src="{{ asset('/resources/assets/images/hair.jpg')}}" alt="">
                    <div class="card-content">
                        <h2>
                            Hair
                        </h2>
                        <h2 class="txt-card">
                            <a href="{{ route('home')}}#hair-treatment"> View All</a>
                        </h2>

                     
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card main-treatment">
                    <img src="{{ asset('/resources/assets/images/skin.jpg')}}" alt="">
                    <div class="card-content">
                        <h2>
                            Skin

                        </h2>
                        <h2 class="txt-card">
                            <a href="{{ route('home')}}#skin-treatment"> View All</a>
                        </h2>
                     
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card main-treatment">
                    <img src="{{ asset('/resources/assets/images/laser.jpg')}}" alt="">
                    <div class="card-content">
                        <h2>
                            Laser
                        </h2>
                        <h2 class="txt-card">
                            <a href="{{ route('home')}}#laser-treatment"> View All</a>
                        </h2>
                   
                    </div>
                </div>
            </div>


        </div>

    </section> -->
    <!-- main 3 treatments start -->
    <!-- <section class="book-appt-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="book-appt-area">
                        <h3>To Book Appointment</h3>

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="book-appt-area sec1">

                        <a href="tel:+91 9892637341">
                            <h4>Call Us</h4>
                            <h5>+91 9892637341</h5>
                        </a>

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="book-appt-area sec1">


                        <a href="mailto:pawaskaraditya@gmail.com">
                            <h4>Email Us</h4>
                            <h5>connect@skinzone.in</h5>
                        </a>
                    </div>

                </div>
            </div>


        </div>
    </section> -->











    <!-- choose treatment section -->
    <!-- <section class="">

    <div class="sec-title-choose-treat centred">
       
        <h2>Choose a Treatment </h2>
    </div>
    <div class="container">
        <div class="choose-treat-sec">
            <div class="row justify-content-center chose-r">
                <div class="col-lg-4 col-md-4 col-sm-12 image-column1">
                    <div class="choose-treat-sec">
                        <div class="choose-treat1">
                            <figure class="image-box"><img src="{{ asset('/resources/assets/images/icon-dandruff.png')}}" alt=""></figure>
                        </div>
                        <div class="choose-treat2">
                            <h2>Dandruff</h2>
                            <p>Scalp Care Solutions</p>


                        </div>


                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 image-column2">
                    <div class="choose-treat-sec">
                        <div class="choose-treat1">
                            <figure class="image-box"><img src="{{ asset('/resources/assets/images/icon-hairfall.png')}}" alt=""></figure>
                        </div>
                        <div class="choose-treat2">
                            <h2>Hair loss</h2>
                            <p>Thinning Hair Solutions</p>


                        </div>


                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 image-column3">
                    <div class="choose-treat-sec">
                        <div class="choose-treat1">
                            <figure class="image-box"><img src="{{ asset('/resources/assets/images/icon-laser.png')}}" alt=""></figure>
                        </div>
                        <div class="choose-treat2">
                            <h2>Laser for pigmentation</h2>
                            <p> Treatments for Skin Blemishes </p>


                        </div>


                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 image-column4">
                    <div class="choose-treat-sec">
                        <div class="choose-treat1">
                            <figure class="image-box"><img src="{{ asset('/resources/assets/images/icon-hairlaser.png')}}" alt=""></figure>
                        </div>
                        <div class="choose-treat2">
                            <h2>Hair removal</h2>
                            <p>Smooth Skin Solutions</p>


                        </div>


                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 image-column5">
                    <div class="choose-treat-sec">
                        <div class="choose-treat1">
                            <figure class="image-box"><img src="{{ asset('/resources/assets/images/icon-facial.png')}}" alt=""></figure>
                        </div>
                        <div class="choose-treat2">
                            <h2>Facials</h2>
                            <p>Revitalizing Skin Treatments</p>



                        </div>


                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 image-column6">
                    <div class="choose-treat-sec">
                        <div class="choose-treat1">
                            <figure class="image-box"><img src="{{ asset('/resources/assets/images/icon-peeling.png')}}" alt=""></figure>
                        </div>
                        <div class="choose-treat2">
                            <h2>Chemical peels</h2>
                            <p> Renewal Skin Therapy</p>



                        </div>


                    </div>
                </div>




            </div>
        </div>

    </div>
</section> -->
    <!-- choose treatment section end -->

    <!-- Treatments-section-start -->
    <!-- <section class="team-section sec-pad" >
    <div class="auto-container">
        <div class="sec-title centred">
         
            <h2 class="text-white">Treatments
            </h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('/resources/assets/images/Hair-loss-women.png')}}" alt=""></figure>
                            <div class="lower-content">
                            <h3><a href="#">Hair loss in women</a></h3>

                        </div>
                            

                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('/resources/assets/images/alopecia-areata.png')}}" alt=""></figure>

                        </div>
                 
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('/resources/assets/images/dandruff.png')}}" alt=""></figure>


                        </div>
                      
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('/resources/assets/images/Hair-removal.png')}}" alt=""></figure>


                        </div>
                   
                    </div>
                </div>
            </div>

        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('/resources/assets/images/acne-acne-marks-scars.png')}}" alt=""></figure>

                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('/resources/assets/images/Black-patches-Facial-Melanosis.png')}}" alt=""></figure>

                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('/resources/assets/images/vitiligo.png')}}" alt=""></figure>


                        </div>
                     
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('/resources/assets/images/laser-pigmentation.png')}}" alt=""></figure>


                        </div>
                       
                    </div>
                </div>
            </div>

        </div>
       
    </div>
</section> -->
    <!-- Treatments-section-end -->



    <!-- NEW hair treatment section -->

    <!-- NEW hair treatment section end -->

    <!---hair treatment-- -->


    <!-- <section class="tret">
        <div class="sec-title centred">

            <h2 class="" id="hair-treatment"> Hair Treatments
            </h2>
            <span class="sub-title">Revitalize and Rejuvenate Your Hair with Our Expert Solutions</span>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <a href="{{ route('hair-loss-in-women')}}">
                    <div class="card">
                        <img src="{{ asset('/resources/assets/images/Hair-loss-women.jpg')}}" alt="">
                        <div class="card-content">
                            <h2>
                                Hair Loss in Women
                            </h2>
                       
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <a href="{{ route('hair-loss-in-men')}}">
                    <div class="card">
                        <img src="{{ asset('/resources/assets/images/hair-loss-men.jpg')}}" alt="">
                        <div class="card-content">
                            <h2>
                                Hair Loss in Men

                            </h2>
                         
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <a href="{{ route('dandruff')}}">
                    <div class="card">
                        <img src="{{ asset('/resources/assets/images/dandruff.jpg')}}" alt="">
                        <div class="card-content">
                            <h2>
                                Dandruff
                            </h2>
                          
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <a href="{{ route('alopecia-areata')}}">
                    <div class="card">
                        <img src="{{ asset('/resources/assets/images/alopecia-areata.jpg')}}" alt="">
                        <div class="card-content">
                            <h2>
                                Alopecia Areata
                            </h2>
                     

                        </div>
                    </div>
                </a>
            </div>

        </div>

    </section> -->

    <!-- -skin treatment-- -->
    <!-- <section class="tret skin1">
        <div class="sec-title centred">

            <h2 class="" id="skin-treatment"> Skin Treatments
            </h2>
            <span class="sub-title">Achieve Radiant Skin with Our Specialized Treatments</span>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <a href="{{ route('acne-acne-marks-scars')}}">
                    <div class="card">
                        <img src="{{ asset('/resources/assets/images/acne-acne-marks-scars.jpg')}}" alt="">
                        <div class="card-content">
                            <h2>
                                Acne & Acne Marks and Scars
                            </h2>
                        
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <a href="{{ route('black-patches-facial-melanosis')}}">
                    <div class="card">
                        <img src="{{ asset('/resources/assets/images/Black-patches-Facial-Melanosis.jpg')}}" alt="">
                        <div class="card-content">
                            <h2>
                                Black Patches & Facial Melanosis

                            </h2>
                      
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <a href="{{ route('vitiligo')}}">
                    <div class="card">
                        <img src="{{ asset('/resources/assets/images/vitiligo.jpg')}}" alt="">
                        <div class="card-content">
                            <h2>
                                Vitiligo
                            </h2>
                          
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <a href="{{ route('chemical-peels')}}">
                    <div class="card">
                        <img src="{{ asset('/resources/assets/images/chemical-peels.jpg')}}" alt="">
                        <div class="card-content">
                            <h2>
                                Chemical Peels
                            </h2>
                        

                        </div>
                    </div>
                </a>
            </div>

        </div>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <a href="{{ route('facials')}}">
                    <div class="card treat-skin">
                        <img src="{{ asset('/resources/assets/images/facials.jpg')}}" alt="">
                        <div class="card-content">
                            <h2>
                                Facials
                            </h2>
                          
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <a href="{{ route('microdermabrasion-skin-polishing')}}">
                    <div class="card treat-skin">
                        <img src="{{ asset('/resources/assets/images/microdermabrasion-skin polishing.jpg')}}" alt="">
                        <div class="card-content">
                            <h2>
                                Microdermabrasion (Skin Polishing)
                            </h2>
                         
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <a href="{{ route('nails')}}">
                    <div class="card treat-skin">
                        <img src="{{ asset('/resources/assets/images/nail.jpg')}}" alt="">
                        <div class="card-content">
                            <h2>
                                Nails
                            </h2>
                         
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <a href="{{ route('anti-ageing')}}">
                    <div class="card treat-skin">
                        <img src="{{ asset('/resources/assets/images/anti-ageing.jpg')}}" alt="">
                        <div class="card-content">
                            <h2>
                                Anti Ageing
                            </h2>
                           
                        </div>
                    </div>
                </a>
            </div>

        </div>



    </section> -->


    <!-- -laser treatment-- -->
    <!-- <section class="tret laser1">
        <div class="sec-title centred">

            <h2 class="" id="laser-treatment"> Laser Treatments
            </h2>
            <span class="sub-title">Experience Precision and Efficiency with Our Advanced Laser Treatments</span>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <a href="{{ route('laser-pigmentation')}}">
                    <div class="card">
                        <img src="{{ asset('/resources/assets/images/laser-pigmentation.jpg')}}" alt="">
                        <div class="card-content">
                            <h2>
                                Laser for Pigmentation

                            </h2>
                       
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <a href="{{ route('hair-removal')}}">
                    <div class="card">
                        <img src="{{ asset('/resources/assets/images/hair-removal.jpg')}}" alt="">
                        <div class="card-content">
                            <h2>
                                Hair Removal

                            </h2>
                       
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <a href="{{ route('fractional-laser-co2-mnrf')}}">
                    <div class="card">
                        <img src="{{ asset('/resources/assets/images/fractional-laser-CO2-mnRF.jpg')}}" alt="">
                        <div class="card-content">
                            <h2>
                                Fractional Laser (CO2 & MNRF)
                            </h2>
                       
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <a href="{{ route('skin-tightening-laser')}}">
                    <div class="card">
                        <img src="{{ asset('/resources/assets/images/skin-tightening-laser.jpg')}}" alt="">
                        <div class="card-content">
                            <h2>
                                Skin Tightening Laser

                            </h2>
                    

                        </div>
                    </div>
                </a>
            </div>

        </div>




    </section> -->

    <!-- -laser treatment-- -->





    <!-- before after images -->

    <section class="service-section bg-color-1 sec-pad1">
        <div class="container-fluid before-after-sec">
            <div class="sec-title">

                <h2>Before and After Images</h2>
                <span class="sub-title">Images are Indicative, Result May Vary Person to Person.</span>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/resources/assets/images/before-after-img.jpg')}}" alt=""></a></figure>

                        </div>

                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/resources/assets/images/Vitiligo-patch-treated-by-Melanocytes-transplant-1.jpg')}}" alt=""></a></figure>

                        </div>

                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/resources/assets/images/Acne-acne-scars-over-the-face.jpg')}}" alt=""></a></figure>

                        </div>

                    </div>
                </div>
                <!-- ------- -->

                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/resources/assets/images/Copy-of-Laser-treatment-of-scar-on-face.jpg')}}" alt=""></a></figure>

                        </div>

                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/resources/assets/images/Copy-of-Scar-ear.jpg')}}" alt=""></a></figure>

                        </div>

                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/resources/assets/images/Full-face-LPP-treatment.jpg')}}" alt=""></a></figure>

                        </div>

                    </div>
                </div>
                <!-- ------- -->

                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/resources/assets/images/Laser-Hair-Reduction-beard-area.jpg')}}" alt=""></a></figure>

                        </div>

                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/resources/assets/images/Laser-Hair-Reduction-of-under-arm.jpg')}}" alt=""></a></figure>

                        </div>

                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/resources/assets/images/Laser-treatment-of-pigmentation-on-back.jpg')}}" alt=""></a></figure>

                        </div>

                    </div>
                </div>
                <!-- ------- -->


                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/resources/assets/images/Laser-treatment-on-patches-over-the-face.jpg')}}" alt=""></a></figure>

                        </div>

                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/resources/assets/images/LPP-treated-by-laser-1.jpg')}}" alt=""></a></figure>

                        </div>

                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/resources/assets/images/PRP-2.jpg')}}" alt=""></a></figure>

                        </div>

                    </div>
                </div>
                <!-- ------- -->

                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/resources/assets/images/Copy-of-Scar-revision-over-glabella.jpg')}}" alt=""></a></figure>

                        </div>

                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/resources/assets/images/Laser-Hair-reduction-neck-and-chin-pt-1.jpg')}}" alt=""></a></figure>

                        </div>

                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/resources/assets/images/Vitiligo-angle-of-mouth-1.jpg')}}" alt=""></a></figure>

                        </div>

                    </div>
                </div>
                <!-- ------- -->


                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/resources/assets/images/Vitiligo-face-treatment-1-1.jpg')}}" alt=""></a></figure>

                        </div>

                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/resources/assets/images/Vitiligo-hand-treated-by-melanocytes-transplant-1.jpg')}}" alt=""></a></figure>

                        </div>

                    </div>
                </div>
                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('/resources/assets/images/Vitiligo-over-the-face-1.jpg')}}" alt=""></a></figure>

                        </div>

                    </div>
                </div>
                <!-- ------- -->







            </div>
        </div>
    </section>
    <!-- service-section end -->

    <!-- footer book appointmet button -->
    <section class="book-appt-footer" style="background-image: url({{ asset('/resources/assets/images/Clinic-reception_front-footer.png')}});background-position:center;background-size: over;background-repeat: no-repeat;width: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="book-appt-footer1">
                        <h3>To Book Appointment Call</h3>


                        <a href="tel:+91 9892637341">

                            <h5>
                                <div class="icon-box footer"><i class="flaticon-dial-pad f-banner-i"></i></div>+91 9892637341
                            </h5>
                        </a>
                        <a href="tel:022-28986018">

                            <h5>
                                <div class="icon-box footer"><i class="flaticon-dial-pad f-banner-i"></i></div>022-28986018
                            </h5>
                        </a>


                        <a href="mailto:connect@skinzone.in">

                            <h5>
                                <div class="icon-box footer"><i class="fa-solid fa-envelope f-banner-i"></i></div>connect@skinzone.in
                            </h5>
                        </a>

                    </div>

                </div>

            </div>


        </div>
    </section>
</div>












@stop