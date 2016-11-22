<!--Header Area Start-->
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 hidden-xs">
                    <div class="header-top-info">
                        <span>@lang('page.opened', [ 'begin' => config( 'agaja.begin' ), 'end' => config( 'agaja.end' ) ])</span>
                        <div class="social-links">
                            @foreach (config( 'agaja.social_media' ) as $name => $link )
                                <a href="{{$link}}" target="blank"><i class="fa fa-{{$name}}"></i></a>
                            @endforeach
                          </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5">
                    @if ( Auth::check() )
                        @include('techedu/layout/partials/logged_dropdown')
                    @else
                        @include('techedu/layout/partials/login_dropdown')
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--Logo Mainmenu Start-->
    <div class="header-logo-menu" topSpacing="20">
        <div class="container">
            <div class="logo-menu-bg">
                <div class="row">
                    <div class="col-md-2 col-sm-12">
                        <div class="logo">
                            <a href="{{route('home')}}" title="{{ config('agaja.logo.title') }}">
                                <img src="{{ config('agaja.logo.src') }}" alt="{{ config('agaja.logo.title') }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10 hidden-sm hidden-xs">
                        <div class="mainmenu-area">
                            <div class="mainmenu">
                                <nav>
                                    <ul id="nav">
                                        <li class="current">
                                            <a href="{{route('home')}}">{{trans('page.menu.home')}}</a>
                                         </li>
                                        <li>
                                            <a href="{{route('about')}}">{{trans('page.menu.about')}}<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('about', ['#history'])}}">{{trans('page.menu.about_history')}}</a></li>
                                                <li><a href="{{route('about', ['#offer'])}}">{{trans('page.menu.about_offer')}}</a></li>
                                                <li><a href="{{route('about', ['#stuff'])}}">{{trans('page.menu.about_stuff')}}</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('therapy')}}">{{trans('page.menu.therapy')}}<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('therapy_show', ['id' => 1])}}">Terapia 1</a></li>
                                                <li><a href="{{route('therapy_show', ['id' => 2])}}">Terapia 2</a></li>
                                                <li><a href="{{route('therapy_show', ['id' => 3])}}">Terapia 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/teacher">{{trans('page.menu.teacher')}}<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                            @foreach( $menu_teachers as $teacher )
                                                <li><a href="{{route('teacher_show', ['id' => $teacher->id ])}}">{{ $teacher->getFullName()}}</a></li>
                                            @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="{{route('contact')}}">{{trans('page.menu.contact')}}</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Logo Mainmenu-->
</header>
<!--End of Header Area-->