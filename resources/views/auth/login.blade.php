@extends('auth.layouts')
@section('title' , 'Log In')
@section('content')
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
                                                        <input type="email" class="form-control" placeholder="Email Address" id="email" value="{{ old('email') }}" required data-validation-required-message="Por favor ingresa tu correo electronico." name="email">
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
                                                        <button type="submit" class="btn btn-success btn-lg">Loguear</button>
                                                        <a class="btn btn-warning btn-lg" href="{{ route('password.request') }}">
                                                            Olvidó su contraseña?
                                                        </a>
                                                    </div>
                                                    
                                                </div>

                                            </form>
                                        </div>

                                    </div>     
                            </section> 
    </div>  
    
@endsection