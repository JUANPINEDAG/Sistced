<div class="text-right ">
<a href="#" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus fa-3x pointer blackColor"></span></a>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title text-center" id="myModalLabel">Crear Aula</h1>
      </div>
      <div class="modal-body">
       <div class="row">
          <div class="">
                                
            <form class="form-horizontal form-label-left" method="POST" action="{{ route('aulas.store') }}">
                 {{ csrf_field() }}
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input class="form-control has-feedback-left" id="inputSuccess2" placeholder="Aula" type="text" name="localizacion">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input class="form-control" id="inputSuccess3" placeholder="Capacidad" type="text" name="capacidad">
                        <span aria-hidden="true" class="fa fa-user form-control-feedback right">
                        </span>
                    </input>
                </div>
                
            <div class="text-center">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Crear</button>
            </div>
                	
          </form>
                                   
      	</div>
      
    </div>
  </div>
</div>
 </div>
 </div>