<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Presupuesto;
use App\Models\Dependencia;
use App\Models\DetalleActividad;
use App\Models\Actividad;

class DetalleActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $presupuesto;

    public function __construct(Presupuesto $presupuesto)
    {
        $this->presupuesto = $presupuesto;
    }

    public function index()
    {
        $presupuesto = $this->presupuesto->getJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $iIdActividad = $id;
        return view('actividades.edit', compact('iIdActividad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function formatText($string)
    {

        $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
        $permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
        $text = str_replace($no_permitidas, $permitidas ,$string);

        $textUppercase = mb_strtoupper($text, 'UTF-8');

        return $textUppercase;

    }

    public function update(Request $request, $id)
    {
        $presupuesto = $this->presupuesto->getJson();
        $actividad   = Actividad::where('actividad.iIdActividad', $id)->first();
        $actividad   = $actividad['iIdDependencia'];

        $dependencia   = Dependencia::where('dependencia.iIdDependencia', $actividad)->first();
        $dependencia   = $dependencia['vDependencia'];

        $vDependenciaSilTildes          = $this->formatText($dependencia);
        $vDependenciaEnJson             = $vDependenciaSilTildes;

        for($i = 0; $i < count($presupuesto['datos']); $i++) {
            if($vDependenciaEnJson == $presupuesto['datos'][$i]["dependenciaEjecutora"]) {
                $presupuestoAutorizado = $presupuesto['datos'][$i]["aprobado"];

                $presupuestoNuevo = DetalleActividad::where('iIdActividad', $id)->update(['nPresupuestoAutorizado' => $presupuestoAutorizado]);
            }
        }


        return redirect()->route('actividad.index')->with('success', 'Se ha actualizado exitosamente el presupuesto.');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
