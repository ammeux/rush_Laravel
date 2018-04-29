<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Match;

class MatchController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('matchCreate');
    }

    function create(Request $request)
    {
        $Ateam_id = $request->input('Ateam_id');
        $Bteam_id = $request->input('Bteam_id');
        $Ateam_goals = $request->input('Ateam_goals');
        $Bteam_goals = $request->input('Bteam_goals');
        $Ateam_p1_id = $request->input('Ateam_p1_id');
        $Ateam_p2_id = $request->input('Ateam_p2_id');
        $Ateam_p1_goals = $request->input('Ateam_p1_goals');
        $Ateam_p2_goals = $request->input('Ateam_p2_goals');
        $Bteam_p1_id = $request->input('Bteam_p1_id');
        $Bteam_p2_id = $request->input('Bteam_p2_id');
        $Bteam_p1_goals = $request->input('Bteam_p1_goals');
        $Bteam_p2_goals = $request->input('Bteam_p2_goals');
        $Aresult = $request->input('Aresult');
        $Bresult = $request->input('Bresult');
        $location = $request->input('location');
        $timing = $request->input('timing');
        $faults = $request->input('faults');
        $dataMatch = ['Ateam_id'=>$Ateam_id, 'Bteam_id'=>$Bteam_id, 'Ateam_goals'=>$Ateam_goals, 'Bteam_goals'=>$Bteam_goals, 'location'=>$location, 'timing'=>$timing, 'faults'=>$faults];
        $dataATP1stats = ['player_id'=>$Ateam_p1_id, 'goals'=>$Ateam_p1_goals];
        $dataATP2stats = ['player_id'=>$Ateam_p2_id, 'goals'=>$Ateam_p2_goals];
        $dataBTP1stats = ['player_id'=>$Bteam_p1_id, 'goals'=>$Bteam_p1_goals];
        $dataBTP2stats = ['player_id'=>$Bteam_p2_id, 'goals'=>$Bteam_p2_goals];
        $dataATstats = ['team_id'=>$Ateam_id, 'result'=>$Aresult];
        $dataBTstats = ['team_id'=>$Bteam_id, 'result'=>$Bresult];
        DB::table('matches')->insert($dataMatch);
        DB::table('playerstats')->insert($dataATP1stats);
        DB::table('playerstats')->insert($dataATP2stats);
        DB::table('playerstats')->insert($dataBTP1stats);
        DB::table('playerstats')->insert($dataBTP2stats);
        DB::table('teamstats')->insert($dataATstats);
        DB::table('teamstats')->insert($dataBTstats);

        echo "Record inserted successfully! ";
        echo '<a href = "/matchCreate">  Click Here</a> to go back.';
    }

    function show()
    {
        $matchGames = Match::with('teamA', 'teamB')->get();
        return view('matchShow', ['matchGames'=>$matchGames]);
    }

    function showStats()
    {
        $matchGames = Match::with('teamA', 'teamB')->get();
        return view('matchShowStats', ['matchGames'=>$matchGames]);
    }
}
