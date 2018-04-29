<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table = "matches";
    public $timestamps = false;

    public function teamA()
    {
        return $this->belongsTo('App\Team', 'Ateam_id');
    }

    public function teamB()
    {
        return $this->belongsTo('App\Team', 'Bteam_id');
    }

}
