@extends('layouts.admin')

@section('content')
    <h1>All Players</h1>
    <br>
    @if($players)
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Current Team</th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Jersey No.</th>
            <th scope="col">Nationality</th>
            <th scope="col">Height</th>
            <th scope="col">Weight</th>
            <th scope="col">Bio</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($players as $player)
        <tr>
            <th scope="row">{{$player->id}}</th>
            <td><img src="{{$player->team->photo_id ? $player->team->photo->file : '/images/holder/post.png'}}" alt=""> {{$player->team->name}}</td>
            <td><img src="{{$player->photo_id ? $player->photo->file : '/images/holder/profile.png'}}" alt=""></td>
            <td>{{$player->name}}</td>
            <td>{{$player->jersey}}</td>
            <td>{{$player->nation}}</td>
            <td>{{$player->height}}</td>
            <td>{{$player->weight}}</td>
            <td>{{$player->bio}}</td>
            <td><a href="{{route('players.edit', $player->id)}}" class="btn btn-outline-success">Edit</a></td>
            <td>
                {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPlayersController@destroy', $player->id]]) !!}

                            {!! Form::submit('Delete player', ['class'=>'btn btn-outline-danger']) !!}

                {!! Form::close() !!}
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
@endif

    @stop
