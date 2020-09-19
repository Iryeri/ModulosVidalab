@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Lista de Empresas') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="list-group">             
                        <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col"><center>Código</center></th>
                            <th scope="col"><center>Nombre de Empresa</center></th>
                            <th scope="col"><center>Número telefónico de Empresa</center></th>
                            <th></th>
                            <th scope="col">Acción a realizar</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($empresas as $empresa)
                            <tr>
                            <th scope="row"><center>{{$empresa->codigoDeLaEmpresa}}</center></th>
                            <td><center>{{ $empresa->nombreDeLaEmpresa}}</center></td>
                            <td><center>{{$empresa->numeroDeTelefonoDeLaEmpresa}}</center></td>
                            <td></td>
                            <td> </center><a href="/empresas/{{$empresa->id}}" class="btn btn-primary">Consultar</a> |  <a href="/empresas/{{$empresa->id}}/editar" class="btn btn-success">Editar</a> |  <a href="/empresas/{{$empresa->id}}/eliminar" class="btn btn-danger">Eliminar</a> </center></td>
                            @endforeach
                        </tbody>
                        </table>
                    </ul>
                    <br>
                </div>
            </div>

            <br>
            <a href="/empresas/agregar" class="btn btn-dark">Registrar Empresa</a> 

        </div>
    </div>
</div>

@endsection
