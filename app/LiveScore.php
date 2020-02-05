<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiveScore extends Model
{
    //
    protected $fillable = [
        'home_team_id',
        'away_team_id',
        'result1_id',
        'result2_id',
    ];

    public function homeTeam()
    {
        return $this->belongsTo('App\Team', 'home_team_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo('App\Team', 'away_team_id');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
