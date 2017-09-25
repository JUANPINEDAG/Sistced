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

          
<h3>Nombre - {{ $estudiante->nombres }}</h3>
<h3>Apellido - {{ $estudiante->apellidos }}</h3>
<h3>Fecha de Nacimiento - {{ $estudiante->cumpleanos }}</h3>
<h3>Sexo {{ $estudiante->sexo }}</h3>
<h3>Libro {{ $estudiante->libro }}</h3>
<h3>Folio {{ $estudiante->folio }}</h3>
<h3>Acta {{ $estudiante->acta }}  </h3>
<h3>Nacionalidad {{ $estudiante->nacionalidad }}</h3>
<h3>Grado {{ $estudiante->grado }}</h3>
<h3>Dirección {{ $estudiante->direccion }}</h3>
<h3>{{ $estudiante->condicion }}</h3>
<h3>Tanda {{ $estudiante->tanda }}</h3>
<h3>Telefono {{ $estudiante->telefono }}</h3>
<h3>Tutor {{ $estudiante->nombre_familiar }}</h3>
<h3>Periodo academico{{ $estudiante->periodo_academico->fecha_inicio }}</h3>
<h3>Aula {{ $estudiante->aula->localizacion}}</h3>

          
                </div>
              </div>
</div>

@endsection

