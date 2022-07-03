@extends('layouts.website.app')

@section('content')

 <!-- Banner Section -->
 <section class="page-banner">
        <div class="image-layer" style="background-image:url({{ URL::asset('website/image/6.jpg') }})"></div>
        <div class="banner-bottom-pattern"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Stay Touch with us</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Contact Section-->
    <section class="contact-section-two">
        <div class="auto-container clearfix">
            <div class="row clearfix">

                <div class="info-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="u-text">Lorem ipsum dolor sit consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore.</div>

                        <div class="info">
                            <div class="info-block">
                                <div class="block-inner">
                                    <div class="icon-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms"><span class="flaticon-placeholder-1"></span></div>
                                    <h4>Address</h4>
                                    <div class="text">Uttara, Dhaka, Bangladesh.</div>
                                </div>
                            </div>
                            <div class="info-block">
                                <div class="block-inner">
                                    <div class="icon-box wow zoomInStable" data-wow-delay="300ms" data-wow-duration="2000ms"><span class="flaticon-technology-2"></span></div>
                                    <h4>Phone Number</h4>
                                    <div class="text">
                                        <a href="phn: 01770184332">01770184332</a> <br>
                                        <a href="phn: 01628863003">01628863003</a>
                                    </div>
                                </div>
                            </div>
                            <div class="info-block">
                                <div class="block-inner">
                                    <div class="icon-box wow zoomInStable" data-wow-delay="600ms" data-wow-duration="2000ms"><span class="flaticon-email-1"></span></div>
                                    <h4>Email Address</h4>
                                    <div class="text">
                                        <a href="mailto:info@resort.com">info@resort.com</a> <br>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection