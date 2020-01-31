<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    protected $fillable = [
        'name',
        'team_id',
        'photo_id',
        'jersey',
        'nation',
        'height',
        'weight',
        'bio',
        'position_id',
    ];

    public function statistic()
    {
        return $this->hasOne('App\Statistic');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    public function team()
    {
        return $this->belongsTo('App\Team');
    }

    public function position()
    {
        return $this->belongsTo('App\Position');
    }
}
