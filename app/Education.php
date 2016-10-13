<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'user_id', 'organization_id', 'degree_type', 'major', 'concentration', 'conferral'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function organization() {
        return $this->belongsTo('App\Organization');
    }
}
