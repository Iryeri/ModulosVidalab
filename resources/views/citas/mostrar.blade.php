@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
            <h3><b>Cita Actualizada</b></h3>
        </div>

        <div class="card-body">

                <div class="alert alert-success" role="alert">
                    ¡Los datos se an actualizado exitosamente!</b>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Nombre del solicitante</label>
                        <input type="text" class="form-control" placeholder="Escriba el nombre del solicitante de la cita" name="nombreDelSolicitante" readonly="nombreDelSolicitante" value="{{$cita->nombreDelSolicitante}}" /> <br> 
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Primer apellido</label>
                        <input type="text" class="form-control" placeholder="Escriba el primer apellido del solicitante de la cita" name="primerApellidoDelSolicitante" readonly="primerApellidoDelSolicitante" value="{{$cita->primerApellidoDelSolicitante}}"/> <br> 
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Segundo apellido</label>
                        <input type="text" class="form-control" placeholder="Escriba el segundo apellido del solicitante" name="segundoApellidoDelSolicitante" readonly="segundoApellidoDelSolicitante" value="{{$cita->segundoApellidoDelSolicitante}}"/> <br> 
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Total de clientes</label>
                        <input type="text" class="form-control" placeholder="Escriba el total de cliente que serán atendidos" name="numeroDeClientesPorAtender" readonly="numeroDeClientesPorAtender" value="{{$cita->numeroDeClientesPorAtender}}"/> <br> 
                    </div> 
                    <div class="col">
                        <label for="exampleFormControlSelect1">Fecha de cita</label>
                        <input type="text" class="form-control" placeholder="Seleccione la fecha de cita" name="fechaDeCita" readonly="fechaDeCita" value="{{$cita->fechaDeCita}}"/> <br> 
                    </div> 
                    <div class="col">
                        <label for="exampleFormControlSelect1">Seleccione la hora de cita</label>
                        <input type="text" class="form-control" placeholder="Seleccione la hora de cita" name="horaDeCita" readonly="horaDeCita" value="{{$cita->horaDeCita}}"/> <br> 
                    </div> 
                </div> 
                <label for="exampleFormControlSelect1">Escriba los tipos de análisis requeridos</label>
                <textarea name="tiposDeAnalisisRequeridos" class="form-control" cols="30" rows="5" placeholder="Escriba los análisis solicitados" readonly="tiposDeAnalisisRequeridos">{{$cita->tiposDeAnalisisRequeridos}}</textarea> <br> 

                <div class="row">
                    <div class="col">
                        <a href="/citas" class="btn btn-success">Volver a registro de citas</a>           
                    </div>
                    <div class="col">
                        <a href="/home" class="btn btn-primary">Volver al menú</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection