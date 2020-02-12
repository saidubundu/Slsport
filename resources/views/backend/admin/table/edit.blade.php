@extends('layouts.admin')

@section('content')
    <div class="card card-box">
        <div class="card-head">
            <header>Edit team table</header>
        </div>

        <div class="card-body">
            {!! Form::model($standings,['method'=>'PATCH', 'action'=> ['AdminTablesController@update',$standings->id]]) !!}
            <div class="form-row">
                <div class="form-group col-md-12">
                    {!! Form::label('team_id', 'Team') !!}
                    {!! Form::select('team_id',[''=>'Choose Team'] + $teams, null, ['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    {!! Form::label('played', 'Played') !!}
                    {!! Form::number('played', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-3">
                    {!! Form::label('win', 'win') !!}
                    {!! Form::number('win', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-3">
                    {!! Form::label('draw', 'Draw') !!}
                    {!! Form::number('draw', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-3">
                    {!! Form::label('loss', 'Loss') !!}
                    {!! Form::number('loss', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-3">
                    {!! Form::label('goalscored', 'Goals Scored') !!}
                    {!! Form::number('goalscored', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-3">
                    {!! Form::label('goalacquired', 'Goals Acquired') !!}
                    {!! Form::number('goalacquired', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-3">
                    {!! Form::label('+/-', '+/-') !!}
                    {!! Form::number('+/-', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-3">
                    {!! Form::label('points', 'Points') !!}
                    {!! Form::number('points', null, ['class'=>'form-control']) !!}
                </div>

            </div>

            <div class="form-group">
                {!! Form::submit('Update table', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>


@stop
