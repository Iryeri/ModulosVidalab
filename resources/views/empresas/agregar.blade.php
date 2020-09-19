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

                <label for="exampleFormControlSelect1">Nombre</label>
                <input type="text" class="form-control" placeholder="Escriba el nombre de la empresa" name="nombreDeLaEmpresa" readonly="nombreDeLaEmpresa" value="{{old('nombreDeLaEmpresa')}}" /> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('nombreDeLaEmpresa')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label for="exampleFormControlSelect1">Código</label>
                <input type="text" class="form-control" placeholder="Escriba el código de la empresa" name="codigoDeLaEmpresa" value="{{old('codigoDeLaEmpresa')}}"/> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('codigoDeLaEmpresa')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label for="exampleFormControlSelect1">Número telefónico</label>
                <input type="text" class="form-control" placeholder="Escriba un número telefónico para contacto" name="numeroDeTelefonoDeLaEmpresa" value="{{old('numeroDeTelefonoDeLaEmpresa')}}"/> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('numeroDeTelefonoDeLaEmpresa')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label for="exampleFormControlSelect1">Correo electrónico</label>
                <input type="text" class="form-control" placeholder="Escriba un correo electrónico para contacto" name="correoElectronicoDeLaEmpresa" value="{{old('correoElectronicoDeLaEmpresa')}}"/> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('correoElectronicoDeLaEmpresa')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label for="exampleFormControlSelect1">Ubicación (dirección exacta)</label>
                <textarea name="direccionDeLaEmpresa" class="form-control" cols="30" rows="5" placeholder="Escriba la dirección exacta de la empresa">{{old('direccionDeLaEmpresa')}}</textarea> <br> <!--BOOTSTRAP 4 -> COMPONENT-FORMS-->
                @error('direccionDeLaEmpresa')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <button type="submit" class="btn btn-dark">Guardar</button> <!--BOOTSTRAP 4 -> CLASS BUTTOM-->            </form>

        </div><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
    </div><!--BOOTSTRAP 4 -> COMPONENT-CARD-->
</div><!--BOOTSTRAP 4 -> LAYOUT-->
@endsection <!--ENCABEZADO--> 
