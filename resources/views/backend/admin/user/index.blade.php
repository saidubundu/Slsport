@extends('layouts.admin')

@section('content')
    <div class="card card-box table-responsive">
        <div class="card-head">
            <header>All User</header>
            <div class="tools">
                <a  href="{{route('users.create')}}"><i class="fa fa-plus"></i>Add User</a>
            </div>
        </div>

        <div class="card-body">
            @if(Session::has('created_user'))
                <div class="alert alert-primary" role="alert">
                    {{session('created_user')}}
                </div>
            @endif

            @if(Session::has('updated_user'))
                <div class="alert alert-success" role="alert">
                    {{session('updated_user')}}
                </div>
            @endif

            @if(Session::has('deleted_user'))
                <div class="alert alert-danger" role="alert">
                    {{session('deleted_user')}}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Profile image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($users)
                        @foreach($users as $user)
                            <tr>
                                <th scope="col">{{$user->id}}</th>
                                <td><img height="60" src="{{$user->photo_id ? $user->photo->file : 'no image'}}" alt=""></td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role ? $user->role->name : 'no role'}}</td>
                                @if (Gate::denies('edit-users'))
                                    <td>{{$user->is_active == 1 ? 'Active' : 'Not active'}}</td>

                                @endif

                                <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-outline-info" role="button" aria-pressed="true">Edit</a></td>
                                <td>

                                    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminUsersController@destroy', $user->id]]) !!}


                                    <div>
                                        {!! Form::submit('Delete', ['class'=>"btn btn-outline-danger"]) !!}
                                    </div>
                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    @stop
