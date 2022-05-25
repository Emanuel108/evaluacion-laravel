<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleActividad extends Model
{
    use HasFactory;

    protected $table = 'detalleactividad';

    protected $fillable = [
        'iIdDetalleActividad',
        'iIdActividad',
        'iAnio',
        'dInicio',
        'dFin',
        'iActivo',
        'nAvance',
        'iReactivarEconomia',
        'nPresupuestoModificado',
        'nPresupuestoAutorizado',
        'iSuspendida',
        'iNewAvance',
        'dUltActAvance',
        'dUltActTexto',
        'dFechaElim'
    ];

    public $timestamps = false;

    
}
