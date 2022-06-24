<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\Room;

class RoomController extends Controller
{

    public function roomPage()
    {
        $rooms = Room::latest()->paginate(10);
        return view('website.room', compact('rooms'));
    }

    public function roomList()
    {
        $rooms = Room::latest()->paginate(10);
        return view('admin.room.list', compact('rooms'));
    }

    //single data from room
    public function roomGetById($id)
    {
        return Room::find($id);
    }

    public function roomCreate(Request $request)
    {
        
        $this->validate($request,[
            'room_number'=>'required',
            'price'=>'required|numeric',
        ]);
        
        if($request->hasFile('image')){
            $this->validate($request,[
                'image'=>'required|mimes:jpeg,jpg,png'
            ]);
            $image = $request->file('image');
            $img = 'img'.time(). '.' .$image->getClientOriginalExtension();
            $image->move(public_path(env('REL_PUB_FOLD').'room'),$img);
        }else{
            $img = 'default.jpg';
        }
        
        $success = Room::create([
            'room_number'=>$request->room_number,
            'bed_type'=>$request->bed_type,
            'description'=>$request->description,
            'price'=>$request->price,
            'image'=>$img
        ]);
        // dd($success);
        if($success){
            return $this->roomList();
        }

    }

   
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'room_number'=>'required',
            'price'=>'required|numeric',
            'description'=>'required|min:3'
        ]);

        $room = Room::find($id);

        if($request->hasFile('image')){
            $this->validate($request,[
                'image'=>'required|mimes:jpeg,jpg,png',
            ]);
            $image = $request->file('image');
            $img = 'img' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path(env('REL_PUB_FOLD').'room'),$img);

            $image_path = public_path(env('REL_PUB_FOLD').'room')."/".$room->image;  
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
        }else{
            $img = $room->image;
        }

        $room->room_number = $request->room_number;
        $room->bed_type = $request->bed_type;
        $room->description = $request->description;
        $room->price = $request->price;
        $room->image = $img;
        $success = $room->save();
        if($success){
            return response()->json($this->roomList());
        }
    }

    public function destroy($id)
    {

        $room = Room::find($id);
        $room->delete();
        $image_path = public_path(env('REL_PUB_FOLD').'room')."/".$room->image;  
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
        // return redirect()->back()->with('message', 'room Deleted successfully!');
        return response()->json($this->index());
    }
}

