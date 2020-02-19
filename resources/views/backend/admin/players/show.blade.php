@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-md-8 col-sm-12 col-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Player</header>
                </div>

                <div class="card-body">
                    <div class="row">
                    <div class="col-md-5">
                        <img class="img-thumbnail img-fluid" height="100" width="100"  src="{{$player->photo_id ? $player->photo->file : '/images/holder/profile.png'}}" alt="">
                    </div>
                        <div class="col-md-7">
                            {{$player->name}}
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12 col-12">

            <div class="card card-box">
                <div class="card-head">
                    <header>Player Statistic</header>
                </div>
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Season</th>
                                <th scope="col">Club</th>
                                <th scope="col">Goals</th>
                                <th scope="col">Assists</th>
                                <th scope="col">Yellow Cards</th>
                                <th scope="col">Red Cards</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($player->statistic)
                            <tr>
                                <th scope="row">1</th>
                                <td> {{$player->statistic->season}}</td>
                                <td> {{$player->team->name}}</td>
                                <td> {{$player->statistic->goal}}</td>
                                <td> {{$player->statistic->assist}}</td>
                                <td> {{$player->statistic->yellow}}</td>
                                <td> {{$player->statistic->red}}</td>
                            </tr>
                                @else
                                        <h1>No Statistic</h1>

                                @endif
                            </tbody>
                        </table>
                    </div>

            </div>

        </div>
    </div>


@stop
