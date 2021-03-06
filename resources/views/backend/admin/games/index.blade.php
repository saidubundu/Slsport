@extends('layouts.admin')

@section('content')
    <div class="card card-box table-responsive">
        <div class="card-head">
            <header>Create new scores</header>
        </div>

        <div class="card-body">

                    {!! Form::open(['method'=>'Post', 'action'=> 'AdminGamesController@store']) !!}
                    <div class="form-row">
                        <div class="form-group">
                            {!! Form::label('home_team_id', 'Home team') !!}
                            {!! Form::select('home_team_id',[''=>'Choose home team'] + $teams, null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_team_id', 'Away team') !!}
                            {!! Form::select('away_team_id',[''=>'Choose away team'] + $teams, null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('result1_id', 'Home team result') !!}
                            {!! Form::number('result1_id', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('result2_id', 'Away team result') !!}
                            {!! Form::number('result2_id', null, ['class'=>'form-control']) !!}
                        </div>

                    </div>

                    <div class="form-group">
                        {!! Form::submit('Create score', ['class'=>'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}

                </div>
    </div>




    <div class="card card-box table-responsive">
        <div class="card-head">
            <header>Live Scores</header>
        </div>

        <div class="card-body">
            @if(Session::has('created_game'))
                <div class="alert alert-primary" role="alert">
                    {{session('created_game')}}
                </div>
            @endif

            @if(Session::has('updated_game'))
                <div class="alert alert-success" role="alert">
                    {{session('updated_game')}}
                </div>
            @endif

            @if(Session::has('deleted_game'))
                <div class="alert alert-danger" role="alert">
                    {{session('deleted_game')}}
                </div>
            @endif
            <div class="form-rows">
                @if($scores)

                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Team</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Team</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($scores as $score)
                            <tr>
                                <th scope="row">{{$score->id}}</th>
                                <td>{{$score->hometeam->initials}}</td>
                                <td>{{$score->result1_id}}</td>
                                <td>-</td>
                                <td>{{$score->result2_id}}</td>
                                <td>{{$score->awayteam->initials}}</td>
                                <td><a href="{{route('games.edit', $score->id)}} " class="btn btn-outline-success">Edit</a></td>
                                <td>
                                    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminGamesController@destroy', $score->id]]) !!}

                                    {!! Form::submit('Delete score', ['class="btn btn-outline-danger" col-sm-3']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                @endif
            </div>
        </div>
    </div>





@stop
    </div>
