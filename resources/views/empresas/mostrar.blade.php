@extends('layouts.app')

@section('content')
    
<div class="container"> <!--BOOTSTRAP 4 -> LAYOUT-->

    <div class="card"><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
        <div class="card-header"><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
            <h3>Empresa: {{$empresa->nombreDeLaEmpresa}}</h3>  
        </div>
    </div><!--BOOTSTRAP 4 -> COMPONENT-CARD--> 
        <div class="card-body"><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
      
                <label for="exampleFormControlSelect1">Código</label>
                <input type="text" class="form-control" name="codigoDeLaEmpresa" readonly="codigoDeLaEmpresa" value="{{$empresa->codigoDeLaEmpresa}}"/> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                
                <label for="exampleFormControlSelect1">Número telefónico</label>
                <input type="text" class="form-control" name="numeroDeTelefonoDeLaEmpresa" readonly="numeroDeTelefonoDeLaEmpresa" value="{{$empresa->numeroDeTelefonoDeLaEmpresa}}"/> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->

                <label for="exampleFormControlSelect1">Correo electrónico</label>
                <input type="text" class="form-control"name="correoElectronicoDeLaEmpresa" readonly="correoElectronicoDeLaEmpresa" value="{{$empresa->correoElectronicoDeLaEmpresa}}"/> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
               

                <label for="exampleFormControlSelect1">Ubicación (dirección exacta)</label>
                <textarea name="direccionDeLaEmpresa" class="form-control" cols="30" rows="5" readonly="direccionDeLaEmpresa">{{$empresa->direccionDeLaEmpresa}}</textarea> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
               
                <label for="exampleFormControlSelect1">Fecha de Registro</label>
                <input type="text" class="form-control" name="fechaDeRegistro" readonly="fechaDeRegistro" value="{{$empresa->created_at}}"/> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                






        </div><!--BOOTSTRAP 4 -> COMPONENT-CARD-->

       
   <div class="card-body d-flex"><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
            <a href="/home" class="btn btn-info">Regresar a la lista</a> <!--BOOTSTRAP 4-->
            </form>
        </div><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
    </div><!--BOOTSTRAP 4 -> LAYOUT-->                    
@endsection