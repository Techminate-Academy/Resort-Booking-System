<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function roomList()
    {
        return view('admin.room.list');
    }
}
