@extends('techedu.layout.basic')

@section('content')

<!--Breadcrumb Banner Area Start-->
@include('techedu/pages/partials/banner_breadcrumb' )
<!--End of Breadcrumb Banner Area-->


<!--Class Details Area Start-->
<div class="class-details-area section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <div class="class-details-container">
                    <h1>{{$therapy->name}}</h1>
                    <div class="class-details-carousel carousel-style-one">
                        <img src="/img/class/13.jpg" alt="">
                        <img src="/img/class/14.jpg" alt="">
                        <img src="/img/class/15.jpg" alt="">
                        <img src="/img/class/13.jpg" alt="">
                    </div>
                </div>
                <div class="class-details-tab">
                    <div class="class-details-tab-menu">
                        <ul role="tablist" class="nav nav-tabs">
                            <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="overview" href="#overview"><i class="fa fa-graduation-cap"></i>Overview</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="tab-content">
                        <div id="overview" class="tab-pane active" role="tabpanel">
                            <h3>{{ trans('therapy.title.description')}}</h3>
                            <p>{{ $therapy->description }}</p>
                            <h3>{{ trans('therapy.title.about')}}</h3>
                                <div class="tab-info">
                                    <span class="icon">Over 37 lectures and 55.5 hours of content!</span>
                                    <span class="icon">LIVE PROJECT End to End Software Testing Training Included.</span>
                                    <span class="icon">Learn Software Testing and Automation basics from a professional trainer from your own desk.</span>
                                    <span class="icon">Information packed practical training starting from basics to advanced testing techniques.</span>
                                    <span class="icon">Best suitable for beginners to advanced level users and who learn faster when demonstrated.</span>
                                    <span class="icon">Course content designed by considering current software testing technology and the job market.</span>
                                    <span class="icon">Practical assignments at the end of every session.</span>
                                    <span class="icon">Practical learning experience with live project work and examples.</span>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                @if ( isset( $therapy->therapists ) )
                    <div class="single-widget-item">
                        <div class="single-title">
                            <h3>Terapeuci</h3>
                        </div>
                        <div class="single-widget-container">
                            @foreach( $therapy->therapists as $therapist )
                            <div class="teacher-info-widget">
                                <div class="widget-image">
                                    <a href="{{route('teacher_show', [ 'id' => $therapist->id ])}}"><img src="/img/teacher/{{$therapist->id}}.jpg" alt=""></a>
                                </div>
                                <div class="widget-infos">
                                    <h4><a href="{{route('teacher_show', [ 'id' => $therapist->id ])}}">{{ $therapist->name}}</a></h4>
                                    <p>Professor, Harvard College</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!--End of Class Details Area-->
@endsection