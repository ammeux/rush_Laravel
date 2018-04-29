<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = "teams";
    public $timestamps = false;

    public function stats()
    {
        return $this->hasMany('App\TeamStats')
            ->select('team_id')
            ->selectRaw('SUM(result) as results')
            ->groupBy('team_id');
    }

    public function Amatches()
    {
        return $this->hasMany('App\Match', 'Ateam_id')
            ->select('Ateam_id')
            ->selectRaw('SUM(Ateam_goals) as goals')
            ->groupBy('Ateam_id');
    }

    public function Bmatches()
    {
        return $this->hasMany('App\Match', 'Bteam_id')
            ->select('Bteam_id')
            ->selectRaw('SUM(Bteam_goals) as goals')
            ->groupBy('Bteam_id');
    }

    public function players()
    {
        return $this->hasMany('App\Player')
            ->select('team_id')
            ->selectRaw('COUNT(name) as players')
            ->groupBy('team_id');
    }

}
