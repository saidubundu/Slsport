@extends('layouts.front')

@section('content')
    <div class="bdcmb-bg3 page-head parallax overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>SL Premiere League point table</h3>
                    </div>
                </div>
                <!-- /.colour-service-1-->
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">home</a></li>
                        <li>।</li>
                        <li>point table</li>
                        <li>।</li>
                        <li>sl </li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.page-header -->
    <!-- page title & breadcrumbs end -->

    <div class="point-table pad60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">no</th>
                                <td colspan="4">team</td>
                                <th scope="col">p</th>
                                <th scope="col">w</th>
                                <th scope="col">d</th>
                                <th scope="col">l</th>
                                <th scope="col">GS</th>
                                <th scope="col">GA</th>
                                <th scope="col">+/-</th>
                                <th scope="col">PTS</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($standings as $standing)
                            <tr>
                                <th scope="row">1</th>
                                <td colspan="4" class="team">
                                    <div class="team-box"><img class="xs-img" src="{{$standing->team->photo->file}}" alt="">
                                        <span>{{$standing->team->name}}</span></div>
                                </td>
                                <td>{{$standing->played}}</td>
                                <td>{{$standing->win}}</td>
                                <td>{{$standing->draw}}</td>
                                <td>{{$standing->loss}}</td>
                                <td>{{$standing->goalscored}}</td>
                                <td>{{$standing->goalacquired}}</td>
                                <td>+75</td>
                                <td>{{$standing->points}}</td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
