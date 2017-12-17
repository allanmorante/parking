@extends('layouts/app')
@section('content')

<form class="form-inline" method="POST" action="/AdminPlaces">
    {{ csrf_field() }}

<div class="form-group">
    <div class="col-md-6">
        <label for="numPlace" class="col-md-4 control-label">Numéro à définir</label>
        <input id="numPlace" type="text" class="form-control" name="numPlace">
    </div>
</div>
<div class="form-group">
    <div class="col-md-8 col-md-offset-4">
        <input type="submit" value="Créer" class="btn btn-primary"/>
    </div>
</div>
</form>

@endsection;