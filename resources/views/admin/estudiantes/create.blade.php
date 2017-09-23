@extends('layouts.principal')
@section('title' , 'Crear Estudiantes')
@section('content')


 <div class="  col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Crear Estudiantes</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      
                    </p>
          <h1 class="text-center">Estudiantes</h1>
@include('alerts._dangers')
<form class="form-horizontal form-label-left" method="POST" action="{{ route('estudiantes.store') }}">
                 {{ csrf_field() }}  

                 <h3>Datos del Estudiante</h3>              
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="nombres">Nombres</label>
                    <input class="form-control has-feedback-left"  placeholder="Ingresa el nombre del estudiante" type="text" name="nombres">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>

                
          
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="apellidos">Apellidos</label>
                    <input class="form-control" placeholder="Ingresa el apellido del estudiante" type="text" name="apellidos">
                        <span aria-hidden="true" class="fa fa-user form-control-feedback right">
                        </span>
                    </input>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="nacionalidad">Nacionalidad</label>
                
                    <input class="form-control has-feedback-left" id="inputSuccess2" placeholder="Ingresa la nacionalidad del estudiante" type="text" name="nacionalidad">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>

                 <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="nombre_familiar">Nombre Familiar</label>
                
                    <input class="form-control has-feedback-left" id="inputSuccess2" placeholder="Ingresa el nombre del familiar del estudiante" type="text" name="nombre_familiar">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="direccion">Direccion</label>
                
                    <input class="form-control has-feedback-left" id="inputSuccess2" placeholder="Ingresa la dirección del estudiante" type="text" name="direccion">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>
                
                 <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="telefono">Telefono</label>
                
                    <input class="form-control has-feedback-left" id="office_phone" placeholder="Ingrese el número de telefono del estudoante " type="text" name="telefono">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>
        
                <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                <label>Genero:</label>
                    <p>
                        Hombre:
                        <input class="flat" id="genderM" name="sexo" type="radio" value="Hombre"/>

                        Mujer:
                        <input class="flat" id="genderF" name="sexo" type="radio" value="Mujer"/>
                    </p>
                                            
                </div>
                <p><span>.</span></p>
                
                
<h3>Datos del Acta de Nacimiento</h3>
                <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="cumpleanos">Fecha de Nacimiento</label>
                
                    <input class="form-control has-feedback-left" placeholder="Ingresa la fecha de nacimiento del estudiante" type="date" name="cumpleanos">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>
    
              <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="libro">Libro</label>
                
                    <input class="form-control has-feedback-left" id="inputSuccess2" placeholder="Ingresa el codigo del libro del acta de nacimiento" type="text" name="libro">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="folio">Folio</label>
                
                    <input class="form-control has-feedback-left" id="inputSuccess2" placeholder="Ingresa el codigo del folio del acta de nacimiento" type="text" name="folio">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="acta">Acta</label>
                
                    <input class="form-control has-feedback-left" id="inputSuccess2" placeholder="Ingresa el codigo del acta del acta de nacimiento" type="text" name="acta">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>

                <p><span>.</span></p>
                <h3>Datos del Curso</h3> 
                
                    
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="grado">Grado</label>
                
                    <input class="form-control has-feedback-left" id="inputSuccess2" placeholder="Ingresa el grado del estudiante" type="text" name="grado">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>

                


            
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                {!! Form::label('tanda', 'Tanda') !!}
                    <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left"></span>
                    
                    {!! Form::select('tanda',[
                    'Manana' => 'Mañana',
                    'Tarde' => 'Tarde',
                    'Noche' => 'Noche',
                    


                    ],null,['class' => 'form-control has-feedback-left', 'placeholder'=>'seleccione una tanda'])!!}
            </div>

               
                

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                {!! Form::label('periodo_academico_id', 'Periodo Academico') !!}
            <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                {!! Form::select('periodo_academico_id', $periodos, null, ['class'=>'form-control has-feedback-left' , 'placeholder'=>'Seleccione un Periodo Academico']) !!}
                </div>
               

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                {!! Form::label('aula_id', 'Aula') !!}
            <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                {!! Form::select('aula_id', $aulas, null, ['class'=>'form-control has-feedback-left' , 'placeholder'=>'Seleccione un Aula']) !!}
                </div>
               
            <div class="col-md-12 col-xs-12 ">
                <div class="text-center">
              <button type="submit" class="btn btn-primary">Crear Estudiante</button>
            </div>
            </div>
                  
          </form>
                  </div>
                </div>
              </div>

 @endsection