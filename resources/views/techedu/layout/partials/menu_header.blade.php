<!--Header Area Start-->
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 hidden-xs">
                    <div class="header-top-info">
                        <span>{{trans('page.opened')}}</span>
                        <div class="social-links">
                            <a href="https://www.facebook.com/GabinetAgaja" target="blank"><i class="fa fa-facebook"></i></a>
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
                            <a href="/"><img src="/img/logo/logo-agaja.png" alt="Agaja"></a>
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
                                        <li><a href="/about">{{trans('page.menu.about')}}</a></li>
                                        <li><a href="{{route('therapy')}}">{{trans('page.menu.therapy')}}<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('therapy_show', ['id' => 1])}}">Terapia 1</a></li>
                                                <li><a href="{{route('therapy_show', ['id' => 2])}}">Terapia 2</a></li>
                                                <li><a href="{{route('therapy_show', ['id' => 3])}}">Terapia 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/teacher">{{trans('page.menu.teacher')}}<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('teacher_show', ['id' => 6])}}">Agnieszka</a></li>
                                                <li><a href="{{route('teacher_show', ['id' => 7])}}">Ola</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
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