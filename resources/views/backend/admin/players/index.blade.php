@extends('layouts.admin')

@section('content')
    <div class="card card-box table-responsive">
        <div class="card-head">
            <header>All players</header>
            <div class="tools">
                <a  href="{{route('players.create')}}"><i class="fa fa-plus"></i>Add new player</a>
            </div>
        </div>

        <div class="card-body">
            @if(Session::has('created_player'))
                <div class="alert alert-primary" role="alert">
                    {{session('created_player')}}
                </div>
            @endif

            @if(Session::has('updated_player'))
                <div class="alert alert-success" role="alert">
                    {{session('updated_player')}}
                </div>
            @endif

            @if(Session::has('deleted_player'))
                <div class="alert alert-danger" role="alert">
                    {{session('deleted_player')}}
                </div>
            @endif
            @if($players)
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Current Team</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Name</th>
                        <th scope="col">Jersey No.</th>
                        <th scope="col">Position</th>
                        <th scope="col">Nationality</th>
                        <th scope="col">Height</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Bio</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        <th scope="col">View</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($players as $player)
                        <tr>
                            <th scope="row">{{$player->id}}</th>
                            <td><img height="50" width="50" class="img-thumbnail img-fluid" src="{{$player->team->photo_id ? $player->team->photo->file : '/images/holder/post.png'}}" alt=""> {{$player->team->name}}</td>
                            <td><img height="60" width="60" class="img-thumbnail img-fluid" src="{{$player->photo_id ? $player->photo->file : '/images/holder/profile.png'}}" alt=""></td>
                            <td>{{$player->name}}</td>
                            <td>{{$player->jersey}}</td>
                            <td>{{$player->position->name}}</td>
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
                            <td><a href="{{route('players.show', $player->id)}}" class="btn btn-outline-success">View</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

    @stop
