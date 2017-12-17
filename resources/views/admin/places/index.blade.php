@extends('layouts/app')

@section('content')

    @if (count($places) > 0)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nom Place</th>
                <th scope="col">Supprimer</th>
                <th scope="col">ID</th>
                <th scope="col">Editer</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($places as $place)
                <tr>
                    <th scope="row">{{$place->numPlace}}</th>
                    <td><button class="btn btn-danger" href="#">Supprimer</button> </td>
                    <td>{{$place->idPlace}}</td>
                    <td><a class="btn btn-warning" href="{{ Route('places.edit', $place->idPlace) }}">Editer</a> </td>
                    <td>Le status</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        {{'0 places'}}
    @endif

    <a href="{{ Route('places.create') }}" class="btn btn-primary">Ajouter une place</a>


@endsection