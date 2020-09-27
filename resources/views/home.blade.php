@extends('layouts.app')

@section('content')

<div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">
  <button type="button" class="btn btn-primary">No habilitado</a>
  <button type="button" class="btn btn-primary">No habilitado</button>

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Empresas
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="/empresas">Registro de empresas</a>
      <a class="dropdown-item" href="/citas">Registro de citas</a>
    </div>
  </div>


  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Catálogo
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="/pruebas">Registro de análisis</a>
      <a class="dropdown-item" href="/paquetes">Registro de paquetes de análisis</a>
    </div>
  </div>
</div>
@endsection
