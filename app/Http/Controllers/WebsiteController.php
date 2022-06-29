<?php

namespace App\Http\Controllers;

class WebsiteController extends Controller
{
    public function about(){
        return view('website.about');
    }

    public function contact(){
        return view('website.contact');
    }

    public function signIn(){
        return view('auth.login');
    }

    public function signUp(){
        return view('auth.register');
    }
}