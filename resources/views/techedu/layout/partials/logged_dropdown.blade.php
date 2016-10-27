<div class="header-login-register">
    <ul class="login">
        <li>
            <a href="#"><i class="fa fa-user"></i>{{ Auth::user()->name}} {{ Auth::user()->surname}}</a>
            <div class="login-form">
                <ul>
                    <li><a href="/logout"><i class="fa fa-lock"></i>{{trans('page.logout')}}</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>