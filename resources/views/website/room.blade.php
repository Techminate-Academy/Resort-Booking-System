@extends('layouts.website.app')

@section('content')

    <!--Rooms Section-->
    <section class="rooms-section">
        <div class="auto-container">
            <div class="row clearfix">
            @foreach($rooms as $key=> $room)
                <div class="room-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="room-single.html"><img src="room/{{$room->image}}" height="220" alt="" title=""></a></figure>
                        </div>
                        <div class="lower-box">
                            <h4>Balcony Room</h4>
                            <div class="pricing clearfix">
                                <div class="price">Rent : <span>{{ $room->price }}</span></div>
                                <div class="rating">
                                    <span><b>Room NO : </b>{{ $room->room_number }}</span>
                                </div>
                            </div>

                            <div class="link-box">
                                <a href="{{ route('roomDetails',[$room->id]) }}" class="theme-btn btn-style-three"><span class="btn-title">View Details</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>


@endsection