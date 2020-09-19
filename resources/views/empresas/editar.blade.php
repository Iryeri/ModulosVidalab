@extends('layouts.app')

@section('content')

<div class="container"> <!--BOOTSTRAP 4 -> LAYOUT-->

    <div class="card"><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
        <div class="card-header"><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
            Editar Empresa Registrada
        </div>

        <div class="card-body"><!--BOOTSTRAP 4 -> COMPONENT-CARD-->

            <form action="/empresas/{{$empresa->id}}" method="POST"><!--FORMULARIO PROPIO-->
                @csrf
                @method ('PUT')

                <label for="exampleFormControlSelect1">Nombre</label>
                <input type="text" class="form-control" placeholder="Escriba el nombre de la empresa" name="nombreDeLaEmpresa" value="{{$empresa->nombreDeLaEmpresa}}" /> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('nombreDeLaEmpresa')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label for="exampleFormControlSelect1">Código</label>
                <input type="text" class="form-control" placeholder="Escriba el código de la empresa" name="codigoDeLaEmpresa" value="{{$empresa->codigoDeLaEmpresa}}"/> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('codigoDeLaEmpresa')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label for="exampleFormControlSelect1">Número telefónico</label>
                <input type="text" class="form-control" placeholder="Escriba un número telefónico para contacto" name="numeroDeTelefonoDeLaEmpresa" value="{{$empresa->numeroDeTelefonoDeLaEmpresa}}"/> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('numeroDeTelefonoDeLaEmpresa')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label for="exampleFormControlSelect1">Correo electrónico</label>
                <input type="text" class="form-control" placeholder="Escriba un correo electrónico para contacto" name="correoElectronicoDeLaEmpresa" value="{{$empresa->correoElectronicoDeLaEmpresa}}"/> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('correoElectronicoDeLaEmpresa')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label for="exampleFormControlSelect1">Ubicación (dirección exacta)</label>
                <textarea name="direccionDeLaEmpresa" class="form-control" cols="30" rows="5" placeholder="Escriba la dirección exacta de la empresa">{{$empresa->direccionDeLaEmpresa}}</textarea> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('direccionDeLaEmpresa')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <button type="submit" class="btn btn-dark">Acturalizar datos</button>           <a href="/empresas" class="btn btn-primary">Cancelar</a>
            </form>
        </div><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
    </div><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
</div><!--BOOTSTRAP 4 -> LAYOUT-->
@endsection <!--ENCABEZADO--> 