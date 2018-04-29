@extends('layouts.app')

@section('content')
    <div class="container">
<h3> Create a team </h3>
<form method="post" action="/teamCreation">
    <div class="form-group">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <label>Team_id:</label>
        <input type="number" class="form-control" name="team_id">
    </div>
    <div class="form-group">
        <label>Name:</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label>Country:</label>
        <input type="text" class="form-control" name="country">
    </div>
    <div class="form-group">
        <label>Flag:</label>
        <input type="text" class="form-control" name="flag">
    </div>
    <input type="submit" class="btn btn-default" value="Create team" >
</form>
    </div>
@endsection

