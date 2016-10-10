<div class="col-md-3 col-sm-4">
    <div class="single-teachers-column text-center">
        <div class="teachers-image-column">
            <a href="{{route('teacher_show', ['id' => $teacher->id ])}}">
                <img src="img/teacher/{{ $teacher->photo or 1}}.jpg" alt="">
                <span class="image-hover">
                    <span><i class="fa fa-edit"></i>View Profile</span>
                </span>
            </a>
        </div>
        <div class="teacher-column-carousel-text">
            <h4>{{ $teacher->name or 'Unknown'}}</h4>
            <span>Professor, Harvard College</span>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            <div class="social-links">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>