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
                    <span>{{$teacher->position }}</span>
                    <div class="teacher-info-text">
                        <span><i class="fa fa-envelope"></i>Email: {{$teacher->email}}</span>
                    </div>
                    <div class="teacher-about-info">

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="teacher-about-info">
                    <div class="single-title">
                        <h3>About</h3>
                    </div>
                        <div class="teacher-info-text">
{{--                            <span>
                                <i class="fa fa-graduation-cap"></i>
                                <span class="fa about-label">{{trans('teacher.degree')}}: </span>
                                {{ $teacher->education }}
                            </span>
--}}
                            @include('techedu/pages/teacher/partials/skills', ['label' => 'teacher.degree', 'items' => $teacher->education])

                            @include('techedu/pages/teacher/partials/skills', ['label' => 'teacher.skills', 'items' => $teacher->skills])

                            @include('techedu/pages/teacher/partials/skills', ['label' => 'teacher.courses', 'items' => $teacher->courses])

                        </div>
                    <p>{{$teacher->description}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Teacher Details Area-->
@endsection