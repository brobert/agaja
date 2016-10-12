<div class="col-md-4">
    <div class="single-therapy">
        <div class="single-therapy-image">
            <a href="{{ route('therapy_show', ['id' => $therapy->id ])}}">
                <img src="img/class/10.jpg" alt="">
            </a>
        </div>
        <div class="single-therapy-text">
            <div class="therapy-des">
                <h4><a href="{{ route('therapy_show', ['id' => $therapy->id ])}}">{{ $therapy->name}}</a></h4>
                <p>The concept of the activity room is about 'Learning', through play, in a totally different environment. The perfect class for your child with the best.</p>
            </div>
            <div class="therapy-schedule">
                <span>{{ $therapy->cost}}</span>
                <span class="arrow"><a href="{{ route('therapy_show', ['id' => $therapy->id ])}}"><i class="fa fa-angle-right"></i></a></span>
            </div>
        </div>
    </div>
</div>