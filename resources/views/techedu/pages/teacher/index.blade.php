@extends('techedu.layout.basic')

@section('content')

@include( 'techedu/pages/partials/banner_breadcrumb' )

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