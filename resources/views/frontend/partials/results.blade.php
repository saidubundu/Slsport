
    <div class="result-box ">

        <h4 class="result-heading">sunday 21st may 2017</h4>
        <div class="club-result">
            @foreach($results as $result)
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
            @endforeach
        </div>

    </div>

