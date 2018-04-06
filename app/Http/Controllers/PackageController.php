<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    //
    public function show($id)
    {
      $packages = App\Package::find($id)->getPlaces();
      return view('packages.show', array('packages' => $packages));
    }

    public function index()
    {

        $places = Place::all();

        // load the view and pass the nerds

       return view('places.index', array('places' => $places));

    }

}
