@extends('layouts.app')
@section('content')

    <form class="form-inline" method="POST" action="{{ Route('users.update', $user->id) }}">
        {{ csrf_field() }}

        <input name="_method" type="hidden" value="PUT">

        <div class="form-group">
            <div class="col-md-6">
                <label for="email" class="col-md-4 control-label">email</label>
                <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6">
                <label for="telephone" class="col-md-4 control-label">Numéro à définir</label>
                <input id="telephone" type="text" class="form-control" name="telephone" value="{{$user->telephone}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6">
                <label for="password" class="col-md-4 control-label">mdp</label>
                <input id="password" type="password" class="form-control" name="password" value="{{$user->password}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6">
                <label for="password-confirm" class="col-md-4 control-label">Confirmer mdp</label>
                <input id="password-confirm" type="password" class="form-control" name="password-confirmation" value="{{$user->password}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6">
                <label for="rang" class="col-md-4 control-label">Numéro à définir</label>
                <input id="rang" type="number" class="form-control" name="rang" value="{{$user->rang}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <input type="submit" value="Appliquer" class="btn btn-primary"/>
            </div>
        </div>
    </form>

@endsection;