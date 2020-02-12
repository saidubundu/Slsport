@extends('layouts.front')

@section('content')
    <div class="bdcmb-bg2 page-head parallax overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Sl Premiere RESULT</h3>
                    </div>
                </div>
                <!-- /.colour-service-1-->
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">home</a></li>
                        <li>।</li>
                        <li>club list</li>
                        <li>।</li>
                        <li>results</li>
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

    <!--result area start-->
    <div class="laliga-box result-box pad60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center">SL Premiere League</h4>
                    <div class="fixture-box bb-1 ">
                        @foreach($results as $result)
                        <div class="club-fixture">
                            <div class="club-img">
                                <img class="sm-img" src="{{$result->hometeam->photo->file}}" alt="club logo">
                                <span> {{$result->hometeam->name}}</span>
                            </div>
                            <div class="club-schedule text-center">
                                <h5>{{$result->result1_id}} : {{$result->result2_id}}</h5>
                                <p>2018-june-20 12.00 am</p>
                            </div>
                            <div class="club-img">
                                <span> {{$result->awayteam->name}}</span>
                                <img class="sm-img" src="{{$result->awayteam->photo->file}}" alt="club logo">
                            </div>
                        </div>
                            @endforeach
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!--fixtures area end-->

    <!--main-container-->

    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="fa fa-close"></span></div>
        <div class="popup-inner">

            <div class="search-form">
                <form method="post" action="http://sitetemplate.demo.ithemeslab.com/sportzen/demo/index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required>
                            <input type="submit" value="Search" class="theme-btn">
                        </fieldset>
                    </div>
                </form>

                <br>
                <h3>Recent Search Keywords</h3>
            </div>
        </div>
    </div>
    <!--End Search Popup-->

    <!-- back to to btn start --
    @stop
