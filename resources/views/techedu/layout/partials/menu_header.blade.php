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
                    <div class="header-login-register">
                        <ul class="login">
                            <li>
                                <a href="#"><i class="fa fa-key"></i>{{trans('page.login')}}</a>
                                <div class="login-form">
                                    <h4>{{trans('page.login')}}</h4>
                                    <form action="#" method="post">
                                        <div class="form-box">
                                            <i class="fa fa-user"></i>
                                            <input type="text" name="user-name" placeholder="{{trans('placeholder.login')}}">
                                        </div>
                                        <div class="form-box">
                                            <i class="fa fa-lock"></i>
                                            <input type="password" name="user-password" placeholder="{{trans('placeholder.password')}}">
                                        </div>
                                        <div class="button-box">
                                            <button type="submit" class="login-btn">{{trans('page.login')}}</button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
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
                                            <a href="/">{{trans('page.menu.home')}}</a>
                                         </li>
                                        <li><a href="/about">{{trans('page.menu.about')}}</a></li>
                                        <li><a href="{{route('therapy_list')}}">{{trans('page.menu.therapy')}}<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('therapy_show', ['id' => 1])}}">Terapia 1</a></li>
                                                <li><a href="{{route('therapy_show', ['id' => 2])}}">Terapia 2</a></li>
                                                <li><a href="{{route('therapy_show', ['id' => 3])}}">Terapia 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/teacher">{{trans('page.menu.stuff')}}<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="/teacher/1">Agnieszka</a></li>
                                                <li><a href="/teacher/2">Ola</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/gallery">Gallery</a></li>
                                        <li><a href="/">Pages <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="/about">{{trans('page.menu.about')}}</a></li>
                                                <li><a href="/blog">Blog Page</a></li>
                                                <li><a href="/blog/details">Blog Details Page</a></li>
                                                <li><a href="{{route('class_grid')}}">Class Grid</a></li>
                                                <li><a href="{{route('class_list')}}">Class List</a></li>
                                                <li><a href="/class/details">Class Details</a></li>
                                                <li><a href="/teacher">Teachers Page</a></li>
                                                <li><a href="/teacher/info">Teachers Info</a></li>
                                                <li><a href="/gallery">Gallery</a></li>
                                                <li><a href="/contact">Contact</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/blog">Blog<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="/blog/details">Blog Details</a></li>
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
    <!-- Mobile Menu Area start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="/index">HOME</a>
                                    <ul>
                                        <li><a href="/index-2">Homepage Version 2</a></li>
                                        <li><a href="/index-3">Homepage Version 3</a></li>
                                        <li><a href="/index-4">Homepage Version 4</a></li>
                                        <li><a href="/index-5">Homepage Version 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="/about">About Us</a></li>
                                <li><a href="/class-grid">Classes</a>
                                    <ul>
                                        <li><a href="/class-grid">Classes Grid</a></li>
                                        <li><a href="/class-list">Classes List</a></li>
                                        <li><a href="/class-details">Class Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="/teacher">Teachers Page</a>
                                    <ul>
                                        <li><a href="/teacher-info">Teachers Info</a></li>
                                    </ul>
                                </li>
                                <li><a href="/gallery">Gallery</a></li>
                                <li><a href="/blog">Blog Page</a>
                                    <ul>
                                        <li><a href="/blog-details">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="/contact">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area end -->
</header>
<!--End of Header Area-->