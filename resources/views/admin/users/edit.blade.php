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
          <h1 class="text-center">Aulas</h1>
@include('alerts._dangers')
<form class="form-horizontal form-label-left" method="POST" action="{{ route('users.update' , $users->id) }}">
                 {{ csrf_field() }}
                 {{ method_field('PUT') }}

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input class="form-control has-feedback-left"  value="{{ $users->name }}" placeholder="Ingrese el nombre de usuario" type="text" name="name">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input class="form-control"  placeholder="Capacidad" type="text" name="email" value="{{ $users->email }}">
                        <span aria-hidden="true" class="fa fa-user form-control-feedback right">
                        </span>
                    </input>
                </div>
                <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                    <input class="form-control"  placeholder="Passowrd" type="text" name="password" value="{{ $users->password }}">
                        <span aria-hidden="true" class="fa fa-user form-control-feedback right">
                        </span>
                    </input>
                </div>

                <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                <span aria-hidden="true" class="fa fa-user form-control-feedback left">
                        </span>

                  {{ Form::select('rol',['miembro' => 'Miembro', 'profesor'=>'Profesor', 'admin' => 'Administrador' ], $users->rol, ['class'=>'form-control' , 'placeholder'=> 'Tipo de Usuario']) }}
              </div>
                
                
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Editar</button>
            </div>
                  
          </form>


                  </div>
                </div>
              </div>

@endsection

