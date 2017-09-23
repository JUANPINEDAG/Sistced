@extends('layouts.principal')
@section('title' , 'Usuarios')


@section('content')

 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado de Usuarios</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      
                    </p>
					<h1 class="text-center">Usuarios</h1>
@include('alerts._dangers')
@include('alerts._success') 
                    <table id="datatable-buttons" class="table table-striped table-bordered">
						@include('admin.users.create')                    
					 <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Email</th>
                          <th>Rol</th>
                          <th>Acción</th> 
                        </tr>
                      </thead>
						
					
                      <tbody>
		                      @foreach ($users as $element)
								<tr>
		                          <td>{{ $element->id }}</td>
		                          <td>{{ $element->name }}</td>
		                          <td>{{ $element->email }} </td>
		                          <td>{{ $element->rol }}</td>
		                          <td>
			                         
			                          <a href="{{ route('users.edit' , $element->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
			                          

			                          <a href="{{ route('admin.users.destroy' , $element->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
		                          </td>
		                        </tr>
							 @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


@endsection
