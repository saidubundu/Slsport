@extends('layouts.admin')

@section('content')

    <h1>All Teams</h1>

    <br>
        <table class="table">

            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Team Logo</th>
                <th scope="col">Name</th>
                <th scope="col">Established In</th>
                <th scope="col">Manager</th>
                <th scope="col">Coach</th>
                <th scope="col">Training Ground</th>
                <th scope="col">Leagues</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @if($teams)
            @foreach($teams as $team)
            <tr>
                <th scope="row">{{$team->id}}</th>
                <td><img src="{{$team->photo_id ? $team->photo->file : 'no image'}}" alt=""></td>
                <td>{{$team->name}}</td>
                <td>{{$team->established_in}}</td>
                <td>{{$team->manager}}</td>
                <td>{{$team->coach}}</td>
                <td>{{$team->training_ground}}</td>
                <td>{{$team->leagues}}</td>
                <td><a href="{{route('teams.edit', $team->id)}} " class="btn btn-outline-success">Edit</a></td>
                <td>

                    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminTeamsController@destroy', $team->id]]) !!}

                    <div>
                        {!! Form::submit('Delete', ['class="btn btn-outline-danger" col-sm-3']) !!}
                    </div>
                    {!! Form::close() !!}

                </td>
            </tr>
            @endforeach
            @endif
            </tbody>

        </table>






    @stop
