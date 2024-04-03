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
            <h1>Book Appointment</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home')}}">Home</a></li>
                

                <li>Book Appointment
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->


<section class="cont-map">
        <div class="container">
            <div class="row justify-content-center">
               
                <div class="col-lg-10 col-md-10 col-sm-12 mt-5">
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