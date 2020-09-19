@extends('layouts.app')

@section('content')

<div class="container"> <!--BOOTSTRAP 4 -> LAYOUT-->

    <div class="card"><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
        <div class="card-header"><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
            <h3>Eliminar Cita</h3>
        </div>

        <div class="card-body"><!--BOOTSTRAP 4 -> COMPONENT-CARD-->

            <form action="/citas/{{$cita->id}}" method="POST">
                @csrf   
                @method('DELETE')

                <div class="alert alert-danger" role="alert">
                    ¡Lea cuidadosamente la información! <b>¿Realmente desea eliminar este registro?.</b>
                </div>

                <label for="exampleFormControlSelect1">Nombre del solicitante</label>
                <input type="text" class="form-control" placeholder="Escriba el nombre del solicitante de la cita" name="nombreDelSolicitante" readonly="nombreDelSolicitante" value="{{$cita->nombreDelSolicitante}}" /> <br> 

                <label for="exampleFormControlSelect1">Primer apellido</label>
                <input type="text" class="form-control" placeholder="Escriba el primer apellido del solicitante de la cita" name="primerApellidoDelSolicitante" readonly="primerApellidoDelSolicitante" value="{{$cita->primerApellidoDelSolicitante}}"/> <br> 
               
                <label for="exampleFormControlSelect1">Segundo apellido</label>
                <input type="text" class="form-control" placeholder="Escriba el segundo apellido del solicitante" name="segundoApellidoDelSolicitante" readonly="segundoApellidoDelSolicitante" value="{{$cita->segundoApellidoDelSolicitante}}"/> <br> 
               
                <label for="exampleFormControlSelect1">Número de clientes por atender</label>
                <input type="text" class="form-control" placeholder="Escriba el total de cliente que serán atendidos" name="numeroDeClientesPorAtender" readonly="numeroDeClientesPorAtender" value="{{$cita->numeroDeClientesPorAtender}}"/> <br> 
                
                <label for="exampleFormControlSelect1">Fecha de cita</label>
                <input type="text" class="form-control" placeholder="Seleccione la fecha de cita" name="fechaDeCita" readonly="fechaDeCita" value="{{$cita->fechaDeCita}}"/> <br> 
                
                <label for="exampleFormControlSelect1">Seleccione la hora de cita</label>
                <input type="text" class="form-control" placeholder="Seleccione la hora de cita" name="horaDeCita" readonly="horaDeCita" value="{{$cita->horaDeCita}}"/> <br> 
                
                <label for="exampleFormControlSelect1">Escriba los tipos de análisis requeridos</label>
                <textarea name="tiposDeAnalisisRequeridos" class="form-control" cols="30" rows="5" placeholder="Escriba los análisis solicitados" readonly="tiposDeAnalisisRequeridos">{{$cita->tiposDeAnalisisRequeridos}}</textarea> <br> 

                <button type="submit" class="btn btn-danger">Eliminar Registro</button>           <a href="/citas" class="btn btn-primary">Cancelar</a>
            </form>   
        </div><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
    </div><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
</div>
@endsection <!--ENCABEZADO--> 