<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area {{ $banner_title }}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">{{ trans ( sprintf( 'page.menu.%s', $banner_title) ) }}</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb">
                            @foreach( $bread_crumbs as $crumb )
                                @if ( $loop->last )
                                    <li>{{ $crumb['text'] }}</li>
                                @else
                                    <li><a href="{{ $crumb['url'] }}">{{ $crumb['text'] }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->