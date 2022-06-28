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
                        <h3>Checkout </h3>

                        <form method="POST" action="{{ route('confirmbooking') }}">@csrf
                           <div class="row">
                                <div class="col col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Booking From</label>
                                        <input type="date" name="from_date" placeholder="Select To date" required="" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Your Name</label>
                                        <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleFormControlInput1" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Your Email</label>
                                        <input type="text" name="email" value="{{$user->email}}" class="form-control" id="exampleFormControlInput1" disabled>
                                    </div>
                                </div>
                                <div class="col col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Booking To</label>
                                        <input type="date" name="to_date" placeholder="Select To date" required="" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Enter Your Phone Number</label>
                                        <input type="number" name="phone" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Enter Your Address</label>
                                        <input type="text" name="address" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                    <input type="hidden" name="room_id" value="{{$room->id}}">
                                </div>
                                <div class="col">
                                    <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title text-dark">Payment</h5>
                                    </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item text-dark">Room Number : {{$room->room_number}}</li>
                                            <li class="list-group-item text-dark">Rent per day : {{$room->price}} BDT</li>
                                            <li class="list-group-item text-dark">Total Payment : {{$room->price}} BDT</li>
                                        </ul>
                                       
                                        <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Payment Method</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="payment_method" id="exampleRadios1" value="Cash" checked>
                                                <label class="form-check-label text-dark" for="exampleRadios1">
                                                    Cash
                                                </label>
                                                </div>
                                                <div class="form-check text-dark">
                                                <input class="form-check-input" type="radio" name="payment_method" id="exampleRadios2" value="Bkash">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    Bkash
                                                </label>
                                            </div>
                                        </div>
                                            <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Confirm Booking</span></button>
                                        </div>
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
