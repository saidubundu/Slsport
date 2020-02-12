@extends('layouts.admin')

@section('content')
            <div class="card card-box">
                <div class="card-head">
                    <header>Edit score</header>
                </div>

                <div class="card-body">
                    {!! Form::model($scores,['method'=>'PATCH', 'action'=> ['AdminGamesController@update',$scores->id]]) !!}
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
                        {!! Form::submit('Update score', ['class'=>'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>




        @stop

