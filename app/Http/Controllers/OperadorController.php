<?php

namespace App\Http\Controllers;

use App\Models\operador;
use App\Models\direccion;
use App\Models\historial;
use Illuminate\Http\Request;

class OperadorController extends Controller
{
    /**
     * Muestra todos los operadores
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operador = operador::all();
        return view('operador.index', ['operador'=>$operador]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('operador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
         // dd($request);
         $operadores = operador::all();
         $operador = operador::create($request->all());
         $operador->save();

         return view('home', ['operador'=>$operadores]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\operador  $operador
     * @return \Illuminate\Http\Response
     */
    public function show(operador $operador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\operador  $operador
     * @return \Illuminate\Http\Response
     */
    public function edit(operador $operador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\operador  $operador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, operador $operador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\operador  $operador
     * @return \Illuminate\Http\Response
     */
    public function destroy(operador $operador)
    {
        //
    }
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function asignar(Request $request, operador $operador)
    {       
          //debug entrada de datos
         // $aux = $this->contarConsonantes($request->operador);
          // dd($aux['consonantes']);
          //obtenemos todos los registros de direcciones
          $operadores = operador::all();
          $direcciones = direccion::all();
          //obtenemos la cantidad de caracteres del nombre del operador
        

          $puntuaciones = [];
          // evaluaremos cada direccion para
          foreach ($direcciones as $direccion) {
                $aumento =0;
                $longitudStreet = strlen($direccion->getStreetWithotSpaces());
                //Primera regla si el numero de la calle es par 
                if ($longitudStreet % 2 == 0) {
                    //tomaremos la longitud de las vocales del conductor y lo multiplicamos por 1.5
                    foreach ($operadores as $op) {
                    $longitudConductor = strlen($op->getFullnameWithoutSpaces());
                    $puntuacion = $this->contarConsonantes($op->getFullnameWithoutSpaces());
                    $SS = ($puntuacion['vocales']*1.5);
                    //separamos los elementos para poder compar del foreach
                    $factoresStreet = str_split($longitudStreet,1);
                    $factoresConductor = str_split($longitudConductor,1);
                    
                    foreach ($factoresStreet as $fs) {
                        
                        foreach ($factoresConductor as $fc) {
                            
                            if ($fc=$fs) {
                                $aumento++;
                            }
                        }
                    }
                    //considero el uno, ya que en caso de coincida el 1 de la longitud el segundo factor aumentaria ese 1  a un 2
                    if ($aumento > 1) {
                        $SS=$SS + ($SS*0.5);
                    }
                    array_push($puntuaciones, array($direccion->id,$SS,$op->id,$direccion->getFullnameAdress(),$op->getFullnameWithoutSpaces() ));
                    // dd($puntuacion, $longitudStreet, $longitudConductor);
                    }
                    
                }else{
                    //en caso de que sea impar
                    foreach ($operadores as $op) {
                    $puntuacion = $this->contarConsonantes($op->getFullnameWithoutSpaces());
                    $SS = ($puntuacion['consonantes']*1);
                    array_push($puntuaciones, array($direccion->id,$SS,$op->id,$direccion->getFullnameAdress()));
                    }
                    
                }

          }

          // Hasta este punto obtuve la puntuacion de los conductores con cada direccion 
          // aqui procedemos a evaluar cada direccion, comparando el ranking y asignando al conductor con mayor SS
           foreach ($direcciones as $direccion) {
              $ranking=0;
              $idCond = 0;
              foreach ($puntuaciones as $rk) {
                // dd($rk[0]);
                    if ($rk[0] == $direccion->id) {
                        if ($rk[1]>$ranking) {

                            
                             $aux = historial::where('operador_id',$rk[2])->count();
                             // $aux2 = historial::select('operador_id')->get();
                             // dd($aux2);
                              if (!($aux > 0)) {
                                  $ranking= $rk[1];
                                  $idCond = $rk[2];
                              }
                            

                        }
                        
                    }  
             }
            // dd($ranking,$idCond);
            if ($idCond!= 0) {
                $registro = historial::where('operador_id',$idCond)->get();
             // dd(count($registro));
                  if (count($registro) == 0) {
                    //Si obtenemos cero significa que ese conductor no ha sido asignado a alguna direccion y no se guardo dicha direccion
                       $historial = historial::create([
                        'operador_id'=>$idCond,
                        'direccion_id'=>$direccion->id,
                        'ss'=>$ranking,
                        'status'=>1
                         ]);
                        $historial->save();
                  }
            }
             
                

          }
         
          // dd($puntuaciones);
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

    public function contarConsonantes(string $cadena){
        $vocales = 0;
        $consonantes = 0;
        foreach (count_chars($cadena, 1) as $i => $val) 
            {
            if (preg_match('/[aeiouáéíóúü]/i',chr($i)))
                    {
                    $vocales = $vocales + $val;
                    } else if (preg_match('/[a-z]/i',chr($i)))
                        {
                         $consonantes= $consonantes + $val;
                        }                   
            }
          $resultado =  array(
                'vocales'=>$vocales,
                'consonantes'=> $consonantes
            );
       return $resultado;
    }

}
