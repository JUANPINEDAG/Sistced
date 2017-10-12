<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title> @yield('title' , 'Sistced') - Sistced</title>
  
   

    <!-- Bootstrap -->
    {!! Html::style('plugins/bootstrap/css/bootstrap.min.css') !!}
    <!-- Font Awesome -->
    {!! Html::style('plugins/my_theme/font-awesome/css/font-awesome.min.css') !!}
    <!-- Custom Theme Style -->
    {!! Html::style('css/custom.css') !!}
    {!! Html::style('css/frelancer.min.css') !!}

    <!-- Datatables -->
    <link href="{{ asset("vendors/datatables.net-bs/css/dataTables.bootstrap.min.css") }}">
    <link href="{{ asset("vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css") }}">
    <link href="{{ asset("vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css") }}">
    <link href="{{ asset("vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css") }}">
    <link href="{{ asset("vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css") }}">
    <link href="{{ asset('vendors/skins/grn.css') }}">
    <!-- bootstrap-datetimepicker -->
    {!! Html::style('vendors/bootstrap-datetimepicker.min.css') !!}
  
    {!! Html::style('vendors/iCheck/skins/flat/green.css') !!}
     <style>
      .fondo{
        background-color: #2C3E50;
      }

      .blanco{
        color: #FFFFFF;
      }

      
    </style>
    @yield('styles')

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
                <img src="{{ asset('images/img.jpg') }}" alt="..." class="img-circle profile_img">
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
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home</a></li>
                  <li><a><i class="fa fa-desktop"></i> Actividad de usuario</a></li>
                  <li><a href="/aulas"><i class="fa fa-table"></i> Aulas</a></li>
                  <li><a href="/deudas_estudiantiles"><i class="fa fa-bar-chart-o"></i> Deudas Estudiantiles</a></li>
                </ul>
                <ul class="nav side-menu">
                  <li><a href="/empleados"><i class="fa fa-user" ></i> Empleados</a></li>
                  <li><a href="/estudiantes"><i class="fa fa-university" ></i> Estudiantes</a></li>
                  <li><a href="/materiales_gastables"><i class="fa fa-cubes"></i> Materiales Gastables</a></li>
                  <li><a href="/periodos_academicos"><i class="fa fa-calendar"></i> Periodos Academicos</a></li>
                  <li><a href="/users"><i class="fa fa-users"></i> Usuarios </a></li>
                  <li><a><i class="fa fa-sitemap"></i> Facturas</a></li>                  
                </ul>
              </div>
              
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Editar Cuenta" href="{{ route('usuario.edit', Auth::user()->id) }}">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              
              <a data-toggle="tooltip" data-placement="top" title="Cerrar Sesion" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">

                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
               </form>
               
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
                    <img src=" {{ asset('images/img.jpg') }}" alt=""> <span class="blanco"> {{ Auth::user()->name }} </span>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="{{ route('usuario.edit', Auth::user()->id) }}"> <span class="glyphicon glyphicon-edit"></span> Editar Cuenta</a></li>
                     <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"> 
                                      <span class="glyphicon glyphicon-off"></span>
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
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  
                  
                      <div class="clearfix"></div>
                      @yield('content')
    
                  
                </div>
              </div>
            </div>
          </div>
        
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Juan Manuel Pineda - Bootstrap Admin Template by <a href="#">JM</a>
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
    
    <!-- Datatables -->
    <script src="{{ asset("vendors/datatables.net/js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-bs/js/dataTables.bootstrap.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-buttons/js/dataTables.buttons.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-buttons/js/buttons.flash.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-buttons/js/buttons.html5.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-buttons/js/buttons.print.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-keytable/js/dataTables.keyTable.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-responsive/js/dataTables.responsive.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-scroller/js/dataTables.scroller.min.js") }}"></script>
    <script src="{{ asset("vendors/jszip/dist/jszip.min.js") }}"></script>
    <script src="{{ asset("vendors/pdfmake/build/pdfmake.min.js") }}"></script>
    <script src="{{ asset("vendors/pdfmake/build/vfs_fonts.js") }}"></script>
    <script src="{{ asset('vendors/skins/icheck.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-datetimepicker.min.js') }}"></script>
    {{-- input mask --}}
    <script src="{{ URL::asset('js/jquery.inputmask.bundle.min.js') }}"></script>


  <script type="text/javascript">
  
    setTimeout(function() {
            $('#Warning').fadeToggle();
            }, 4000); // <-- time in milliseconds

     setTimeout(function() {
            $('#Success').fadeToggle();
            }, 1000); // <-- time in milliseconds


    /*$('#Datepicker').datetimepicker({
        format: 'hh:mm A'
     });*/
   

$(document).ready(inicializar);

function inicializar(){
   
    $("#cedula").click(cedula);
    $("#pasaporte").click(pasaporte);

    $('#cellphone').inputmask({"mask": "(999)-999-9999"})
    $('#personal_phone').inputmask({"mask": "(999)-999-9999"})
    $('#office_phone').inputmask({"mask": "(999)-999-9999"})
    $("#identity_card").inputmask({"mask": "999-9999999-9"});
}

function cedula(){
    $("#identity_card").inputmask({"mask": "999-9999999-9"});
}

function pasaporte(){
    $("#identity_card").inputmask({"mask": "99999999999"});
}



   </script>
  </body>
</html>
