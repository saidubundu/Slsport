@extends('layouts.admin')

@section('content')
    <h1>Edit team</h1>
    <br>
    {!! Form::model($teams,['method'=>'PATCH', 'action'=> ['AdminTeamsController@update',$teams->id], 'files'=>true]) !!}
    <div class="form-row">

        <div class="form-group col-md-6">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('established_in', 'Established:') !!}
            {!! Form::number('established_in', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('manager', 'Manager:') !!}
            {!! Form::text('manager', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('coach', 'Coach:') !!}
            {!! Form::text('coach', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('training_ground', 'Training Ground:') !!}
            {!! Form::text('training_ground', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('leagues', 'League:') !!}
            {!! Form::text('leagues', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('photo_id', 'Team Logo:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>

    </div>

    <div class="form-group">
        {!! Form::submit('Update Team', ['class'=>'btn btn-primary col-md-12']) !!}
    </div>

    {!! Form::close() !!}


@stop
