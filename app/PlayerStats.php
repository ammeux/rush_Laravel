<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerStats extends Model
{
    protected $table = "playerstats";
    public $timestamps = false;

    public function player()
    {
        return $this->belongsTo('App\Player');
    }
}
