@extends('layouts.principal')
@section('title' , 'Datos de Estudiante')

@section('content')

 <div class="  col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      
                    </p>
          <h1 class="text-center">Datos de {{ $estudiante->nombres }} {{ $estudiante->apellidos }}</h1>

          
<div class="form-group">
  <h1>Datos del Estudiante</h1>
    <div class="col-md-6">
      <h3><strong>Nombre - </strong>{{ucfirst(strtolower($estudiante->nombres))  }}</h3>
    </div>
    <div class="col-md-6">
      <h3><strong>Apellido - </strong> {{ ucfirst(strtolower($estudiante->apellidos)) }}</h3>
    </div>

  <div class="col-md-6">
    <h3><strong>Nacionalidad -</strong> {{ ucfirst(strtolower($estudiante->nacionalidad)) }}</h3>
  </div>
  <div class="col-md-6">
    <h3><strong>Genero - </strong> {{ ucfirst(strtolower($estudiante->sexo)) }}</h3>
  </div>
  <div class="col-md-6">
    <h3><strong>Dirección - </strong> {{ ucfirst(strtolower($estudiante->direccion)) }}</h3>
  </div>
  <div class="col-md-6">
    <h3><strong>Telefono - </strong> {{ $estudiante->telefono }}</h3>
  </div>
  <div class="col-md-12">
    <h3><strong>Nombre del Tutor - </strong> {{ ucfirst(strtolower($estudiante->nombre_familiar)) }}</h3>
  </div>
</div>


<div class="form-group  space">
      <h1>Datos del Acta de Nacimiento</h1>
    <div class="col-md-12">
      <h3><strong>Fecha de Nacimiento - </strong>{{ $estudiante->cumpleanos }}</h3>
    </div>
    <div class="col-md-4">
      <h3><strong>Libro - </strong>{{ $estudiante->libro }}</h3>
    </div>
    <div class="col-md-4">
      <h3><strong>Folio - </strong>{{ $estudiante->folio }}</h3>
    </div>
    <div class="col-md-4">
      <h3><strong>Acta - </strong>{{ $estudiante->acta }}  </h3>
    </div>
</div>

<div class="form-group">
      
    <h1>Datos del Curso</h1>
    <div class="col-md-12">
      <h3><strong>Estado del estudiante - </strong>{{ ucfirst(strtolower($estudiante->condicion)) }}</h3>
    </div>
    <div class="col-md-6">
      <h3><strong>Grado - </strong>{{ ucfirst($estudiante->grado) }}</h3>
    </div>
    <div class="col-md-6">
      <h3><strong>Tanda - </strong>{{ucfirst(strtolower($estudiante->tanda))  }}</h3>
    </div>
    
    <div class="col-md-6">
      <h3><strong>Periodo academico - </strong>{{ $estudiante->periodo_academico->fecha_inicio }}</h3>
    </div>
    <div class="col-md-6">
      <h3><strong>Aula - </strong> {{ $estudiante->aula->localizacion}}</h3>
    </div>
</div>

                </div>
              </div>
</div>

@endsection

@section('styles')

<style>
  .space{
    margin-bottom: 170px;
    margin-top: 230px;
  }
    strong , h3{
    color: #000000;
  }

</style>

@endsection