@extends('layouts.website.app')

@section('content')
<!-- Banner Section -->
<section class="banner-section banner-one">
  <div class="banner-bottom-pattern"></div>

  <div class="banner-carousel owl-theme owl-carousel">
    <!-- Slide Item -->
    <div class="slide-item">
      <div class="image-layer" style="background-image: url({{ URL::asset('website/image/6.jpg') }})"></div>
      <div class="auto-container">
        <div class="content-box">
          <div class="content">
            <div class="inner">
              <h1>Coolest Resort<br>For spend your holiday</h1>
              <div class="text">Growth made easy through insights, efficiencies, and exposure.</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide Item -->
    <div class="slide-item">
    <div class="image-layer" style="background-image: url({{ URL::asset('website/image/5.jpg') }})"></div>
      <div class="auto-container">
        <div class="content-box">
          <div class="content">
            <div class="inner">
              <h1>Coolest Resort<br>For spend your holiday</h1>
              <div class="text">Growth made easy through insights, efficiencies, and exposure.</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide Item -->
    <div class="slide-item">
    <div class="image-layer" style="background-image: url({{ URL::asset('website/image/3.jpg') }})"></div>
      <div class="auto-container">
        <div class="content-box">
          <div class="content">
            <div class="inner">
              <h1>Coolest Resort<br>For spend holiday</h1>
              <div class="text">Growth made easy through insights, efficiencies, and exposure.</div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!--End Banner Section -->


<!--Featured Section-->
<section class="featured-section">
  <div class="pattern-top"></div>
  <span class="dotted-pattern dotted-pattern-3"></span>
  <span class="tri-pattern tri-pattern-3"></span>
  <div class="auto-container">
    <div class="featured-block">
      <div class="row clearfix">
        <!--Text Column-->
        <div class="text-column col-lg-6 col-md-12 col-sm-12">
          <div class="inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
            <h3>Discover a New <br>Look of Luxury Hotel.</h3>
            <div class="text">Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid dolore magna aliqu enim ad minim veniam quis nostrud exer cittion ullamco laboris nisi ut aliquip excepteur.</div>
            <div class="link-box">
              <a href="about.html" class="theme-btn btn-style-one"><span class="btn-title">Read More</span></a>
            </div>
          </div>
        </div>
        <!--Image Column-->
        <div class="image-column col-lg-6 col-md-12 col-sm-12">
          <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="image-box">
              <figure class="image"><a href="#"><img src="{{ URL::asset('website/image/6.jpg') }}" alt="" title=""></a></figure>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="featured-block alternate">
      <div class="row clearfix">
        <!--Text Column-->
        <div class="text-column col-lg-6 col-md-12 col-sm-12">
          <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
            <h3>Finest Beatch Resort <br>in Santorini.</h3>
            <div class="text">Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid dolore magna aliqu enim ad minim veniam quis nostrud exer cittion ullamco laboris nisi ut aliquip excepteur.</div>
            <div class="link-box">
              <a href="about.html" class="theme-btn btn-style-one"><span class="btn-title">Discover Now</span></a>
            </div>
          </div>
        </div>
        <!--Image Column-->
        <div class="image-column col-lg-6 col-md-12 col-sm-12">
          <div class="inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="image-box">
              <figure class="image"><a href="#"><img src="{{ URL::asset('website/image/6.jpg') }}" alt="" title=""></a></figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection