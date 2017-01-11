<!-- Menu header BEGIN -->
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
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="/img/logo/logo-agaja.png" alt="Agaja" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
<!-- Menu header END -->