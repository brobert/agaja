<div class="col-md-4">
    <div class="single-therapy">
{{--
        <div class="single-therapy-image">
            <a href="{{ route('therapy_show', ['id' => $therapy->id ])}}">
                <img src="img/class/10.jpg" alt="">
            </a>
        </div>
--}}
        <div class="single-therapy-text">
            <div class="therapy-des">
                <h4><a href="{{ route('therapy_show', ['id' => $therapy->id ])}}">{{ $therapy->name}}</a></h4>
                <p>{{ $therapy->description }}</p>
            </div>
            <div class="therapy-schedule">
                <span>{{ $therapy->duration}} / {{ $therapy->cost}}</span>
                <span class="arrow"><a href="{{ route('therapy_show', ['id' => $therapy->id ])}}"><i class="fa fa-angle-right"></i></a></span>
            </div>
        </div>
    </div>
</div>