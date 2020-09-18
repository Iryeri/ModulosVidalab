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

}
