<div class="header-login-register">
    <ul class="login">
        <li>
            <a href="#"><i class="fa fa-key"></i>{{trans('page.login')}}</a>
            <div class="login-form">
                <h4>{{trans('page.login')}}</h4>
                <form action="{{route('login')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-box">
                        <i class="fa fa-user"></i>
                        <input type="text" name="login" placeholder="{{trans('placeholder.login')}}">
                    </div>
                    <div class="form-box">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="password" placeholder="{{trans('placeholder.password')}}">
                    </div>
                    <div class="button-box">
                        <button type="submit" class="login-btn">{{trans('page.login')}}</button>
                    </div>
                </form>
            </div>
        </li>
    </ul>
</div>