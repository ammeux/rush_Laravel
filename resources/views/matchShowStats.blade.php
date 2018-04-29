@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>Game ID</th>
                <th>Timing</th>
                <th>teamA</th>
                <th>teamB</th>
                <th>faults / total</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($matchGames as $matchGame)
                {
                    echo '<tr>';
                    echo '<td>' . $matchGame->id . '</td>';
                    echo '<td>' . $matchGame->timing . '</td>';
                    echo '<td>' . $matchGame->teamA->name . '</td>';
                    echo '<td>' . $matchGame->teamB->name . '</td>';
                    echo '<td>' . $matchGame->faults/10 . '</td>';
                    echo '</tr>';
                    }
            ?>
            </tbody>
@endsection
