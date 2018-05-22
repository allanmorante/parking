@extends('layouts/app')

@section('content')

    <a href="{{route('indexNotValid')}}" class="btn btn-primary">Utilisateur non valide</a>
    <a href="{{route('indexRang')}}" class="btn btn-primary">File d'attente</a>

    @if (count($users) > 0)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Email</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Supprimer</th>
                <th scope="col">Editer</th>
                <th scope="col">Place occupé</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->name}}</th>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->telephone}}</td>
                    <td><button class="btn btn-danger" href="/admin/users/{{$user->id}}">Supprimer</button> </td>
                    <td><a class="btn btn-warning" href="/admin/users/{{$user->id}}/edit">Editer</a> </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        {{'0 utilisateurs'}}
    @endif

    <!--<a href="{{ Route('places.create') }}" class="btn btn-primary">Ajouter une place</a>--!>


@endsection