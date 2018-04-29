@extends('layouts.app')

@section('content')
    <div class="container">
<table class="table">
    <thead>
    <tr>
        <th>Team Name</th>
        <th>Country</th>
        <th>Flag</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($teams as $team){
        echo '<tr>
        <td>' . $team->name . '</td>
        <td>' . $team->country.'</td>
        <td><img src="'. $team->flag .'" height="35" width="60"></td>
    </tr>';
    }
    ?>
    </tbody>
</table>
    </div>
@endsection