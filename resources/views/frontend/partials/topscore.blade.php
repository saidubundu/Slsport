<div class="col-md-12 col-lg-4">
    <!--scores-tab area start-->
    <div class="scores-tab">
        <div class="section-title xs-mt-20">
            <h4> <span>top scores</span></h4>
        </div>
        <ul class="nav nav-pills mt40" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">SL Premiere</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">uefa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">la liga</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                @foreach($statistics as $statistic)
                <div class="player-box bb-1">
                    <img src="{{$statistic->player->photo->file}}" alt="">
                    <div class="player-dtl">
                        <h4>{{$statistic->player->name}}</h4>
                        <p>{{$statistic->goal}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                <div class="player-box bb-1">
                    <img src="assets/images/player/3.jpg" alt="messi">
                    <div class="player-dtl">
                        <h4></h4>
                        <p></p>
                    </div>

                </div>
                <div class="player-box bb-1">
                    <img src="assets/images/player/1.jpg" alt="messi">
                    <div class="player-dtl">
                        <h4>lionel messi</h4>
                        <p>15 goals</p>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="player-box bb-1">
                    <img src="assets/images/player/2.jpg" alt="messi">
                    <div class="player-dtl">
                        <h4>sergio aguero</h4>
                        <p>16 goals</p>
                    </div>
                </div>
                <div class="player-box bb-1">
                    <img src="assets/images/player/1.jpg" alt="messi">
                    <div class="player-dtl">
                        <h4>lionel messi</h4>
                        <p>15 goals</p>
                    </div>
                </div>
                <div class="player-box">
                    <img src="assets/images/player/4.jpg" alt="messi">
                    <div class="player-dtl">
                        <h4>diego forlan</h4>
                        <p>10 goals</p>
                    </div>
                </div>
                <div class="player-box bb-1">
                    <img src="assets/images/player/3.jpg" alt="messi">
                    <div class="player-dtl">
                        <h4>philipp lahm</h4>
                        <p>9 goals</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--scores-tab area end-->
</div>
