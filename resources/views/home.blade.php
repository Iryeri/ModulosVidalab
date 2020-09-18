@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/empresas/agregar" class="btn btn-dark">Agregar Empresa</a> <!--BOOTSTRAP 4 -> CLASS BUTTOM-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
