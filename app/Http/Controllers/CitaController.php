<?php

namespace App\Http\Controllers;

use App\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{

//LISTAR REGISTROS
    public function index()
    {
        $citas = Cita::all();
        return view('citas.index', compact('citas'));
    }

//AGREGAR



//MOSTRAR ÚNICO REGISTRO
public function mostrar(Cita $cita)
{
    return view('citas.mostrar', compact('cita'));
}


//EDITAR REGISTRO
    public function editar (Cita $cita)
    {
        return view('citas.editar', compact('cita'));
    }


    public function actualizar (Cita $cita)
    {
        $this->validate(request(),
        [
            'nombreDelSolicitante' => 'required',
            'primerApellidoDelSolicitante' => 'required',
            'segundoApellidoDelSolicitante' => 'required',
            'numeroDeClientesPorAtender' => 'required',
            'fechaDeCita' => 'required',
            'horaDeCita' => 'required',
            'tiposDeAnalisisRequeridos' => 'required',
        ]);
        $cita->update(request()->all());

        return view ('citas.mostrar', compact('cita'));
    }


//ELIMINAR REGISTRO
    public function eliminar(Cita $cita)
    {
        return view('citas.eliminar', compact('cita'));
    }


    public function destruir (Cita $cita)
    {
        $cita->delete();

        return redirect('/citas');
    }

}
