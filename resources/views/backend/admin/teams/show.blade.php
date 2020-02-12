@extends('layouts.admin')

@section('content')

    {{$team->name}}

    @foreach($team->player as $players)
        {{$players->name}}
@endforeach
    @stop
