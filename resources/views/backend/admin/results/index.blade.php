@extends('layouts.admin')

@section('content')
    <h1>All Results</h1>
    <br>
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
           <td><img src=" {{$result->hometeam->photo->file}}" alt=""></td>
            <td>{{$result->hometeam->name}}</td>
            <td>{{$result->result1_id}}</td>
            <td>{{$result->result2_id}}</td>
            <td><img src="{{$result->awayteam->photo->file}}" alt=""></td>
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

    @stop
