@extends('layouts.admin')

@section('content')
    <div class="card card-box">
        <div class="card-head">
            <header>Edit result</header>
        </div>
        <div class="card-body">
            {!! Form::model($results,['method'=>'PATCH', 'action'=> ['AdminResultsController@update',$results->id]]) !!}
            <div class="form-row">
                <div class="form-group col-md-4">
                    {!! Form::label('home_team_id', 'Home Team') !!}
                    {!! Form::select('home_team_id',[''=>'Choose team'] + $teams, null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-2">
                    {!! Form::label('result1_id', 'Home Result') !!}
                    {!! Form::text('result1_id', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-4">
                    {!! Form::label('away_team_id', 'Away Team') !!}
                    {!! Form::select('away_team_id',[''=>'Choose team'] + $teams, null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-2">
                    {!! Form::label('result2_id', 'Away Result') !!}
                    {!! Form::text('result2_id', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('date', 'Date') !!}
                    {!! Form::text('date', null, ['class'=>'form-control']) !!}
                </div>

            </div>

            <div class="form-group">
                {!! Form::submit('Create result', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>




@stop
