@extends('layouts.front')

@section('content')

    <div class="bdcmb-bg1 page-head parallax overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>SL Premiere League FIXTURE</h3>
                    </div>
                </div>
                <!-- /.colour-service-1-->
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">home</a></li>
                        <li>।</li>
                        <li>club list</li>
                        <li>।</li>
                        <li>fixture</li>
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

    <!--fixtures area start-->
    <div class="laliga-box pad60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center">Sl Premiere</h4>
                    @foreach($fixtures as $fixture)
                    <div class="fixture-box bb-1 ">
                        <div class="club-fixture">
                            <div class="club-img">
                                <img class="sm-img" src="{{$fixture->hometeam->photo->file}}" alt="club logo">
                                <span>{{$fixture->hometeam->name}}</span>
                            </div>
                            <div class="club-schedule text-center">
                                <h5>{{$fixture->date}}</h5>
                                <p>{{$fixture->field}}</p>
                            </div>
                            <div class="club-img">
                                <span>{{$fixture->awayteam->name}}</span>
                                <img class="sm-img" src="{{$fixture->awayteam->photo->file}}" alt="club logo">
                            </div>
                        </div>
                    </div>
                        @endforeach

                </div>
            </div>
        </div>
    </div>


    @stop
