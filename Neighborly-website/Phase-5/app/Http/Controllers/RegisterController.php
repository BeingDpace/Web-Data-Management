<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function submit(Request $request)
    {
        
        $this->validate($request, [
            'username' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'dob' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'previous_country' => 'required',
            'password' => 'required',
        ]);

        $user = new User();
        
        $user->username = $request['username'];
        $user->fname = $request['fname'];
        $user->lname = $request['lname'];
        $user->email = $request['email'];
        $user->dob = $request['dob'];
        $user->phone = $request['phone'];
        $user->role = $request['role'];
        $user->manages_country = NULL;
        $user->previous_country = $request['previous_country'];
        $user->password = Hash::make($request['password']);
        $user->save();

        auth()->login($user);
        
        return redirect()->to('/login');
    }
}

// https://vegibit.com/how-to-create-user-registration-in-laravel/