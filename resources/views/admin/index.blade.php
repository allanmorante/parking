@extends('layouts/app')

@section('content')

    <div class="container">
        <div class="row">
            <a class="btn btn-primary" href="{{ Route('places.index') }}">Gérer les places</a>

            <a class="btn btn-primary" href="{{ Route('users.index') }}">Gérer les utilisateurs</a>
        </div>
    </div>

@endsection