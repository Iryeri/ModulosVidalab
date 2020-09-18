@extends('layouts.app')

@section('content')

<div class="container"> <!--BOOTSTRAP 4 -> LAYOUT-->

    <div class="card"><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
        <div class="card-header"><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
            Registrar Nueva Empresa
        </div>

        <div class="card-body"><!--BOOTSTRAP 4 -> COMPONENT-CARD-->

            <form action="/empresas" method="POST"><!--FORMULARIO PROPIO-->
                @csrf

                <input type="text" class="form-control" placeholder="Escriba el código de la empresa" name="codigoDeLaEmpresa" /> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <input type="text" class="form-control" placeholder="Escriba el nombre de la empresa" name="nombreDeLaEmpresa" /> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <textarea name="direccionDeLaEmpresa" class="form-control" cols="30" rows="10" placeholder="Escriba la dirección exacta de la empresa"></textarea> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('direccionDeLaEmpresa')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <button type="submit" class="btn btn-dark">Guardar</button> <!--BOOTSTRAP 4 -> CLASS BUTTOM-->            </form>

        </div><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
    </div><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
</div><!--BOOTSTRAP 4 -> LAYOUT-->
@endsection <!--ENCABEZADO--> 
