<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//Models
use App\Models\Cart;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cartAddCustomer(Request $request)
    {
        $user_id = auth()->user()->id;
        $cart = $this->filterRI->filterBy1PropFirst($this->cartModel, $user_id, 'user_id');
        $cart->customer_id = $request->customer_id;
        $success=$cart->save();
        if($success){
            return response(["done"=>'Customer Added Successfully'],200);
        }else{
            return response(["error"=>'Server Error'],500);
        }
    }

    public function create()
    {
        if (Auth::check()) {
            // The user is logged in...
        }
        
        if (Auth::user()) {   // Check is user logged in
            $example= "example";
            return View('novosti.create')->with('example', $example);
        } else {
            return "You can't access here!";
        }
    }
}
