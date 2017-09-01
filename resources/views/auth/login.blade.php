<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    
     <!-- Bootstrap -->
    {!! Html::style('plugins/bootstrap/css/bootstrap.min.css') !!}
    <!-- Font Awesome -->
    {!! Html::style('plugins/my_theme/font-awesome/css/font-awesome.min.css') !!}
    <!-- Custom Theme Style -->
    {!! Html::style('css/custom.min.css') !!}

</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
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
            </div>
        </nav>
<br>
<br>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <d

                        iv class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                           

   


<div class="container">
    <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>
                                            Form Design
                                            <small>
                                                different form elements
                                            </small>
                                        </h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li>
                                                <a class="collapse-link">
                                                    <i class="fa fa-chevron-up">
                                                    </i>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                                    <i class="fa fa-wrench">
                                                    </i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">
                                                            Settings 1
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Settings 2
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="close-link">
                                                    <i class="fa fa-close">
                                                    </i>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                    <div class="x_content">
                                        <br/>
                                        <form class="form-horizontal form-label-left input_mask">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name" type="text">
                                                    <span aria-hidden="true" class="fa fa-user form-control-feedback left">
                                                    </span>
                                                </input>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input class="form-control" id="inputSuccess3" placeholder="Last Name" type="text">
                                                    <span aria-hidden="true" class="fa fa-user form-control-feedback right">
                                                    </span>
                                                </input>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email" type="text">
                                                    <span aria-hidden="true" class="fa fa-envelope form-control-feedback left">
                                                    </span>
                                                </input>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input class="form-control" id="inputSuccess5" placeholder="Phone" type="text">
                                                    <span aria-hidden="true" class="fa fa-phone form-control-feedback right">
                                                    </span>
                                                </input>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                                    Default Input
                                                </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input class="form-control" placeholder="Default Input" type="text">
                                                    </input>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                                    Disabled Input
                                                </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input class="form-control" disabled="disabled" placeholder="Disabled Input" type="text">
                                                    </input>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                                    Read-Only Input
                                                </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input class="form-control" placeholder="Read-Only Input" readonly="readonly" type="text">
                                                    </input>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                                    Date Of Birth
                                                    <span class="required">
                                                        *
                                                    </span>
                                                </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                                    </input>
                                                </div>
                                            </div>
                                            <div class="ln_solid">
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                    <button class="btn btn-primary" type="button">
                                                        Cancel
                                                    </button>
                                                    <button class="btn btn-primary" type="reset">
                                                        Reset
                                                    </button>
                                                    <button class="btn btn-success" type="submit">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                        </div>
</div>
 <!-- jQuery -->
    <script src="{{ asset('plugins/JS/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src=" {{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    
    <!-- DateJS -->
    <script src="{{ URL::asset('vendors/date.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('js/custom.min.js') }}"></script>
    
  </body>
</html>
