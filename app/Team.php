<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $fillable = [
        'team-logo_id',
        'name',
        'established_in',
        'manager',
        'coach',
        'training_ground',
        'leagues',
    ];

    public function logo()
    {
        return $this->belongsTo('App\TeamLogo');
    }
}
