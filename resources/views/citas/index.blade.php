@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><h4><b>Registro de Citas de todas las Empresas</b></h4></div>
                    <div class="card-body"> 
                        <ul class="list-group">      
                            <table class="table">
                            <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"><center>Identificador</center></th>
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
                                            <th scope="row"><center>{{ $cita->idDeLaEmpresa}}</center></th>
                                            <th scope="row"><center>{{ $cita->fechaDeCita}}</center></th>
                                            <td><center>{{$cita->horaDeCita}}</center></td>
                                            <td><center>{{$cita->numeroDeClientesPorAtender}}</center></td>
                                            <td><center>{{$cita->tiposDeAnalisisRequeridos}}</center></td>
                                            <td><center>{{$cita->nombreDelSolicitante}} {{$cita->primerApellidoDelSolicitante}} {{$cita->segundoApellidoDelSolicitante}}</center></td>
                                            <td></td>
                                            <td><a href="/empresas/{{$cita->idDeLaEmpresa}}" class="btn btn-primary">Ir al Registro</a> </center></td>
                                        </tr>   
                                    @endforeach
                                </tbody>
                            </table>
                        </ul>
                    </div>
                </div>
            </div>
            <a href="/home" class="btn btn-danger">Volver al menú principal</a>
        </div>
    </div>
</div>
@endsection