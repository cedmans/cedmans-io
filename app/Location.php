<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function country() {
        return $this->belongsTo('App\Country');
    }

    public function province() {
        return $this->belongsTo('App\Province');
    }

    public function city() {
        return $this->belongsTo('App\City');
    }
}
