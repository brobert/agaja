@extends('techedu.layout.basic')

@section('content')

<!--Breadcrumb Banner Area Start-->
@include('techedu/pages/partials/banner_breadcrumb' )
<!--End of Breadcrumb Banner Area-->
<!--Class Grid Area Start-->
<div class="therapy-grid-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="class-menu">
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