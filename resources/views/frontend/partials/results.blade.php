<div class="section-title">
    <h4> <span>recent results</span></h4>
</div>
<div class="score-slider owl-carousel bnr1 mini-bg mt40">
    <div class="result-box ">

        <h4 class="result-heading"></h4>
        @foreach($results as $result)
        <div class="club-result">

            <div class="club-img">
                <img src="{{$result->hometeam->photo->file}}" alt="club logo">
                <span>{{$result->hometeam->name}}</span>
            </div>
            <div class="score">
                <span>{{$result->result1_id}}</span>
                <span>{{$result->result2_id}}</span>
            </div>
            <div class="club-img">
                <span>{{$result->hometeam->name}}</span>
                <img src="{{$result->awayteam->photo->file}}" alt="club logo">
            </div>

        </div>
        @endforeach

    </div>
</div>
