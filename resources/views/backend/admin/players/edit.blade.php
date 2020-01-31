@extends('layouts.admin')

@section('content')
    <h1>Edit player</h1>

    {!! Form::model($players,['method'=>'PATCH', 'action'=> ['AdminPlayersController@update',$players->id], 'files'=>true]) !!}
    <div class="form-row">

        <div class="form-group col-md-6">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('jersey', 'Jersey No:') !!}
            {!! Form::number('jersey', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('position_id', 'Position:') !!}
            {!! Form::select('position_id',[''=>'Choose position:'] + $positions, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('nation', 'Nationality') !!}
            {!! Form::text('nation', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('height', 'Height') !!}
            {!! Form::number('height', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('weight', 'Weight') !!}
            {!! Form::number('weight', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('bio', 'Bio') !!}
            {!! Form::text('bio', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('team_id', 'Team') !!}
            {!! Form::select('team_id',[""=> 'Select Team'] + $teams, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('photo_id', 'Player photo :') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>

    </div>

    <div class="form-group">
        {!! Form::submit('Update Player', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@stop
