<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tip;

class TipsController extends Controller
{
    public function view() {

        $tip = new Tip();
        $result = $tip->get();

        return view('users_tips', [
            'tips' => $result,
            'user_role' => 'immigrant'
        ]);
    }

    public function submit(Request $request) {
        $this->validate($request, [
          'comments' => 'required|max:5000'
        ]);

        $tip = new Tip();
        $tip->content = $request['comments'];
        $tip->user_id = 1;
        $tip->save();

        // redirect to home
        return redirect('/users/tips');
    }
}
