<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

//Models
use App\Models\User;

class UserController extends Controller
{
    public function userList()
    {
        return view('admin.user.list');
    }

    // Create New User
    public function registerNewUser(Request $request) {
       
        $formFields = $request->validate([
            'name' => 'required|string',
            'is_admin' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $success = User::create($formFields);

        if($success){
            return redirect('/');
        }else{
            return redirect('/signUp');
        }
    }

    public function loginBk(Request $request) {
       
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check email
        $user = User::where('email', $request->email)->first();
        // Check password
        dd(bcrypt($fields['password']));
        if(!$user || !Hash::check($request->password, $user->password)) {
            return redirect('/signIn');
        }else{
            if($user->is_admin == 1){
                return redirect('/home');
            }else{
                return redirect('/rooms');
            }
        }
    }

    public function loginUser(Request $request) {
       
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Check email
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            $user = Auth::user();
            if($user->is_admin == 1){
                return redirect('/home');
            }else{
                return redirect('/rooms');
            }
        }else{
            return redirect('/signIn');
        }
    }
}
