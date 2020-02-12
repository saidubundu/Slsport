@extends('layouts.admin')

@section('content')
    <div class="card card-box">
        <div class="card-head">
            <header>Create user</header>
        </div>
        <div class="card-body">
            {!! Form::open(['method'=>'Post', 'action'=> 'AdminUsersController@store','files'=>true]) !!}

            <div class="form-row">
                <div class="form-group col-md-6">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::email('email', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!! Form::label('role_id', 'Role:') !!}
                    {!! Form::select('role_id',['' => 'Choose role'] + $roles, null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!! Form::label('is_active', 'Status:') !!}
                    {!! Form::select('is_active', array(1=>'Active', 0=>'Not active'), 0, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!! Form::label('password', 'Password:') !!}
                    {!! Form::password('password', ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!! Form::label('photo_id', 'Profile image:') !!}
                    {!! Form::file('photo_id', ['class'=>'form-control']) !!}
                </div>


            </div>
            <div class="form-group">
                {!! Form::submit('Create User', ['class'=>'btn btn-primary col-md-12']) !!}
            </div>

            {!! Form::close() !!}

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>



    @stop
