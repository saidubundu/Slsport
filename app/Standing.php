<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    //
    protected $fillable = [
        'team_id',
        'played',
        'win',
        'draw',
        'loss',
        'goalscored',
        'goalacquired',
        '+/-',
        'points',
    ];

    public function team()
    {
        return $this->belongsTo('App\Team');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
