@extends('layouts.website.app')

@section('content')
 <!-- Banner Section -->
 <section class="page-banner ext-banner">
        <div class="image-layer" style="background-image:url({{ URL::asset('website/image/6.jpg') }})"></div>
        <div class="banner-bottom-pattern"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

     <!--Room Single Section-->
    <section class="room-single">
        <div class="circles-two">
            <div class="c-1"></div>
            <div class="c-2"></div>
        </div>
        <span class="dotted-pattern dotted-pattern-3"></span>
        <span class="tri-pattern tri-pattern-3"></span>
        <div class="auto-container">
            <div class="upper-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="upper-inner">
                    <div class="row">
                        <div class="col">
                            <h2>{{ $room->room_title }}</h2>
                            <div class="pricing clearfix">
                                <div class="price">Start From: <span>{{ $room->price }}</span> / Per Day</div>
                            </div>
                            <div class="text">
                                <p><b>Room Number : </b> {{ $room->room_number }}</p>
                                <p><b>Bed Type : </b> {{ $room->bed_type }}</p>
                            </div>
                            <div>
                                <a href="{{ route('checkout',[$room->id]) }}" class="theme-btn btn-style-three"><span class="btn-title">Book Now</span></a>
                            </div>
                        </div>
                        <div class="col">
                        <img src="{{ URL::asset('room/'.$room->image) }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="details-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="details-inner">
                    <h3>Room Amenities</h3>
                    <div class="text">{{ $room->description }}</div>
                    <ul class="info clearfix">
                        <li><span class="icon flaticon-tv"></span> Television</li>
                        <li><span class="icon flaticon-wifi"></span> Wi-Fi</li>
                        <li><span class="icon flaticon-coffee-cup"></span> Breakfast</li>
                        <li><span class="icon flaticon-bathtub"></span> Bathtub</li>
                        <li><span class="icon flaticon-stones"></span> Spa</li>
                        <li><span class="icon flaticon-newspaper"></span> Newspaper</li>
                        <li><span class="icon flaticon-wine-glass"></span> Mini Club</li>
                        <li><span class="icon flaticon-dumbbell"></span> Gymnasium</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endsection