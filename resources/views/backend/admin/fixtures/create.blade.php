@extends('layouts.admin')

@section('content')
    <div class="card card-box">
        <div class="card-head">
            <header>Create fixture</header>
        </div>

        <div class="card-body">
            {!! Form::open(['method'=>'Post', 'action'=> 'AdminFixturesController@store']) !!}
            <div class="form-row">

                <div class="form-group col-md-3">
                    {!! Form::label('home_team_id', 'Team:') !!}
                    {!! Form::select('home_team_id',[''=>'Choose Team'] + $teams, null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-3">
                    {!! Form::label('away_team_id', 'Team:') !!}
                    {!! Form::select('away_team_id',[''=>'Choose Team'] + $teams, null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-3" id="minDate">
                    {!! Form::label('date', 'Date') !!}
                    {!! Form::text('date', null, ['class'=>'form-control datepicker-here ', 'data-language'=>'en', 'data-timepicker'=>'true']) !!}

                </div>

                <div class="form-group col-md-3">
                    {!! Form::label('field', 'Field:') !!}
                    {!! Form::text('field', null, ['class'=>'form-control']) !!}
                </div>




            </div>

            <div class="form-group">
                {!! Form::submit('Create Fixture', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>



@stop




