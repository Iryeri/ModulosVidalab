@extends('layouts.app')

@section('content')

<div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">
  <button type="button" class="btn btn-primary">Btn 1</a>
  <button type="button" class="btn btn-primary">Btn 2</button>

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Empresas
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="/empresas">Registro de empresas</a>
      <a class="dropdown-item" href="/citas">Registrar citas</a>
    </div>
  </div>
</div>

@endsection
