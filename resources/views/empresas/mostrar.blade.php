@extends('layouts.app')

@section('content')
    
<div class="container"> 
    <div class="card">
        <div class="card-header">
            <h3>Empresa: {{$empresa->nombreDeLaEmpresa}}</h3>  
        </div>
    </div>
    
    <div class="card-body">
        <label for="exampleFormControlSelect1">Código</label>
        <input type="text" class="form-control" name="codigoDeLaEmpresa" readonly="codigoDeLaEmpresa" value="{{$empresa->codigoDeLaEmpresa}}"/> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
        
        <label for="exampleFormControlSelect1">Número telefónico</label>
        <input type="text" class="form-control" name="numeroDeTelefonoDeLaEmpresa" readonly="numeroDeTelefonoDeLaEmpresa" value="{{$empresa->numeroDeTelefonoDeLaEmpresa}}"/> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->

        <label for="exampleFormControlSelect1">Correo electrónico</label>
        <input type="text" class="form-control"name="correoElectronicoDeLaEmpresa" readonly="correoElectronicoDeLaEmpresa" value="{{$empresa->correoElectronicoDeLaEmpresa}}"/> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
        

        <label for="exampleFormControlSelect1">Ubicación (dirección exacta)</label>
        <textarea name="direccionDeLaEmpresa" class="form-control" cols="30" rows="5" readonly="direccionDeLaEmpresa">{{$empresa->direccionDeLaEmpresa}}</textarea> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
        
        <label for="exampleFormControlSelect1">Fecha y Hora de Registro</label>
        <input type="text" class="form-control" name="fechaDeRegistro" readonly="fechaDeRegistro" value="{{$empresa->created_at}}"/> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->

       
        <a href="/empresas" class="btn btn-primary">Regresar a la lista</a>  <a href="/home" class="btn btn-primary">Volver al menú</a>           
    </div>
</div>                    
@endsection