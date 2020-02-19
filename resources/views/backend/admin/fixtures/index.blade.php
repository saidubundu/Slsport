@extends('layouts.admin')

@section('content')
    <div class="card card-box table-responsive">
        <div class="card-head">
            <header>All fixtures</header>
            <div class="tools">
                <a  href="{{route('fixtures.create')}}"><i class="fa fa-plus"></i>Add fixture</a>
            </div>
        </div>

        <div class="card-body">
            @if(Session::has('created_fixture'))
                <div class="alert alert-primary" role="alert">
                    {{session('created_fixture')}}
                </div>
            @endif

            @if(Session::has('updated_fixture'))
                <div class="alert alert-success" role="alert">
                    {{session('updated_fixture')}}
                </div>
            @endif

            @if(Session::has('deleted_fixture'))
                <div class="alert alert-danger" role="alert">
                    {{session('deleted_fixture')}}
                </div>
            @endif
            @if($fixtures)
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th></th>
                        <th scope="col">Home Team</th>
                        <th scope="col">Vs</th>
                        <th></th>
                        <th scope="col">Away Team</th>
                        <th scope="col">Date</th>
                        <th scope="col">Arena</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($fixtures as $fixture)
                        <tr>
                            <th scope="row">{{$fixture->id}}</th>
                            <td><img height="70" width="60" class="img-fluid img-thumbnail" src="{{$fixture->hometeam->photo->file}}" alt=""></td>
                            <td>{{$fixture->hometeam->name}}</td>
                            <td>vs</td>
                            <td><img height="70" width="60" class="img-fluid img-thumbnail" src="{{$fixture->awayteam->photo->file}}" alt=""></td>
                            <td>{{$fixture->awayteam->name}}</td>
                            <td>{{$fixture->date}}</td>
                            <td>{{$fixture->field}}</td>
                            <td><a href="{{route('fixtures.edit', $fixture->id)}} " class="btn btn-outline-success">Edit</a></td>
                            <td>
                                {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminFixturesController@destroy', $fixture->id]]) !!}

                                {!! Form::submit('Delete fixture', ['class="btn btn-outline-danger" col-sm-3']) !!}
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
