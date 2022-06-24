<?php

namespace App\Http\Controllers;

use App\Models\historial;
use App\Models\direccion;
use App\Models\operador;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultado = historial::all();
           $Nuevo = [];
           foreach ($resultado as $re) {
               $nombre = operador::where('id',$re->operador_id)->value('nombre');
               $paterno = operador::where('id',$re->operador_id)->value('paterno');
               $materno = operador::where('id',$re->operador_id)->value('materno');
               $fullName = $nombre.' '.$paterno. ' '.$materno ;
               $direccion = direccion::find($re->direccion_id);
                 $aux2 =   $direccion->getFullnameAdress();

               
                $prueba = array(
                    $re->id,
                    $re->ss,
                      $fullName,
                        $aux2
                   
               );
                // dd($nombre->nombre);
               array_push($Nuevo,$prueba);
               // dd($nombre->getFullnameAttribute(), $direccion->getFullnameAdress());
           }
           //  $resultado2 = direccion::all();
           // dd($resultado, $resultado2);
          return view('operador.asignar',['puntuaciones'=>$Nuevo]);
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
     * @param  \App\Models\historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function show(historial $historial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function edit(historial $historial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, historial $historial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function destroy(historial $historial)
    {
        //
    }
}
