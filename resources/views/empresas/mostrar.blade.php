@extends('layouts.app')

@section('content')
    
<div class="container"> 
    <div class="card">
        <div class="card-header">
            <h3><b>Consulta de registro de empresa</b></h3>  
        </div>
    
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label for="exampleFormControlSelect1">Identificador</label>
                    <input type="text" class="form-control" name="idDeLaEmpresa" readonly="idDeLaEmpresa" value="{{$empresa->idDeLaEmpresa}}"/> <br>
                </div>
                <div class="col">
                    <label for="exampleFormControlSelect1">Nombre</label>
                    <input type="text" class="form-control" name="nombreDeLaEmpresa" readonly="nombreDeLaEmpresa" value="{{$empresa->nombreDeLaEmpresa}}"/> <br> 
                </div>
            
            </div> 

            <div class="row">
                <div class="col">
                    <label for="exampleFormControlSelect1">Número telefónico</label>
                    <input type="text" class="form-control" name="numeroDeTelefonoDeLaEmpresa" readonly="numeroDeTelefonoDeLaEmpresa" value="{{$empresa->numeroDeTelefonoDeLaEmpresa}}"/> <br> 
                </div>
                <div class="col"> 
                    <label for="exampleFormControlSelect1">Correo electrónico</label>
                    <input type="text" class="form-control"name="correoElectronicoDeLaEmpresa" readonly="correoElectronicoDeLaEmpresa" value="{{$empresa->correoElectronicoDeLaEmpresa}}"/> <br> 
                </div>
            </div>  

            <label for="exampleFormControlSelect1">Ubicación (dirección exacta)</label>
            <textarea name="direccionDeLaEmpresa" class="form-control" cols="30" rows="5" readonly="direccionDeLaEmpresa">{{$empresa->direccionDeLaEmpresa}}</textarea> <br> 
                
            <div class="row">
                <div class="col">
                    <label for="exampleFormControlSelect1">Fecha y Hora de Registro</label>
                    <input type="text" class="form-control" name="fechaDeRegistro" readonly="fechaDeRegistro" value="{{$empresa->created_at}}"/> <br> 
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a href="/empresas" class="btn btn-primary">Regresar a la lista</a> 
                </div>
                <div class="col">
                    <a href="/home" class="btn btn-primary">Volver al menú</a> 
                </div>           
            </div>
        </div> 
    </div>
    <div class="card-body">
    </div>
</div>                    
@endsection