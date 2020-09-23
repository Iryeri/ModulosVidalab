@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><h4><b>Registro de citas por empresa</b></h4></div>
                    <div class="card-body"> 
                        <ul class="list-group">             
                            <table class="table">
                            <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"><center>Fecha de cita</center></th>
                                        <th scope="col"><center>Hora de cita</center></th>
                                        <th scope="col"><center>Clientes totales por atender</center></th>
                                        <th scope="col"><center>Análisis solicitados</center></th>
                                        <th scope="col"><center>Solicitante</center></th>
                                        <th></th>
                                        <th scope="col">Acción a realizar</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($citas as $cita)
                                    <tr>
                                        <th scope="row"><center>{{ $cita->fechaDeCita}}</center></th>
                                        <td><center>{{$cita->horaDeCita}}</center></td>
                                        <td><center>{{$cita->numeroDeClientesPorAtender}}</center></td>
                                        <td><center>{{$cita->tiposDeAnalisisRequeridos}}</center></td>
                                        <td><center>{{$cita->nombreDelSolicitante}} {{$cita->primerApellidoDelSolicitante}} {{$cita->segundoApellidoDelSolicitante}}</center></td>
                                        <td></td>
                                        <td> <a href="/citas/{{$cita->idDeLaCita}}/editar" class="btn btn-success">Editar</a> |  
                                        <a href="/citas/{{$cita->idDeLaCita}}/eliminar" class="btn btn-danger">Eliminar</a> </center></td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </ul>
                    </div>
                </div>
            </div>
            <p><a href="/citas/agregar" class="btn btn-primary">Registrar nueva cita</a>   |   <a href="/home" class="btn btn-primary">Volver al menú</a></p>
        </div>
    </div>
</div>
@endsection