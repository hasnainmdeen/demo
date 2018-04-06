<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PlaceController extends Controller
{
    //
    public function show($id)
    {
      $place = Place::find($id);
      return view('places.show', array('place' => $place));
    }

    public function index()
    {

        $places = Place::all();

        // load the view and pass the nerds

       return view('places.index', array('places' => $places));

    }
}
