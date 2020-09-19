<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{

    
    public function agregar()
    {
        return view('empresas.agregar');
    }


    public function guardar()
    {
        $this->validate(request(), [
            'nombreDeLaEmpresa' => 'required',
            'codigoDeLaEmpresa' => 'required',
            'numeroDeTelefonoDeLaEmpresa' => 'required',
            'correoElectronicoDeLaEmpresa' => 'required',
            'direccionDeLaEmpresa' => 'required'
        ]);
        Empresa::create(
           [
            'nombreDeLaEmpresa' => request('nombreDeLaEmpresa'),
            'codigoDeLaEmpresa' => request('codigoDeLaEmpresa'),
            'numeroDeTelefonoDeLaEmpresa' => request('numeroDeTelefonoDeLaEmpresa'),
            'correoElectronicoDeLaEmpresa' => request('correoElectronicoDeLaEmpresa'),
            'direccionDeLaEmpresa' => request('direccionDeLaEmpresa'),
           ]
           );
        
        return redirect('/home');
    }


    public function mostrar(Empresa $empresa)
    {
        return view('empresas.mostrar', compact('empresa'));
    }


    public function editar(Empresa $empresa)
    {
        return view('empresas.editar', compact('empresa'));
    }


    public function actualizar (Empresa $empresa)
    {
        $this->validate(request(),
        [
            'nombreDeLaEmpresa' => 'required',
            'codigoDeLaEmpresa' => 'required',
            'numeroDeTelefonoDeLaEmpresa' => 'required',
            'correoElectronicoDeLaEmpresa' => 'required',
            'direccionDeLaEmpresa' => 'required'
        ]);
        $empresa->update(request()->all());

        return view('empresas.mostrar', compact('empresa'));
    }


    public function eliminar(Empresa $empresa)
    {
        return view('empresas.eliminar', compact('empresa'));
    }


    public function destruir (Empresa $empresa)
    {
        $empresa->delete();

        return redirect('/home');
    }
}
