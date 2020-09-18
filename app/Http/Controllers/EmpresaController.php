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


    public function show (Empresa $empresa)
    {
        return view('empresas.visualizar', compact('empresa'));
    }

}
