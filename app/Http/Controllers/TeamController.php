<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Team;

class TeamController extends Controller
{
    public function index()
    {
        return view('teamCreate');
    }

    function create(Request $request)
    {
        $team_id = $request->input('team_id');
        $name = $request->input('name');
        $country = $request->input('country');
        $flag = $request->input('flag');
        $data = ['team_id'=>$team_id, 'name'=>$name, 'country'=>$country, 'flag'=>$flag];
        DB::table('teams')->insert($data);
        echo "Record inserted successfully! ";
        echo '<a href = "/teamCreate">  Click Here</a> to go back.';
    }

    function show()
    {
        $teams = Team::all();
        return view('teamShow', ['teams'=>$teams]);
    }

    function showStats()
    {
        $teamStats = Team::with('stats')->get();
        $teamMatches = Team::with('Amatches', 'Bmatches')->get();
        $teamPlayers = Team::with('players')->get();
        return view('teamShowStats', ['teamStats'=>$teamStats, 'teamMatches'=>$teamMatches, 'teamPlayers'=>$teamPlayers]);
    }
}