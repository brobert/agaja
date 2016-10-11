@extends('techedu.layout.basic')

@section('content')

    @include('techedu.partials.slider_main_area')
{{--    @include('techedu.partials.activity_area') --}}
    @include('techedu.partials.class_area')
{{--    @include('techedu.partials.service_area')   --}}
    @include('techedu.partials.teachers_area')
    @include('techedu.partials.galery_area')
    @include('techedu.partials.google_map_area')

@endsection