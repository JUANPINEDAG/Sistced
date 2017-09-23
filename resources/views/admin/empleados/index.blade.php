@extends('layouts.principal')
@section('title' , 'Empleados')


@section('content')

 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado de Empleados</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      
                    </p>
					<h1 class="text-center">Empleados</h1>

@include('alerts._dangers')
@include('alerts._success') 
<a href="empleados/create" ><span class="fa fa-plus fa-3x pointer blackColor"></span></a>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
					
					 <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombres</th>
                          <th>Apellidos</th>
                          <th>Email</th>
                          <th>Fecha de Nacimiento</th>
                          <th>Sexo</th>
                          <th>Identificación</th>
                          <th>Telefono</th>
                          <th>Estado Civil</th>
                          <th>Materias</th>
                          <th>Acción</th>
                          
                        </tr>
                      </thead>
					
					
                      <tbody>
		                      @foreach ($empleados as $element)
								<tr>
		                          <td>{{ $element->id }}</td>
		                          <td>{{ $element->nombres }}</td>
		                          <td>{{ $element->apellidos }} </td>
                              <td>{{ $element->email }}</td>
                              <td>{{ $element->cumpleanos }}</td>
                              <td>{{ $element->sexo }}</td>
                              <td>{{ $element->identificacion }}</td>
                              <td>{{ $element->telefono }}</td>
                              <td>{{ $element->estado_civil }}</td>
                              <td>{{ $element->nombre_materia }}</td>
		                          <td>
			                         
			                          <a href="{{ route('empleados.edit' , $element->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
			                          

			                          <a href="{{ route('admin.empleados.destroy' , $element->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
		                          </td>
		                        </tr>
							 @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


@endsection
