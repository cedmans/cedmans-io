<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $fillable = [
        'user_id', 'name', 'authority', 'conferral'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
