@extends('layouts.app')

@section('content')
    
<div class="container">

    <div class="card">
        <div class="card-header">
            <h3>Empresa: {{$empresa->nombreDeLaEmpresa}}</h3>  
        </div>
        
        <div class="card-body">
            <form action="/empresas/{{$empresa->id}}" method="POST">
                @csrf   
                @method('DELETE')

                <div class="alert alert-danger" role="alert">
                    ¡Lea cuidadosamente la información! <b>¿Realmente desea eliminar este registro?.</b>
                </div>

                <label for="exampleFormControlSelect1">Código</label>
                <input type="text" class="form-control" name="codigoDeLaEmpresa" readonly="codigoDeLaEmpresa" value="{{$empresa->codigoDeLaEmpresa}}"/> <br> 
                
                <label for="exampleFormControlSelect1">Número telefónico</label>
                <input type="text" class="form-control" name="numeroDeTelefonoDeLaEmpresa" readonly="numeroDeTelefonoDeLaEmpresa" value="{{$empresa->numeroDeTelefonoDeLaEmpresa}}"/> <br> 

                <label for="exampleFormControlSelect1">Correo electrónico</label>
                <input type="text" class="form-control"name="correoElectronicoDeLaEmpresa" readonly="correoElectronicoDeLaEmpresa" value="{{$empresa->correoElectronicoDeLaEmpresa}}"/> <br>                

                <label for="exampleFormControlSelect1">Ubicación (dirección exacta)</label>
                <textarea name="direccionDeLaEmpresa" class="form-control" cols="30" rows="5" readonly="direccionDeLaEmpresa">{{$empresa->direccionDeLaEmpresa}}</textarea> <br> 
               
                <label for="exampleFormControlSelect1">Fecha de Registro</label>
                <input type="text" class="form-control" name="fechaDeRegistro" readonly="fechaDeRegistro" value="{{$empresa->created_at}}"/> <br> 
            
                <button type="submit" class="btn btn-danger">Eliminar Registro</button>           <a href="/empresas" class="btn btn-primary">Cancelar</a>
            
            </form>
        </div><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
    </div><!--BOOTSTRAP 4 -> LAYOUT-->   
</div>                   
@endsection