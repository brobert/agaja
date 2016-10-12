@extends('techedu.layout.basic')

@section('content')

<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">{{trans('therapy.list.title')}}</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb">
                            <li><a href="{{route('home')}}">{{trans('page.menu.home')}}</a></li>
                            <li>{{trans('page.menu.therapy')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!--Class Grid Area Start-->
<div class="therapy-grid-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="class-menu">
                    <div class="class-icon">
                        <a href="{{route('class_grid')}}" class="active"><i class="fa fa-th-large"></i></a>
                    </div>
                    <div class="class-icon">
                        <a href="{{route('class_list')}}"><i class="fa fa-bars"></i></a>
                    </div>
                    <div class="search-container">
                        <form action="{{route('therapy')}}" method="get">
                            <input type="text" name="_search" placeholder="Search our classes" value="{{$_search}}" />
                            <button class="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @each('techedu/pages/therapy/partials/list_item', $therapies, 'therapy')
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pagination-content">
                    <div class="pagination-button">
                        <ul class="pagination">
                            <li class="current"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                        </ul>
                        <span>Page:</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Class Grid Area-->

@endsection