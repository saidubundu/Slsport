@extends('layouts.admin')

@section('content')
    @if($fixtures)
<h1>All Fixtures</h1>
<br>
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
        <td><img src="{{$fixture->hometeam->photo->file}}" alt=""></td>
        <td>{{$fixture->hometeam->name}}</td>
        <td>vs</td>
        <td><img src="{{$fixture->awayteam->photo->file}}" alt=""></td>
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

    @stop
