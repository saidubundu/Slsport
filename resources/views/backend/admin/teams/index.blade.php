@extends('layouts.admin')

@section('content')
    <div class="card card-box table-responsive">
        <div class="card-head">
            <header>All Teams</header>
            <div class="tools">
                <a  href="{{route('teams.create')}}"><i class="fa fa-plus"></i>Add new team</a>
            </div>
        </div>

        <div class="card-body">
                @if(Session::has('created_team'))
                    <div class="alert alert-primary" role="alert">
                        {{session('created_team')}}
                    </div>
                @endif

                @if(Session::has('updated_team'))
                    <div class="alert alert-success" role="alert">
                        {{session('updated_team')}}
                    </div>
                @endif

                @if(Session::has('deleted_team'))
                    <div class="alert alert-danger" role="alert">
                        {{session('deleted_team')}}
                    </div>
                @endif
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
                    <th scope="col">Initials</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th scope="col">View</th>
                </tr>
                </thead>
                <tbody>
                @if($teams)
                    @foreach($teams as $team)
                        <tr>
                            <th scope="row">{{$team->id}}</th>
                            <td><img height="60" width="50" class="img-fluid img-thumbnail" src="{{$team->photo_id ? $team->photo->file : 'no image'}}" alt=""></td>
                            <td>{{$team->name}}</td>
                            <td>{{$team->established_in}}</td>
                            <td>{{$team->manager}}</td>
                            <td>{{$team->coach}}</td>
                            <td>{{$team->training_ground}}</td>
                            <td>{{$team->leagues}}</td>
                            <td>{{$team->initials}}</td>
                            <td><a href="{{route('teams.edit', $team->id)}} " class="btn btn-outline-success">Edit</a></td>
                            <td>

                                {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminTeamsController@destroy', $team->id]]) !!}

                                <div>
                                    {!! Form::submit('Delete team', ['class="btn btn-outline-danger" col-sm-3']) !!}
                                </div>
                                {!! Form::close() !!}

                            </td>
                            <td><a href="{{route('teams.show',$team->id)}}" class="btn btn-outline-success">view</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>

            </table>
        </div>
    </div>
@stop
