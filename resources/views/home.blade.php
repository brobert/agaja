@extends('layout.main')


@section('content')

    @foreach( $sections as $section)
        @include('techedu.partials.' . $section['name'] )
    @endforeach


@endsection