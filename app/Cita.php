<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable=
    [
        'codigoDeLaEmpresa',
        'nombreDelSolicitante',
        'primerApellidoDelSolicitante',
        'segundoApellidoDelSolicitante',
        'numeroDeClientesPorAtender',
        'fechaDeCita',
        'horaDeCita',
        'tiposDeAnalisisRequeridos',
    ];
}
