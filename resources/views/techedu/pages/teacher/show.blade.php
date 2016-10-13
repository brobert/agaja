@extends('techedu.layout.basic')

@section('content')

@include( 'techedu/pages/partials/banner_breadcrumb' )

<!--Teacher Details Area Start-->
<div class="teacher-details-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="teacher-details-image">
                    <img src="/img/teacher/{{$teacher->id}}.jpg" alt="">
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
                    <h4>{{$teacher->name}}</h4>
                    <span>Professor, Harvard College</span>
                    <div class="teacher-info-text">
                        <span><i class="fa fa-envelope"></i>Email: admin@power-boosts.com</span>
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
                    <p>He works in partnership with clients, advising them how to use information technology in order to meet their business objectives or overcome problems. Lorem ipsum dolor sit amet, consectetur adipiscing elites. Nulla convallis egestas rhoncusa. Donec lorem facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam Proin vestibulum leo eget erat congue interdum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elites. Nulla convallis egestas rhoncusa. Donec lorem facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam Proin vestibulum leo eget erat congue interdum. Nulla convallis egestas rhoncusa. Donec lorem facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam Proin vestibulum leo eget erat congue interdum.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Teacher Details Area-->
@endsection