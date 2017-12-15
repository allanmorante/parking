@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('numPlace') ? ' has-error' : '' }}">
                                <label for="numPlace" class="col-md-4 control-label">Numéro à définir</label>

                                <div class="col-md-6">
                                    <input id="numPlace" type="text" class="form-control" name="numPlace" value="{{ old('numPlace') }}" required autofocus>

                                    @if ($errors->has('numPlace'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('numPlace') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Creer
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection