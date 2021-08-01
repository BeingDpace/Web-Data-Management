<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class PlacesController extends Controller
{
    public function view() {
        return view('users_places', [
            'user_role' => 'immigrant',
            'query' => NULL
        ]);
    }

    public function submit(Request $request) {
        $this->validate($request, [
          'q' => 'required'
        ]);

        $place = new Place();
        $query = $request['q'];
        $result = $place->where('name', 'LIKE', "%$query%")->get();

        return view('users_places', [
            'places' => $result,
            'query' => $query,
            'num_results' => count($result),
            'user_role' => 'immigrant'
        ]);
    }

}
