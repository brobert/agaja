@extends('techedu.layout.basic')

@section('content')

@include( 'techedu/pages/partials/banner_breadcrumb' )

<!--Teacher Details Area Start-->
<div class="teacher-details-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="teacher-details-image">
                    <img src="/img/teacher/{{$teacher->photo or '1.jpg'}}" alt="">
                    @if( $teacher->social_media )
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    @endif
                </div>
                <div class="teacher-details-info">
                    <h4>{{$teacher->name}} {{$teacher->surname}}</h4>
                    <span>{{$teacher->education }}</span>
                    <div class="teacher-info-text">
                        <span><i class="fa fa-envelope"></i>Email: {{$teacher->email}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="teacher-about-info">
                    <div class="single-title">
                        <h3>About</h3>
                    </div>
                    <div class="teacher-info-text">
                        <span><i class="fa fa-graduation-cap"></i>{{trans('teacher.degree')}}: {{ $teacher->degree }}</span>
                        <span><i class="fa fa-star"></i>{{trans('teacher.experience')}}: {{ $teacher->skills }}</span>
                        <span><i class="fa fa-edit"></i>{{trans('teacher.courses')}}: {{ $teacher->courses }}</span>
                    </div>
                    <p>{{$teacher->description}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Teacher Details Area-->
@endsection