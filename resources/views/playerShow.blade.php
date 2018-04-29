@extends('layouts.app')

@section('content')

    <div class="container">
    <table class="table">
    <thead>
    <tr>
        <th>Player Name</th>
        <th>Team</th>
        <th>Goals</th>
        <th>Games played</th>
        <th>Goals / game</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($playerstats as $playerstat){
        echo '<tr>
        <td>'. $playerstat->name. '</td>
        <td>France</td>
        <td>'. $playerstat->goals . '</td>
        <td>'.$playerstat->games.'</td>
        <td>'. $playerstat->goals / $playerstat->games.'</td>
    </tr>';
        }
    ?>
    </tbody>
    </table>
    </div>
@endsection