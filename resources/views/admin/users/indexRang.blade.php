@extends('layouts/app')

@section('content')

    @if (count($users) > 0)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Email</th>
                <th scope="col">Rang</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->name}}</th>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->rang}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        {{'0 utilisateurs dans la file'}}
    @endif



@endsection