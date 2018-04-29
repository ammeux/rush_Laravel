<?php

namespace App\Http\Controllers;

use App\PlayerStats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PlayerController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        return view('playerCreate');
    }

    function create(Request $request)
    {
        $team_id = $request->input('team_id');
        $player_id = $request->input('player_id');
        $name = $request->input('name');
        $data = ['team_id'=>$team_id, 'player_id'=>$player_id, 'name'=>$name];
        DB::table('players')->insert($data);
        echo "Record inserted successfully! ";
        echo '<a href = "/playerCreate">  Click Here</a> to go back.';
    }

    function show()
    {
        $playerstats = DB::table('playerstats')
            ->join('players', 'playerstats.player_id', '=' , 'players.id')
            ->select('player_id', 'players.name', DB::raw('SUM(goals) as goals'), DB::raw('COUNT(*) as games'))
            ->groupBy('player_id')
            ->get();
        return view('playerShow', ['playerstats'=>$playerstats]);
    }

}
