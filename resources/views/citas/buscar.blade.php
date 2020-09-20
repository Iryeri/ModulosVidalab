@extends('layouts.app')

@section('content')

<div class="container"> 

    <div class="card">
        <div class="card-header">
            <h3><b>Registrar cita</b></h3>
        </div>

        <div class="card-body">

            <form action="/citas" method="POST">
                @csrf
                <label for="exampleFormControlSelect1">Código</label>
                <input type="text" class="form-control" placeholder="Escriba el código" name="codigoDeLaEmpresa" value="{{old('codigoDeLaEmpresa')}}" /> <br>
                @error('codigoDeLaEmpresa')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </form>
        </div>
    </div>
@endsection