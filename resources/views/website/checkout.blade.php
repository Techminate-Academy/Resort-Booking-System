@extends('layouts.website.app')

@section('content')
<section class="page-banner ext-banner">
        <div class="image-layer" style="background-image:url(images/background/banner-image-9.jpg);"></div>
        <div class="banner-bottom-pattern"></div>
        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                <div class="inner">
                    <div class="form-box default-form contact-form-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h3>Checkout - {{$user->name}} - {{$room->room_title}}</h3>

                        <form method="POST" action="{{ route('login') }}">@csrf
                           <div class="row">
                                <div class="col col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Enter Your Phone Number</label>
                                        <input type="number" name="phone" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Enter Your Address</label>
                                        <input type="text" name="address" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Booking From</label>
                                        <input type="date" name="to_date" placeholder="Select To date" required="" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Booking To</label>
                                        <input type="date" name="to_date" placeholder="Select To date" required="" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Room Number</label>
                                        <input type="text" name="room_number" value="{{$room->room_number}}" disabled class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Rent per day</label>
                                        <input type="text" name="price" value="{{$room->price}}" disabled class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Your Name</label>
                                        <input type="text" name="name" value="{{$user->name}}" disabled class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Your Name</label>
                                        <input type="text" name="name" value="{{$user->name}}" disabled class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">Payment Method</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Cash
                                            </label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Bkash
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Confirm Booking</span></button>
                                    </div>
                                </div> 
                           </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

@endsection
