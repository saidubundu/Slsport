<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $fillable = [
        'photo_id',
        'name',
        'established_in',
        'manager',
        'coach',
        'training_ground',
        'leagues',
        'initials',
    ];

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    public function player()
    {
        return $this->hasMany('App\Player');
    }

    public function statistic()
    {
        return $this->belongsTo('App\Statistic');
    }



}
