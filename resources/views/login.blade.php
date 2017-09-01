<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    
    <!-- Bootstrap -->
    {!! Html::style('plugins/bootstrap/css/bootstrap.min.css') !!}
    <!-- Font Awesome -->
    {!! Html::style('plugins/my_theme/font-awesome/css/font-awesome.min.css') !!}

    {!! Html::style('css/freelancer.min.css') !!}
</head>
<body>
  <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">Sistced</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
        <!-- Header -->
<br>
<br><br>
        <!--section-->
       <div class="container">
                            <section id="contact">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <h2>Inicio de Sesión</h2>
                                            <hr class="star-primary">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-lg-offset-2">
                                            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                                            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                                           
                                            <form  id="contactForm" novalidate method="POST" action="{{ route('login') }}">
                                            {{ csrf_field() }}
                                                <div class="row control-group">
                                                    <div class="form-group col-xs-12 floating-label-form-group controls {{ $errors->has('email') ? ' has-error' : '' }}">
                                                        <label for="email">Email Address</label>
                                                        <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Por favor ingresa tu correo electronico." name="email">
                                                        @if ($errors->has('email'))
                                                            <p class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </p>
                                                        @endif
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>
                                                
                                                

                                                  <div class="row control-group">
                                                      <div class="form-group col-xs-12 floating-label-form-group controls {{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <label for="password" class="col-md-4 control-label">Password</label>

                                                        <input id="password" type="password" class="form-control" name="password" required data-validation-required-message="Por favor ingresa tu contraseña." placeholder="Password">

                                                        @if ($errors->has('password'))
                                                            <p class="help-block">
                                                                {{ $errors->first('password') }}
                                                            </p>
                                                        @endif
                                                        <p class="help-block text-danger"></p>
                                                </div>  
                                                  </div>
                                                  
                                                <br>
                                                <div id="success"></div>
                                                <div class="row text-center">
                                                    <div class="form-group col-xs-12">
                                                        <button type="submit" class="btn btn-success btn-lg">Login</button>
                                                        <a class="btn btn-warning btn-lg" href="{{ route('password.request') }}">
                                                            Forgot Your Password?
                                                        </a>
                                                    </div>
                                                    
                                                </div>

                                            </form>
                                        </div>

                                    </div>     
                            </section> 
                     </div>  
    
    </div>


    <script src="{{ asset('plugins/JS/jquery.min.js') }}"></script>
    <script src=" {{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/js/contact_me.js') }}"></script>
    <script src="{{ asset('js/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('js/js/freelancer.min.js') }}"></script>
</body>
</html>