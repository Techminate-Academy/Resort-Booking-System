<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//Models
use App\Models\User;
use App\Models\Room;

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
}
