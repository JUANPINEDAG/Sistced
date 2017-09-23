@extends('layouts.principal')
@section('title' , 'Realizar Pago')
@section('content')


 <div class="  col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pago Estudiantil</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      
                    </p>
          <h1 class="text-center">Pagos</h1>
@include('alerts._dangers')
<form class="form-horizontal form-label-left" method="POST" action="{{ route('deudas_estudiantiles.store') }}">
                 {{ csrf_field() }}  

                 <h3>Datos del pago</h3>              
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="nombres">Monto a Pagar</label>
                    <input class="form-control has-feedback-left"  placeholder="Ingresa el monto $" type="text" name="">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="nombres">Pagos Realizados</label>
                    <input class="form-control has-feedback-left"  placeholder="Ingresa el monto $" type="text" name="">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="nombres">Pagos Restantes</label>
                    <input class="form-control has-feedback-left"  placeholder="Ingresa el monto $" type="text" name="">
                        <span aria-hidden="true" class="fa fa-location-arrow form-control-feedback left">
                        </span>
                    </input>
                </div>

                
          
                

            <div class="col-md-12 col-xs-12 ">
                <div class="text-center">
              <button type="submit" class="btn btn-primary">Realizar Pago</button>
            </div>
            </div>
                  
          </form>
                  </div>
                </div>
              </div>

 @endsection