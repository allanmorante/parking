@extends('layouts/app')

@section('content')

    @if (count($users) > 0)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Email</th>
                <th scope="col">Valider</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->name}}</th>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->isValid}}</td>
                    <td><button class="btn btn-primary" href="{{'AdminUsersController@valider', $user->id}}">Valider</button> </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        {{'0 utilisateurs non valides'}}
    @endif

@endsection