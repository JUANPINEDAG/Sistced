@extends('layouts.principal')
@section('title' , 'Periodos Academicos')


@section('content')

 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado de Periodos Academicos</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      
                    </p>
					<h1 class="text-center">Periodos Academicos</h1>
@include('alerts._dangers')
@include('alerts._success') 
                    <table id="datatable-buttons" class="table table-striped table-bordered">
						@include('admin.periodos_academicos.create')                    
					 <thead>
                        <tr>
                          <th>ID</th>
                          <th>Fecha de Inicio</th>
                          <th>Fecha de Finalidad</th>
                          <th>Acción</th> 
                        </tr>
                      </thead>
						
					
                      <tbody>
		                      @foreach ($periodos as $element)
								<tr>
		                          <td>{{ $element->id }}</td>
		                          <td>{{ $element->fecha_inicio }}</td>
		                          <td>{{ $element->fecha_fin }} </td>
		                          <td>
			                         
			                          <a href="{{ route('periodos_academicos.edit' , $element->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
			                          

			                          <a href="{{ route('admin.periodos_academicos.destroy' , $element->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
		                          </td>
		                        </tr>
							 @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


@endsection
