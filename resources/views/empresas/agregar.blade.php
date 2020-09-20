@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
           <h3><b> Registrar Nueva Empresa </b></h3>
        </div>

        <div class="card-body">

            <form action="/empresas" method="POST">
                @csrf

                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Nombre</label>
                        <input type="text" class="form-control" placeholder="Escriba el nombre de la empresa" name="nombreDeLaEmpresa" value="{{old('nombreDeLaEmpresa')}}" /> <br> 
                        @error('nombreDeLaEmpresa')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Código de la empresa</label>
                        <input type="text" class="form-control" placeholder="Escriba el código de la empresa" name="codigoDeLaEmpresa" value="{{old('codigoDeLaEmpresa')}}"/> <br> 
                        @error('codigoDeLaEmpresa')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Número telefónico</label>
                        <input type="text" class="form-control" placeholder="Escriba un número telefónico para contacto" name="numeroDeTelefonoDeLaEmpresa" value="{{old('numeroDeTelefonoDeLaEmpresa')}}"/> <br> 
                        @error('numeroDeTelefonoDeLaEmpresa')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Correo electrónico</label>
                        <input type="email" class="form-control" placeholder="Escriba un correo electrónico para contacto" name="correoElectronicoDeLaEmpresa" value="{{old('correoElectronicoDeLaEmpresa')}}"/> <br> 
                        @error('correoElectronicoDeLaEmpresa')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <label for="exampleFormControlSelect1">Ubicación (dirección exacta)</label>
                <textarea name="direccionDeLaEmpresa" class="form-control" cols="30" rows="5" placeholder="Escriba la dirección exacta de la empresa">{{old('direccionDeLaEmpresa')}}</textarea> <br> 
                @error('direccionDeLaEmpresa')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Registrar empresa</button>
                    </div>
                    <div class="col">
                        <a href="/empresas" class="btn btn-primary">Cancelar y volver</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection  
