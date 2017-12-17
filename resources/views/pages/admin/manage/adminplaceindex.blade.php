@extends('layouts/app')

@section('content')

    @if (count($places) > 0)
        @foreach($places as $place)

            <p>{{$place->numPlace}}</p>

        @endforeach
    @else
        {{'0 places'}}
    @endif

    <a href="AdminPlaces/create" class="btn btn-success">Ajouter une place</a>


@endsection