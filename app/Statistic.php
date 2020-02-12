<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    //
    protected $fillable = [
        'player_id',
        'season',
        'goal',
        'assist',
        'yellow',
        'red',
    ];
    public function player()
    {
        return $this->belongsTo('App\Player');
    }
}
