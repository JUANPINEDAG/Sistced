@extends('layouts.principal')
@section('title' , 'Materiales Gastables')

@section('content')

 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado de Materiales Gastables</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      
                    </p>
					<h1 class="text-center">Materiales Gastables</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <div class="container">
        	<ul>
            @foreach ($errors->all() as $error)
                <li><span class="fa fa-info-circle"></span> {{ $error }}</li>
            @endforeach
        </ul>
        </div>
    </div>
@endif

@include('alerts._success') 
                    <table id="datatable-buttons" class="table table-striped table-bordered">
						@include('admin.materiales_gastables.create')                    
					 <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre del Articulo</th>
                          <th>Cantidad</th>
                          <th>Acción</th> 
                        </tr>
                      </thead>
						
					
                      <tbody>
		                      @foreach ($materiales as $element)
								        <tr>
		                          <td>{{ $element->id }}</td>
		                          <td>{{ $element->nombre}}</td>
		                          <td>{{ $element->cantidad }} - Unidades</td>
		                          <td>
			                         
			                          <a href="{{ route('materiales_gastables.edit' , $element->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
			                          

			                          <a href="{{ route('admin.materiales_gastables.destroy' , $element->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
		                          </td>
		                        </tr>
							 @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


@endsection
