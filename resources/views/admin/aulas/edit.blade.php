@extends('layouts.principal')
@section('title' , 'Editar Aula')

@section('content')

 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Editar Aula - {{ $aulas->localizacion }}</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      
                    </p>
					<h1 class="text-center">Aulas</h1>
@include('alerts._dangers')
<form class="form-horizontal form-label-left" method="POST" action="{{ route('aulas.update' , $aulas->id) }}">
                 {{ csrf_field() }}
                 {{ method_field('PUT') }}

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input class="form-control has-feedback-left" id="inputSuccess2" value="{{ $aulas->localizacion }}" placeholder="Ubicacion" type="text" name="localizacion">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input class="form-control" id="inputSuccess3" placeholder="Capacidad" type="text" name="capacidad" value="{{ $aulas->capacidad }}">
                        <span aria-hidden="true" class="fa fa-user form-control-feedback right">
                        </span>
                    </input>
                </div>
                
                
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Editar</button>
            </div>
                	
          </form>


                  </div>
                </div>
              </div>

@endsection

