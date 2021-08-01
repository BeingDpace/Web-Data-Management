<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function submit(Request $request)
    {
        $userdata = array(
            'username'  => $request->username,
            'password'  => $request->password
        );

        if (Auth::attempt($userdata)){
            echo 'SUCCESS';
            return redirect()->to('/users');
        } else {
            return redirect()->to('login')
                -> withErrors(['message' => 'The username or password is incorrect, please try again.']);
        }
       
    }

    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/');
    }
}
