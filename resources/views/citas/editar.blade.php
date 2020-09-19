@extends('layouts.app')

@section('content')

<div class="container"> <!--BOOTSTRAP 4 -> LAYOUT-->

    <div class="card"><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
        <div class="card-header"><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
            <h3>Editar Cita Registrada</h3>
        </div>

        <div class="card-body"><!--BOOTSTRAP 4 -> COMPONENT-CARD-->

            <form action="/citas/{{$cita->id}}" method="POST"><!--FORMULARIO PROPIO-->
                @csrf
                @method ('PUT')

                <label for="exampleFormControlSelect1">Nombre del solicitante</label>
                <input type="text" class="form-control" placeholder="Escriba el nombre del solicitante de la cita" name="nombreDelSolicitante" value="{{$cita->nombreDelSolicitante}}" /> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('nombreDelSolicitante')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label for="exampleFormControlSelect1">Primer apellido</label>
                <input type="text" class="form-control" placeholder="Escriba el primer apellido del solicitante de la cita" name="primerApellidoDelSolicitante" value="{{$cita->primerApellidoDelSolicitante}}"/> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('primerApellidoDelSolicitante')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label for="exampleFormControlSelect1">Segundo apellido</label>
                <input type="text" class="form-control" placeholder="Escriba el segundo apellido del solicitante" name="segundoApellidoDelSolicitante" value="{{$cita->segundoApellidoDelSolicitante}}"/> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('segundoApellidoDelSolicitante')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label for="exampleFormControlSelect1">Número de clientes por atender</label>
                <input type="text" class="form-control" placeholder="Escriba el total de cliente que serán atendidos" name="numeroDeClientesPorAtender" value="{{$cita->numeroDeClientesPorAtender}}"/> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('numeroDeClientesPorAtender')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label for="exampleFormControlSelect1">Fecha de cita</label>
                <input type="text" class="form-control" placeholder="Seleccione la fecha de cita" name="fechaDeCita" value="{{$cita->fechaDeCita}}"/> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('fechaDeCita')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label for="exampleFormControlSelect1">Seleccione la hora de cita</label>
                <input type="text" class="form-control" placeholder="Seleccione la hora de cita" name="horaDeCita" value="{{$cita->horaDeCita}}"/> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('horaDeCita')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label for="exampleFormControlSelect1">Escriba los tipos de análisis requeridos</label>
                <textarea name="tiposDeAnalisisRequeridos" class="form-control" cols="30" rows="5" placeholder="Escriba la dirección exacta de la empresa">{{$cita->tiposDeAnalisisRequeridos}}</textarea> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('tiposDeAnalisisRequeridos')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <button type="submit" class="btn btn-dark">Acturalizar datos</button>           <a href="/citas" class="btn btn-primary">Cancelar</a>
            </form>
        </div><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
    </div><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
</div>
@endsection <!--ENCABEZADO--> 