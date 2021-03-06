@extends('layouts.principal')
@section('title' , 'Editar Empleado')
@section('content')


 <div class="  col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Editar Empleado</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      
                    </p>
          <h1 class="text-center">Empleados</h1>
@include('alerts._dangers')
<form class="form-horizontal form-label-left" method="POST" action="{{ route('empleados.update' , $empleados->id) }}">
                 {{ csrf_field() }}
                 {{ method_field('PUT') }}
                 
                
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="nombres">Nombres</label>
                    <input class="form-control has-feedback-left" value="{{ $empleados->nombres }}" placeholder="Nombres" type="text" name="nombres">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>

                
          
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="apellidos">Apellidos</label>
                    <input class="form-control" value="{{ $empleados->apellidos }}" placeholder="Apellidos" type="text" name="apellidos">
                        <span aria-hidden="true" class="fa fa-user form-control-feedback right">
                        </span>
                    </input>
                </div>
                
        
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="email">Correo Electronico</label>
                    <input class="form-control has-feedback-left" value="{{ $empleados->email }}" placeholder="Email" type="text" name="email">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="cumpleanos">Fecha de Nacimiento</label>
                
                    <input class="form-control has-feedback-left" value="{{ $empleados->cumpleanos }}" placeholder="Fecha de Nacimiento" type="date" name="cumpleanos">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
        
                  <label for="identity_card">Cedula o Pasaporte</label>
                  <div class="input-group">

                    <input type="text" class="form-control has-feedback-left" id="identity_card" value="{{ $empleados->identificacion }}" name="identificacion" placeholder="Ingrese su identificación">
                    <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                     </span>

                    <div class="input-group-btn">
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Opción <span class="caret"></span></button>
                      <ul class="dropdown-menu pull-right">
                         <li id="cedula"><a href="#">Cedula</a></li>
                        <li id="pasaporte"><a href="#">Pasaporte</a></li>
                      </ul>
                    </div><!-- /btn-group -->
                  </div><!-- /input-group -->
                  </div>
                
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <label>Genero:</label>

                    <p class="form-control">
                        Mujer:
                        <input checked="" class="flat" id="genderM" name="sexo" required="" type="radio" value="Mujer"/>
                          Hombre:
                        <input class="flat" id="genderF" name="sexo" type="radio" value="Hombre"/>
                    </p>
                                            
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="telefono">Telefono</label>
                
                    <input class="form-control has-feedback-left" id="office_phone" value="{{ $empleados->telefono }}" placeholder="Fecha de Nacimiento" type="text" name="telefono">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>


                
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                {!! Form::label('estado_civil', 'Estado Civil') !!}
                    <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left"></span>
                    
                    {!! Form::select('estado_civil',[
                    'Soltero/a' => 'Soltero/a',
                    'Casado/a' => 'Casado/a',
                    'Comprometido/a' => 'Comprometido/a',
                    'Divorciado/a' => 'Divorciado/a',


                    ],$empleados->estado_civil,['class' => 'form-control has-feedback-left', 'placeholder'=>'-- seleccione una opción --'])!!}
            </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="materias">Materias</label>
                
                    <input class="form-control has-feedback-left" value="{{ $empleados->nombre_materia }}" placeholder="Ingrese la materia" type="text" name="nombre_materia">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>
                
                
            <div class="text-center col-md-12">
              <button type="submit" class="btn btn-primary">Editar</button>
            </div>
                  
          </form>
                  </div>
                </div>
              </div>

 @endsection