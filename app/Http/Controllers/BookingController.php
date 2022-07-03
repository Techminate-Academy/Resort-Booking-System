<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//Models
use App\Models\User;
use App\Models\Room;
use App\Models\Booking;

class BookingController extends Controller
{
    public function checkout($id){
        $room = Room::find($id);
        if (Auth::user()) {
            $user = Auth::user();
            return view('website.checkout', compact('room', 'user'));
        } else {
            return view('auth.login');
        }
    }

    public function showBookings(){
        $user = Auth::user();
        $bookings_of_user = Booking::where('user_id',$user->id)->get();
        return view('admin.user.showBookings', compact('bookings_of_user'));
    }

    public function confirmbooking(Request $request){
        // dd($request);
        $room = Room::find($request->room_id);
        $user = User::find($request->user_id);

        $success = Booking::create([
            'user_id' => $request->user_id,
            'room_id' => $request->room_id,
            'phone' => $request->phone,
            'address' => $request->address,
            'booking_number' => 'B_'.date('md').'_'.date('is').mt_rand(10,100),
            'from_date' => $request->from_date,
            'to_date' => $request->to_date,
            'total' => $room->price,
            'payment_method' => $request->payment_method,
            'status' => 'Pending',
        ]);

        if($success){
            return $this->showBookings();
        }

    }

    //admin panel
    public function bookingList(){
        $bookingList = Booking::all();
        return view('admin.booking.bookingList', compact('bookingList'));
    }

    public function updateBookingStatus(Request $request){
       
        $booking = Booking::find($request->booking_id);
        if ($booking) {
            $booking->status = $request->status;
            $booking->save();
            return $this->bookingList();
        } else {
            return $this->bookingList();
        }
    }
}
