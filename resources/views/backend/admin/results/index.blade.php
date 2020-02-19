@extends('layouts.admin')

@section('content')
    <div class="card card-box table-responsive">
        <div class="card-head">
            <header>All results</header>
            <div class="tools">
                <a  href="{{route('results.create')}}"><i class="fa fa-plus"></i>Add results table</a>
            </div>
        </div>

        <div class="card-body">
            @if(Session::has('created_result'))
                <div class="alert alert-primary" role="alert">
                    {{session('created_result')}}
                </div>
            @endif

            @if(Session::has('updated_result'))
                <div class="alert alert-success" role="alert">
                    {{session('updated_result')}}
                </div>
            @endif

            @if(Session::has('deleted_result'))
                <div class="alert alert-danger" role="alert">
                    {{session('deleted_result')}}
                </div>
            @endif
            @if($results)
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col"></th>
                        <th scope="col">Home Team</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Away Team</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($results as $result)
                        <tr>
                            <th scope="row">{{$result->id}}</th>
                            <td><img height="50" width="60" class="img-fluid img-thumbnail" src=" {{$result->hometeam->photo->file}}" alt=""></td>
                            <td>{{$result->hometeam->name}}</td>
                            <td>{{$result->result1_id}}</td>
                            <td>{{$result->result2_id}}</td>
                            <td><img height="50" width="60" class="img-fluid img-thumbnail" src="{{$result->awayteam->photo->file}}" alt=""></td>
                            <td>{{$result->awayteam->name}}</td>
                            <td><a href="{{route('results.edit', $result->id)}} " class="btn btn-outline-success">Edit</a></td>
                            <td>
                                {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminResultsController@destroy', $result->id]]) !!}

                                {!! Form::submit('Delete result', ['class="btn btn-outline-danger" col-sm-3']) !!}
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
