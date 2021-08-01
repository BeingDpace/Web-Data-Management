<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function view() {
        return view('users_home', [
            'user_role' => 'immigrant'
        ]);
    }

    public function chat() {
        return view('users_chat', [
            'user_role' => 'immigrant'
        ]);
    }
    
    public function index()
    {
        $users=Users::all();

        return view("users")->with("users",$users);
    }

}
