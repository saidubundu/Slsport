<div class="footbal-table-area mt50">
    <div class="section-title">
        <h4> <span>football tables</span></h4>
    </div>
    <div class="foot-tbl bnr1 mini-bg">
        <h5>Sierra Leone Premiere</h5>
        @foreach($standings as $standing)
        <div class="point-table">
            <div class="team-rank">
                {{$standing->id}}. <img class="sml-logo" src="{{$standing->team->photo->file}}" alt="club-logo">
                <span> {{$standing->team->name}}</span>
            </div>
            <span>{{$standing->points}}</span>
        </div>
            @endforeach

    </div>
</div>
