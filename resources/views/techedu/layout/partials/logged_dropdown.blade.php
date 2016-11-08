<div class="header-login-register">
    <ul class="login">
        <li>
            <a href="#"><i class="fa fa-user"></i>{{ Auth::user()->name}} {{ Auth::user()->surname}}</a>
            <div class="login-form">
                <ul>
                    <li><a href="{{ route('account') }}"><i class="fa fa-lock"></i>{{trans('page.menu.account')}}</a></li>
                    <li><a href="{{ route('setting') }}"><i class="fa fa-lock"></i>{{trans('page.menu.admin.settings')}}</a></li>
                    <li><a href="{{ route('logout') }}"><i class="fa fa-lock"></i>{{trans('page.menu.logout')}}</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>