<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function organization() {
        return $this->belongsTo('App\Organization');
    }

    public function duties() {
        return $this->hasMany('App\Duty');
    }
}
