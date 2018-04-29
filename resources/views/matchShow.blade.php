@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>Timing</th>
                <th>Location</th>
                <th>flagA</th>
                <th>teamA</th>
                <th>goalsA</th>
                <th>goalsB</th>
                <th>teamB</th>
                <th>flagB</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($matchGames as $matchGame)
                {
                    echo '<tr>';
                    echo '<td>' . $matchGame->timing . '</td>';
                    echo '<td>' . $matchGame->location . '</td>';
                    echo '<td><img src="'. $matchGame->teamA->flag  .'" height="35" width="60"></td>';
                    echo '<td>' . $matchGame->teamA->name . '</td>';
                    echo '<td>' . $matchGame->Ateam_goals . '</td>';
                    echo '<td>' . $matchGame->Bteam_goals . '</td>';
                    echo '<td>' . $matchGame->teamB->name . '</td>';
                    echo '<td><img src="'. $matchGame->teamB->flag  .'" height="35" width="60"></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
@endsection