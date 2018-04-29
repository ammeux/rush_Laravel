@extends('layouts.app')

@section('content')
<div class="container">
<table class="table">
    <thead>
    <tr>
        <th>Team Name</th>
        <th>Matches won</th>
        <th>Home matches goals</th>
        <th>Away matches goals</th>
        <th>Number of players</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i = 0;
    $max = count($teamMatches);
    while ($i < $max)
        {
            echo '<tr>';
            echo '<td>' . $teamStats[$i]->name . '</td>';
            echo '<td>' . $teamStats[$i]->stats[0]->results . '</td>';
            echo '<td>' . $teamMatches[$i]->Amatches[0]->goals . '</td>';
            echo '<td>' . $teamMatches[$i]->Bmatches[0]->goals . '</td>';
            echo '<td>' . $teamPlayers[$i]->players[0]->players . '</td>';
            $i++;
            echo '</tr>';
        }
?>
</tbody>
</table>
</div>
@endsection