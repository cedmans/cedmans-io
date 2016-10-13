<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'created_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function education() {
        return $this->hasMany('App\Education');
    }

    public function skills() {
        return $this->hasMany('App\Skill');
    }

    public function certifications() {
        return $this->hasMany('App\Certification');
    }

    public function projects() {
        return $this->hasMany('App\Project');
    }

    public function occupations() {
        return $this->hasMany('App\Occupation');
    }
}
