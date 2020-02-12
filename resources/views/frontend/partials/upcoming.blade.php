<div class="up-matches">
    <div class="section-title xs-mt-50">
        <h4> <span>upcomming matches</span></h4>
    </div>
    <div class="upmatches-slider owl-carousel">
        @foreach($fixtures as $fixture)
        <div class="upmatch-box mt20 overlay">
            <img class="full-width " src="{{asset('image/upcomming-matches/2.jpg')}}" alt="coming match">
            <div class="team-date">
                <h5>{{$fixture->hometeam->name}} vs {{$fixture->awayteam->name}}</h5>
                <p>{{$fixture->date}} | at {{$fixture->field}}</p>
            </div>
        </div>
            @endforeach
    </div>
</div>
