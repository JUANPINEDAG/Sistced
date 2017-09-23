@extends('layouts.principal')
@section('title' , 'Estudiantes')


@section('content')

 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado de Estudiantes</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      
                    </p>
					<h1 class="text-center">Estudiantes</h1>

@include('alerts._dangers')
@include('alerts._success') 
<a href="estudiantes/create" ><span class="fa fa-plus fa-3x pointer blackColor"></span></a>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
					
					 <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombres</th>
                          <th>Apellidos</th>
                          <th>Fecha de Nacimiento</th>
                          <th>Grado</th>
                          <th>Sexo</th>                         
                          <th>Telefono</th>
                          <th>Direccion</th>
                          <th>Acción</th>
                          
                        </tr>
                      </thead>
					
					
                      <tbody>
		                      @foreach ($estudiantes as $element)
								<tr>
		                          <td>{{ $element->id }}</td>
		                          <td>{{ $element->nombres }}</td>
		                          <td>{{ $element->apellidos }} </td>
                              <td>{{ $element->cumpleanos }}</td>
                              <th>{{ $element->grado }}</th>
                              <td>{{ $element->sexo }}</td>
                              <td>{{ $element->telefono }}</td>
                              <td>{{ $element->direccion }}</td>
		                          <td>
			                         <a href="/deudas_estudiantiles/create" class="btn btn-info  btn-xs"><span class="fa fa-dollar"></span> Pagar <br></a>
			                          <a href="{{ route('estudiantes.edit' , $element->id) }}" class="btn btn-warning btn-xs"><span class=" glyphicon glyphicon-pencil"></span></a>
			                          <a href="{{ route('admin.estudiantes.destroy' , $element->id) }}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></a>
		                          </td>
		                        </tr>
							 @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


@endsection
