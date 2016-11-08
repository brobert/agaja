<div class="col-md-3 col-sm-4">
    <div class="single-teachers-column text-center">
        <div class="teachers-image-column">
            <a href="{{route('teacher_show', ['id' => $teacher->id ])}}">
                <img src="img/teacher/{{ $teacher->photo}}" alt="">
                <span class="image-hover">
                    <span><i class="fa fa-edit"></i>{{ trans('common.read_more')}}</span>
                </span>
            </a>
        </div>
        <div class="teacher-column-carousel-text">
            <h4>
                <a href="{{route('teacher_show', ['id' => $teacher->id ])}}">
                    {{ $teacher->user->name}} {{ $teacher->user->surname}}
                </a>
            </h4>
            <span>{{ $teacher->position }}</span>
            <p>{{ str_limit( $teacher->description, 150 )}}</p>
            <div class="social-links">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>