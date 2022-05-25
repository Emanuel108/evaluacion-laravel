<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    protected $table = 'actividad';

    protected $fillable = [
        'iIdActividad',
        'vActividad',
        'vObjetivo',
        'vPoblacionObjetivo',
        'vDescripcion',
        'iActivo',
        'iIdDependencia',
        'vNombreActividad',
        'iImportante',
        'vResponsable',
        'vCargo',
        'vCorreo',
        'vTelefono',
        'iODS',
        'iReto',
        'vJustificaCambio',
        'vAccion',
        'vEstrategia',
        'iideje',
        'vtipoactividad',
        'vcattipoactividad'
    ];

}
