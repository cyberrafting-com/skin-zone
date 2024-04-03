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
                <h1>Get in Touch</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home')}}">Home</a></li>

                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>


    <!-- contact-info-section -->
    <section class="contact-info-section">
        <div class="auto-container">
            <!-- <div class="upper-box">
            <div class="row clearfix">

                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <span class="sub-title"></span>
                            <h2>Get in Touch</h2>
                        </div>
                        <div class="text">
                            <p>To get in touch with us.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div> -->
            <div class="lower-box">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <div class="icon-box"><i class="flaticon-pin"></i></div>
                            <h3>Location</h3>
                            <p> <span class="isti-txt">No. 404, Vini Elegance, <br> L. T. Road, Borivali West, Mumbai, Maharashtra 400092

                            </p>
                            <!-- <h6><a href="contact.html">Check Location<i class="flaticon-right-arrow"></i></a></h6> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <div class="icon-box"><i class="flaticon-phone-call-1"></i></div>
                            <h3>Get Call Back </h3>
                            <h3 class="cont-num1"><a href="tel:+919892637341">+91 9892637341</a></h3>
                            <h3><a href="tel:022-28986018"> 022-28986018</a></h3>
                            <!-- <p>Mon to Sat: 9.00am to 5.00pm <br />Sun: 9.00am to 12.00pm</p> -->

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <div class="icon-box"><i class="flaticon-message"></i></div>
                            <h3>Connect With Us </h3>
                            <h3><a href="mailto:connect@skinzone.in"> connect@skinzone.in</a></h3>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-section end -->
    <section class="cont-map">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <!-- location-style-two -->
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7534.478779890869!2d72.852651!3d19.228396!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x115a8b0433a30d35%3A0x186089b2e3a42bd9!2sSkin%20Zone.%20Dr.%20Girish%20K%20Shah!5e0!3m2!1sen!2sus!4v1706694116096!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <section class="contact-section ">
                        <div class="auto-container">
                            <div class="row clearfix">
                                <div class="col-xl-12 col-lg-12 col-md-12  inner-column">
                                    <div class="inner-box">

                                        <div class="form-inner">
                                            @if(session('success'))
                                            <p style="color: green; font-size:18px;">{{ session('success') }}</p>
                                            @endif
                                            @if(session('error'))
                                            <p style="color: red; font-size:18px;">{{ session('error') }}</p>
                                            @endif
                                            <form method="post" action="{{ route('saveContact') }}" id="contact-form">
                                                @csrf
                                                <input type="text" name="{{session('cr_honey')}}" style="display:none" />

                                                <div class="row clearfix">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                        <label>Name</label>
                                                        <i class="fa-solid fa-circle-user"></i>
                                                        <input type="text" name="fname" placeholder="User Name" required="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                        <label>Email</label>
                                                        <i class="fa-solid fa-envelope"></i>
                                                        <input type="email" name="mail" required="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                        <label>Phone Number</label>
                                                        <i class="fa-solid fa-phone-flip"></i>
                                                        <input type="text" name="phone" required="" placeholder="Phone">
                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                        <label>Message</label>
                                                        <i class="fa-sharp fa-solid fa-text-width"></i>
                                                        <textarea name="msg"></textarea>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                                        <button type="submit" class="theme-btn" name="submit-form" value="submit">Send Message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>










    @stop