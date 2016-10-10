@extends('techedu.layout.basic')

@section('content')

<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area teachers">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Teachers</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Teachers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!--Teacher Fullwidth Area Start-->
<div class="teacher-fullwidth-area section-padding">
    <div class="container">
        <div class="row">
            @each('techedu/pages/teacher/partials/index_profile', $teachers, 'teacher')
        </div>
        <div class="col-md-12">
            <div class="button text-center">
                <a href="#" class="button-default button-yellow"><i class="fa fa-refresh"></i>Load More</a>
            </div>
        </div>
    </div>
</div>
<!--End of Teacher Fullwidth Area-->

@endsection