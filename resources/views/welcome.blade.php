@extends('layouts.website.app')

@section('content')
<!-- Banner Section -->
<section class="banner-section banner-one">
  <div class="banner-bottom-pattern"></div>

  <div class="banner-carousel owl-theme owl-carousel">
    <!-- Slide Item -->
    <div class="slide-item">
      <div class="image-layer" style="background-image: url(images/main-slider/1.jpg);"></div>
      <div class="auto-container">
        <div class="content-box">
          <div class="content">
            <div class="inner">
              <h1>Coolest Beach <br>Hotels in the USA</h1>
              <div class="text">Amet consectetur adipisicing elit sed do eiusmod tempor incididunt adipisicing</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide Item -->
    <div class="slide-item">
      <div class="image-layer" style="background-image: url(images/main-slider/2.jpg);"></div>
      <div class="auto-container">
        <div class="content-box">
          <div class="content">
            <div class="inner">
              <h1>Coolest Beach <br>Hotels in the USA</h1>
              <div class="text">Amet consectetur adipisicing elit sed do eiusmod tempor incididunt adipisicing</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide Item -->
    <div class="slide-item">
      <div class="image-layer" style="background-image: url(images/main-slider/3.jpg);"></div>
      <div class="auto-container">
        <div class="content-box">
          <div class="content">
            <div class="inner">
              <h1>Coolest Beach <br>Hotels in the USA</h1>
              <div class="text">Amet consectetur adipisicing elit sed do eiusmod tempor incididunt adipisicing</div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!--End Banner Section -->

<!--About Section-->
<section class="about-section">
  <div class="pattern-bottom"></div>
  <span class="dotted-pattern dotted-pattern-1"></span>
  <span class="tri-pattern tri-pattern-1"></span>
  <div class="auto-container">
    <!--Filters Section-->

    <div class="row clearfix">
      <!--Text Column-->
      <div class="text-column col-lg-6 col-md-12 col-sm-12">
        <div class="inner">
          <div class="sec-title">
            <h2>Quality <br>Holidays With Us</h2>
          </div>
          <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
          <div class="link-box">
            <a href="about.html" class="theme-btn btn-style-one"><span class="btn-title">Read More</span></a>
          </div>
        </div>
      </div>
      <!--Image Column-->
      <div class="image-column col-lg-6 col-md-12 col-sm-12">
        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="image-box">
            <span class="dotted-pattern dotted-pattern-2"></span>
            <figure class="image"><img src="images/resource/featured-image-0.jpg" alt="" title=""></figure>
            <div class="cap"><span class="txt">25 <br>Years <br>of <br>Exp.</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Offers Section-->
<section class="offers-section-one">
  <div class="auto-container">

    <div class="upper-box clearfix">
      <div class="sec-title">
        <h2>Hotera <br>Special Offers</h2>
        <div class="lower-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</div>
      </div>
      <div class="link-box">
        <a href="packages.html" class="theme-btn btn-style-one"><span class="btn-title">View All Offers</span></a>
      </div>
    </div>

    <div class="row clearfix">
      <div class="offers-column col-lg-6 col-md-12 col-sm-12">
        <div class="inner">
          <div class="offer-block">
            <div class="offer-inner">
              <div class="fact-thumb wow zoomInStable" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="image"><img src="images/resource/of-thumb-1.jpg" alt="" title=""></div><span>30% <br>off</span>
              </div>
              <div class="price">Start From: <span>$50.00</span></div>
              <h4>Honeymoon Package</h4>
              <div class="text">Excepteur sint occaecat cupidatat proi dent in sunt.</div>
              <a href="package-single.html" class="over-link"></a>
            </div>
          </div>
          <div class="offer-block">
            <div class="offer-inner">
              <div class="fact-thumb wow zoomInStable" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="image"><img src="images/resource/of-thumb-1.jpg" alt="" title=""></div><span>30% <br>off</span>
              </div>
              <div class="price">Start From: <span>$50.00</span></div>
              <h4>Free Breakfast Package</h4>
              <div class="text">Excepteur sint occaecat cupidatat proi dent in sunt.</div>
              <a href="package-single.html" class="over-link"></a>
            </div>
          </div>
          <div class="offer-block">
            <div class="offer-inner">
              <div class="fact-thumb wow zoomInStable" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="image"><img src="images/resource/of-thumb-1.jpg" alt="" title=""></div><span>30% <br>off</span>
              </div>
              <div class="price">Start From: <span>$50.00</span></div>
              <h4>Facial Treatments</h4>
              <div class="text">Excepteur sint occaecat cupidatat proi dent in sunt.</div>
              <a href="package-single.html" class="over-link"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="images-column col-lg-6 col-md-12 col-sm-12">
        <div class="inner">
          <span class="dotted-pattern dotted-pattern-4"></span>
          <div class="images">
            <div class="image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/resource/featured-image-1.jpg" alt="" title=""></div>
            <div class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/resource/featured-image-2.jpg" alt="" title=""></div>
            <div class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/resource/featured-image-3.jpg" alt="" title=""></div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

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
              <figure class="image"><a href="#"><img src="images/resource/featured-image-4.jpg" alt="" title=""></a></figure>
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
              <figure class="image"><a href="#"><img src="images/resource/featured-image-5.jpg" alt="" title=""></a></figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection