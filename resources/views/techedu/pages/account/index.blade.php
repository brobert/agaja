@extends('techedu.layout.basic')

@section('content')

@include( 'techedu/pages/partials/banner_breadcrumb' )

<div class="teacher-details-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img title="{{ $teacher->get_full_name() }}" alt="{{ $teacher->get_full_name() }}" src="/img/teacher/{{$teacher->photo or '1.jpg'}}">
            </div>
            <div class="col-md-8">
                    @if( ( Auth::user()->type or 'teacher' ) == 'teacher' )
                        @include( 'techedu/pages/account/partials/form_teacher', $teacher )
                    @endif

            </div>
        </div>
    </div>
</div>

@endsection