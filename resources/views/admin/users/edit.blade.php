@extends('layouts.principal')
@section('title' , 'Editar Usuario')

@section('content')

 <div class="  col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Editar Usuario - {{ $users->name }}</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      
                    </p>
          <h1 class="text-center">Usuario</h1>
@include('alerts._dangers')
<form class="form-horizontal form-label-left" method="POST" action="{{ route('users.update' , $users->id) }}">
                 {{ csrf_field() }}
                 {{ method_field('PUT') }}
  

              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <h3>Seleccione un rol</h3>
                  {{ Form::select('rol', ['invitado'=>'Invitado(a)','secretario' => 'Secretario(a)', 'profesor'=>'Profesor(a)', 'admin' => 'Administrador(a)' ], $users->rol, ['class'=>'form-control' , 'placeholder'=>'Seleccione un Rol']) }}
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              <h3>Status</h3>
                  {{ Form::select('status', ['0'=>'Inactivo(a)','1' => 'Activo(a)'], $users->status, ['class'=>'form-control' , 'placeholder'=>'Seleccione un estado']) }}
              </div>
                
              
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Editar Usuario</button>
            </div>
                  
          </form>


                  </div>
                </div>
              </div>

@endsection

