@extends('layouts.app')
@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">Edition de la place {{ $place->numPlace }}</div>
                    <div class="panel-body">
                        <form class="form-inline" method="POST" action="{{ Route('places.update', $place->idPlace) }}">
                            {{ csrf_field() }}

                            <input name="method" type="hidden" value="PUT">

                            <div class="form-inline">
                                <div class="col-md-8">
                                    <label for="numPlace" class="col-md-3">Numéro à définir</label>
                                    <input id="numPlace" type="text" class="form-control" name="numPlace" value="{{$place->numPlace}}">
                                </div>
                            </div>
                            <div class="form-inline">
                                <div class="col-md-4">
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