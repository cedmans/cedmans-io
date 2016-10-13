<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duty extends Model
{
    public function occupation() {
        return $this->belongsTo('App\Occupation');
    }
}
