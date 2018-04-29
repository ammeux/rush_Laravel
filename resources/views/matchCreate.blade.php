@extends('layouts.app')

@section('content')
<div class="container">
    <h3> Create a match </h3>
<form method="post" action="/matchCreation">
    <div class="form-group">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    </div>
    <table class="table">
        <thead>
            <th>Team_id</th>
            <th>Goals</th>
            <th>Player1_id</th>
            <th>Player2_id</th>
            <th>Player1_goals</th>
            <th>Player2_goals</th>
            <th>Won/Lost</th>
        </thead>
        <tbody>
        <tr>
            <td><input type="number" class="form-control" name="Ateam_id"></td>
            <td><input type="number" class="form-control" name="Ateam_goals"></td>
            <td><input type="number" class="form-control" name="Ateam_p1_id"></td>
            <td><input type="number" class="form-control" name="Ateam_p2_id"></td>
            <td><input type="number" class="form-control" name="Ateam_p1_goals"></td>
            <td><input type="number" class="form-control" name="Ateam_p2_goals"></td>
            <td><select name="Aresult">
                    <option value=0>Won</option>
                    <option value=1>Lost</option>
                </select></td>
        </tr>
        <tr>
            <td><input type="number" class="form-control" name="Bteam_id"></td>
            <td><input type="number" class="form-control" name="Bteam_goals"></td>
            <td><input type="number" class="form-control" name="Bteam_p1_id"></td>
            <td><input type="number" class="form-control" name="Bteam_p2_id"></td>
            <td><input type="number" class="form-control" name="Bteam_p1_goals"></td>
            <td><input type="number" class="form-control" name="Bteam_p2_goals"></td>
            <td><select name="Bresult">
                    <option value=0>Won</option>
                    <option value=1>Lost</option>
                </select></td>
        </tr>
        </tbody>
    </table>
    <div class="form-group">
        <label>Location:</label>
        <input type="text" class="form-control" name="location">
    </div>
    <div class="form-group">
        <label>Timing:</label>
        <select name="timing">
            <option value="morning">Morning</option>
            <option value="afternoon">Afternoon</option>
            <option value="evening">Evening</option>
        </select>
    </div>
    <div class="form-group">
        <label>Faults:</label>
        <input type="number" class="form-control" name="faults">
    </div>
    <input type="submit" class="btn btn-default" value="Create match" >
</form>
</div>
@endsection