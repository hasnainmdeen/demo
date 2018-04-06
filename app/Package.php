<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    public function getPlaces()//to be defined in package class
    {
        return $this->belongsToMany('App\Place', 'pkgs_places', 'pkg_id', 'place_id');
    }
}
