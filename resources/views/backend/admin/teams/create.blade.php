@extends('layouts.admin')

@section('content')
    <div class="card card-box table-responsive">
        <div class="card-head">
            <header>Create team</header>
        </div>

        <div class="card-body">
            {!! Form::open(['method'=>'Post', 'action'=> 'AdminTeamsController@store', 'files'=>true]) !!}
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
                    {!! Form::label('initials', 'Initials:') !!}
                    {!! Form::text('initials', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!! Form::label('photo_id', 'Team Logo:') !!}
                    {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::submit('Create Team', ['class'=>'btn btn-primary col-md-12']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>




    @stop
