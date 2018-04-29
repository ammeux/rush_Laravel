@extends('layouts.app')

@section('content')
<div class="container">
    <h3> Create a player </h3>
<form method="post" action="/playerCreation">
    <div class="form-group">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <label>Team_id:</label>
        <input type="number" class="form-control" name="team_id">
    </div>
    <div class="form-group">
        <label>Player_id:</label>
        <input type="number" class="form-control" name="player_id">
    </div>
    <div class="form-group">
        <label>Name:</label>
        <input type="text" class="form-control" name="name">
    </div>
    <input type="submit" class="btn btn-default" value="Create player" >
</form>
</div>
@endsection