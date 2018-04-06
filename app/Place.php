<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    //
    public function getPackages()//to be defined in package class
    {
        return $this->belongsToMany('App\Package', 'pkgs_places', 'pkg_id', 'place_id');
    }
}
