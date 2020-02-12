@extends('layouts.admin')

@section('content')
    <div class="card card-box">
        <div class="card-head">
            <header>Edit player</header>
        </div>

        <div class="card-body">
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

        </div>
    </div>

        <div class="card card-box">
            <div class="card-head">
                <header>Statistic</header>
            </div>

            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-6">
                        {!! Form::open(['method'=>'Post', 'action'=> 'PlayerStatisticController@store']) !!}

                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <input type="hidden" name="player_id" value="{{$players->id}}">
                                {!! Form::label('season', 'Season:') !!}
                                {!! Form::number('season', null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group col-md-4">
                                {!! Form::label('goal', 'Goals:') !!}
                                {!! Form::number('goal', null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group col-md-4">
                                {!! Form::label('assist', 'Assist:') !!}
                                {!! Form::number('assist', null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group col-md-4">
                                {!! Form::label('yellow', 'Yellow Card:') !!}
                                {!! Form::number('yellow', null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group col-md-4">
                                {!! Form::label('red', 'Red Card:') !!}
                                {!! Form::number('red', null, ['class'=>'form-control']) !!}
                            </div>

                        </div>
                        <div class="form-group">
                            {!! Form::submit('Create statistic', ['class'=>'btn btn-primary']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>


                </div>
            </div>
        </div>




@stop
