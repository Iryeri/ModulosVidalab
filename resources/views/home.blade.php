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

                       
                        @foreach($empresas as $empresa)
                        <ul>
                            <ui >{{$empresa->codigoDeLaEmpresa}}</ui>
                            <ui>{{$empresa->nombreDeLaEmpresa}}</ui>
                            <ui>{{$empresa->numeroDeTelefonoDeLaEmpresa}}</ui>
                        </ul>
                        @endforeach
                    <br>
                </div>
            </div>

            <br>
            <a href="/empresas/agregar" class="btn btn-dark">Registrar Empresa</a> 

        </div>
    </div>
</div>

@endsection
