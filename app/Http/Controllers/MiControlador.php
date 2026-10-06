<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MiControlador extends Controller
{
    public function listar () {
        //a) El equivalente de una select *.
        // $personas = DB::table('personas')->get();

        //b) Select con condiciones
        // $personas = DB::table('personas')
        // ->select('dni', 'nombre', 'edad')
        // ->where('dni', '=', '5E')
        // ->orderBy('edad', 'desc')
        // ->get();

        //c) Selección con opciones AND y OR
        // $personas = DB::table('personas')
        // ->select('dni','nombre','tfno','edad')
        // ->whereBetween('edad', [35, 40])
        // ->orwhere('nombre','Francisco')
        // ->orderBy('edad','desc')
        // ->get();

        //d) Selección haciendo join de varias tablas.
        // $personas = DB::table('personas')
        // ->join('propiedades', 'propiedades.DNI', '=', 'personas.DNI')
        // ->join('coches', 'coches.matricula', '=', 'propiedades.matricula')
        // ->select('personas.dni', 'nombre', 'edad', 'marca', 'modelo')
        // ->where('nombre','Noelia')
        // ->get();

        // $edad = 12;
        // if ($edad <= 18){
        // echo "Eres menor de edad";
        // }

        //e)
        //$personas = DB::table('personas')->where('nombre', 'Daniel')->first();

        //f)
        //$personas = DB::table('personas')->where('nombre', 'Daniasel')->firstorFail();

        //g)
        //$personas = DB::table('personas')->where('nombre', 'Daniel')->value('dni');

        //h)
        // $nombres = DB::table('personas')->pluck('nombre','dni');
        // return response()->json($nombres,200);

        //i)
        // $maximaEdad = DB::table('personas')->max('edad');
        // return response()->json($maximaEdad,200);
        
        //j)
        //$personas = DB::table('personas_id_auto')->find(1);

        $datos = [
            'pers' => $personas
        ];

        return response()->json($datos,200);
    }
}
