<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = [
        'name'
    ];

    public function country() {
        return $this->belongsTo('App\Country');
    }

    public function cities() {
        return $this->hasMany('App\City');
    }
}
