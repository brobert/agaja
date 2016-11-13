@extends('techedu.layout.basic')

@section('content')

@include( 'techedu/pages/partials/banner_breadcrumb' )

<div class="teacher-details-area section-padding">
    <div class="container">
        <div class="row">
            {{ Form::model($teacher) }}
            <div class="col-md-4">
                <img title="{{ $teacher->getFullName() }}" alt="{{ $teacher->getFullName() }}" src="/img/teacher/{{$teacher->photo or '1.jpg'}}">
                {{ Form::text('user[name]' ) }}
            </div>
            <div class="col-md-8">
                    @if( ( Auth::user()->type or 'teacher' ) == 'teacher' )
                        @include( 'techedu/pages/account/partials/form_teacher', $teacher )
                    @endif

            </div>
			{{Form::submit('Zapisz', [ 'class' => 'login-btn'])}}
            {{ Form::close()}}
        </div>
    </div>
</div>

@endsection