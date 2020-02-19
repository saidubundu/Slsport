@extends('layouts.front')

@section('content')
    <div class="bdcmb-bg1 page-head parallax overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>barcelona</h3>
                    </div>
                </div>
                <!-- /.colour-service-1-->
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="/">home</a></li>
                        <li>।</li>
                        <li>club list</li>
                        <li>।</li>
                        <li>{{$player->name}}</li>
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

    <!--club-list-area start-->
    <div class="club-list-area pad60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <div class="club-authority">
                        <img class="img-fluid img-thumbnail" src="{{$player->photo_id ? $player->photo->file : '/images/holder/profile.png'}}" alt="">
                        <h4 class="mt30">{{$player->name}}</h4>
                        <p>{{$player->position->name}}</p>
                        <div class="authority-box mt30">
                            <p><strong>Jersey Number</strong> : {{$player->jersey}}</p>
                            <p><strong>Height</strong> : {{$player->height}}</p>
                            <p><strong>Weight</strong>: {{$player->weight}} </p>
                            <p><strong>Country</strong> : {{$player->nation}} </p>
                            <p><strong>Current Club</strong> : {{$player->team->name}} </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-9">
                    <div class="club-history">
                        <div class="section-title mb30 xs-mt-30">
                            <h4><span>player history</span></h4>
                        </div>
                        <p>{{$player->bio}}</p> <br>

{{--                        <div class="history-img pad40">--}}
{{--                            <img class="img-fluid" src="assets/images/club-list/1.jpg" alt="club img">--}}
{{--                            <h3 class="mt20">Why would Neymar leave Barca? A look at why Neymar might leave Barcelona for Paris St-Germain, with expert analysis and opinion.</h3>--}}
{{--                        </div>--}}
                    </div>
                    <div class="team-box">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">statistic</a>
{{--                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">honours</a>--}}
{{--                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">photos</a>--}}
{{--                            <a class="nav-item nav-link" id="nav-jersy-tab" data-toggle="tab" href="#nav-jersy" role="tab" aria-controls="nav-jersy" aria-selected="false">jersy</a>--}}
                        </div>

                        <div class="tab-content mt40" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table table-bordered table-responsive">
                                    <thead>
                                    <tr>
                                        <th scope="col"><p>Season</p></th>
                                        <th scope="col"><p>Goals</p></th>
                                        <th scope="col"><p>Assists</p></th>
                                        <th scope="col"><p>Yellow Cards</p></th>
                                        <th scope="col"><p>Red Cards</p></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($player->statistic)
                                    <tr>
                                        <td><p>{{$player->statistic->season}}</p></td>
                                        <td><p>{{$player->statistic->goal}}</p></td>
                                        <td><p>{{$player->statistic->assist}}</p></td>
                                        <td><p>{{$player->statistic->yellow}}</p></td>
                                        <td><p>{{$player->statistic->red}}</p></td>
                                    </tr>
                                       @else
                                            <h1>No Statistic</h1>

                                        @endif

                                    </tbody>
                                </table>
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/1.jpg" alt="player img">--}}
{{--                                            <h5 class="mt10">robbie brady</h5>--}}
{{--                                            <p>midfielder</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>

{{--                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/1.jpg" alt="player img">--}}
{{--                                            <h5 class="mt10">robbie brady</h5>--}}
{{--                                            <p>midfielder</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/2.jpg" alt="player img">--}}
{{--                                            <h5 class="mt10">Wes Hoolahan</h5>--}}
{{--                                            <p>forward</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/3.jpg" alt="player img">--}}
{{--                                            <h5 class="mt10">james mcClean</h5>--}}
{{--                                            <p>midfielder</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/41.jpg" alt="player img">--}}
{{--                                            <h5 class="mt10">robbie brady</h5>--}}
{{--                                            <p>midfielder</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/5.jpg" alt="player img">--}}
{{--                                            <h5 class="mt10">Wes Hoolahan</h5>--}}
{{--                                            <p>forward</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/6.jpg" alt="player img">--}}
{{--                                            <h5 class="mt10">james mcClean</h5>--}}
{{--                                            <p>midfielder</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/7.jpg" alt="player img">--}}
{{--                                            <h5 class="mt10">robbie brady</h5>--}}
{{--                                            <p>midfielder</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/8.jpg" alt="player img">--}}
{{--                                            <h5 class="mt10">Wes Hoolahan</h5>--}}
{{--                                            <p>forward</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/9.jpg" alt="player img">--}}
{{--                                            <h5 class="mt10">james mcClean</h5>--}}
{{--                                            <p>midfielder</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/10.jpg" alt="player img">--}}
{{--                                            <h5 class="mt10">Wes Hoolahan</h5>--}}
{{--                                            <p>forward</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/11.jpg" alt="player img">--}}
{{--                                            <h5 class="mt10">james mcClean</h5>--}}
{{--                                            <p>midfielder</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/1.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/2.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/3.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/41.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/5.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/6.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/7.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/8.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/9.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/10.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/11.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="nav-jersy" role="tabpanel" aria-labelledby="nav-contact-tab">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/1.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/2.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/3.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/41.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/5.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/6.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/7.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/8.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem mb30">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/9.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/10.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-12">--}}
{{--                                        <div class="team-mem">--}}
{{--                                            <img class="full-width" src="assets/images/club-list/player/11.jpg" alt="player img">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
