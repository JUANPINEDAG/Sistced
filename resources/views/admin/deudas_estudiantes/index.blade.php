@extends('layouts.principal')
@section('title' , 'Estudiantes')


@section('content')

 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado de las Deudas de los Estudiantes</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      
                    </p>
					<h1 class="text-center">Deudas Estudiantiles</h1>

@include('alerts._dangers')
@include('alerts._success') 
<a href="deudas_estudiantes/create" ><span class="fa fa-plus fa-3x pointer blackColor"></span></a>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
					
					 <thead>
                        <tr>
                          <th>ID</th>
                          <th>Mensualidad</th>
                          <th>Nombres</th>
                          <th>Acción</th>
                          
                        </tr>
                      </thead>
					
					
                      <tbody>
		                      @foreach ($deudas as $element)
								<tr>
		                          <td>{{ $element->id }}</td>
                              <td>{{ $element->mensualidad }}</td>
                              <td>{{ $element->total_pagar }}</td>
		                          
                              
		                          <td>
			                         
			                          <a href="{{ route('deudas_estudiantiles.edit' , $element->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
			                          

			                          <a href="{{ route('admin.deudas_estudiantiles.destroy' , $element->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
		                          </td>
		                        </tr>
							 @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


@endsection
