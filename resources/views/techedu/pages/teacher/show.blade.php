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
                    <h4>{{$teacher->user->name}} {{$teacher->user->surname}}</h4>
                    <span>{{$teacher->position }}</span>
                    <div class="teacher-info-text">
                        <span><i class="fa fa-envelope"></i>Email: {{ Html::email( $teacher->user->email ) }}</span>
                    </div>
                    <div class="teacher-about-info">

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="teacher-about-info">
                    <ul class="nav nav-tabs mb-10">
                        <li class="active">
                            <a data-toggle="tab" href="#about">{{ trans('teacher.info.about') }}</a>
                        </li>
                        @foreach (['education', 'skills', 'courses' ] as $type )
                            @if ( count( $teacher->$type ))
                                <li>
                                    <a data-toggle="tab" href="#{{$type}}">{{ trans('teacher.info.' .$type ) }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                    <div class="tab-content">
                        <div id="about" class="tab-pane fade in active">
                            <p>{{$teacher->description}}</p>
                        </div>
                        @foreach (['education', 'skills', 'courses' ] as $type )
                            @if ( count( $teacher->$type ))
                                <div id="{{ $type }}" class="tab-pane fade">
                                    @include('techedu/pages/teacher/partials/skills', ['label' => 'teacher.' . $type, 'items' => $teacher->$type ])
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Teacher Details Area-->
@endsection