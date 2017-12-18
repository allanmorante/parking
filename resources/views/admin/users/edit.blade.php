@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-m-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">Edition du membre {{ $user->lastname . ' ' . $user->name }}</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ Route('users.update', $user->id) }}">
                            {{ csrf_field() }}

                            <input name="method" type="hidden" value="PUT">

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="email" class="col-md-4 control-label">email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="telephone" class="col-md-4 control-label">Numéro à définir</label>
                                    <input id="telephone" type="text" class="form-control" name="telephone" value="{{$user->telephone}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="password" class="col-md-4 control-label">mdp</label>
                                    <input id="password" type="password" class="form-control" name="password" value="{{$user->password}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirmer mdp</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password-confirmation" value="{{$user->password}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="rang" class="col-md-4 control-label">Numéro à définir</label>
                                    <input id="rang" type="number" class="form-control" name="rang" value="{{$user->rang}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <input type="submit" value="Appliquer" class="btn btn-primary"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection;