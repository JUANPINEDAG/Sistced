<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title> @yield('title' , 'Sistced')</title>

    <!-- Bootstrap -->
    {!! Html::style('plugins/bootstrap/css/bootstrap.min.css') !!}
    <!-- Font Awesome -->
    {!! Html::style('plugins/my_theme/font-awesome/css/font-awesome.min.css') !!}
    <!-- Custom Theme Style -->
    {!! Html::style('css/custom.css') !!}
    {!! Html::style('css/freelancer.min.css') !!}

  </head>

  <body class="nav-md">
 
 

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>Sistced</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Actividad de usuario <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">General Elements</a></li>
                
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Aulas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Tables</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Deudas Estudiantiles <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      
                    </ul>
                  </li>
                </ul>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Empleados <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Estudiantes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Materiales Gastables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Periodos Academicos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      
                    </ul>
                  </li>
                    <li><a><i class="fa fa-windows"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      
                    </ul>
                  </li>

                  <li><a><i class="fa fa-sitemap"></i> Facturas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  
                </ul>
              </div>
              
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav ">
          <div class="nav_menu fondo">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars blanco"></i></a>
              </div>

              
                <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="#" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""> <span class="blanco"> {{ Auth::user()->name }} </span>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="{{ route('usuario.edit', Auth::user()->id) }}">Editar Cuenta</a></li>
                     <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Log Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                  </ul>
                </li>
              </ul>
              
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <br />
          <div class="row">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                                    <h1>Esta es la plantilla que usaremos</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid fugit at aperiam, non quos vel reiciendis, dolorum itaque rem veritatis sed quo dicta sint consectetur ipsam minus provident harum maiores!</p>
                      <div class="clearfix"></div>
                      @yield('content')
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Juan Manuel Pineda - Bootstrap Admin Template by <a href="#">By JM</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
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
    
    <style>
      .fondo{
        background-color: #2C3E50;
      }

      .blanco{
        color: #FFFFFF;
      }

      
    </style>
  </body>
</html>
