@extends('layouts.admin')

@section('content')
    <div class="col-md-6">

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Season</th>
                <th scope="col">Club</th>
                <th scope="col">Goals</th>
                <th scope="col">Assists</th>
                <th scope="col">Yellow cards</th>
                <th scope="col">Red cards</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>{{$statistics->season}}</td>
                <td>{{$statistics->player->team->name}}</td>
                <td>{{$statistics->goal}}</td>
                <td>{{$statistics->assist}}</td>
                <td>{{$statistics->yellow}}</td>
                <td>{{$statistics->red}}</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>

    </div>
    @stop
