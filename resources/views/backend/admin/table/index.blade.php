@extends('layouts.admin')

@section('content')
    <div class="card card-box table-responsive">
        <div class="card-head">
            <header>All teams table</header>
            <div class="tools">
                <a  href="{{route('tables.create')}}"><i class="fa fa-plus"></i>Add team table</a>
            </div>
        </div>

        <div class="card-body">
            @if(Session::has('created_table'))
                <div class="alert alert-primary" role="alert">
                    {{session('created_table')}}
                </div>
            @endif

            @if(Session::has('updated_table'))
                <div class="alert alert-success" role="alert">
                    {{session('updated_table')}}
                </div>
            @endif

            @if(Session::has('deleted_table'))
                <div class="alert alert-danger" role="alert">
                    {{session('deleted_table')}}
                </div>
            @endif
            @if($standings)
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Team Name</th>
                        <th scope="col">Played</th>
                        <th scope="col">Win</th>
                        <th scope="col">Draw</th>
                        <th scope="col">Loss</th>
                        <th scope="col">Goals Scored</th>
                        <th scope="col">Goals Acquired</th>
                        <th scope="col">+/-</th>
                        <th scope="col">Points</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        <th scope="col">view</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($standings as $standing)
                        <tr>
                            <th scope="row">{{$standing->id}}</th>
                            <td><img height="60" width="50" class="img-thumbnail img-fluid" src="{{$standing->team->photo->file}}" alt=""></td>
                            <td>{{$standing->team->name}}</td>
                            <td>{{$standing->played}}</td>
                            <td>{{$standing->win}}</td>
                            <td>{{$standing->draw}}</td>
                            <td>{{$standing->loss}}</td>
                            <td>{{$standing->goalscored}}</td>
                            <td>{{$standing->goalacquired}}</td>
                            <td>{{'+/-'}}</td>
                            <td>{{$standing->points}}</td>
                            <td><a href="{{route('tables.edit',$standing->id)}}" class="btn btn-outline-success">Edit</a></td>

                            <td>

                                {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminTablesController@destroy', $standing->id]]) !!}



                                {!! Form::submit('Delete table', ['class'=>'btn btn-outline-danger']) !!}

                                {!! Form::close() !!}

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            @endif
        </div>
    </div>

    @stop
