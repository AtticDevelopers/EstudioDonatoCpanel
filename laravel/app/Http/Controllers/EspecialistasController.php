<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Helpers\Abogado;

class EspecialistasController extends Controller
{
    public function getEspecialistasView(){
        $especialistas = DB::select('SELECT * FROM especialistas');
        $areasEspecialistas = DB::select('SELECT * FROM areas NATURAL JOIN areas_especialistas NATURAL JOIN especialistas ORDER BY orden');
        $mediacionPrejudicial = DB::select('SELECT IDArea, descripcionLarga FROM areas WHERE nombreArea = \'Mediacion Prejudicial\' ');
        
        $arreglo_areas = array();
        foreach($areasEspecialistas as &$area){

            $abogado = new Abogado();
            $abogado->nombre = $area->nombre;
            $abogado->apellido = $area->apellido;
            $abogado->telefono = $area->telefono;
            $abogado->email = $area->email;

            if (array_key_exists($area->nombreArea, $arreglo_areas)){
                $arreglo_viejo = $arreglo_areas[$area->nombreArea]['abogados'];
                array_push($arreglo_viejo, $abogado);
                $arreglo_abogados = $arreglo_viejo;
            } else {
                $arreglo_abogados = array();
                array_push($arreglo_abogados, $abogado);
                $arreglo_general = array();
                $arreglo_general['IDArea'] = $area->IDArea;
                $arreglo_general['descripcionLarga'] = $area->descripcionLarga; 
            }
            $arreglo_general['abogados'] = $arreglo_abogados; 
            $arreglo_areas[$area->nombreArea] = $arreglo_general;
        }
        $arreglo_areas['Mediacion Prejudicial'] = array('IDArea' => $mediacionPrejudicial[0]->IDArea, 'descripcionLarga' => $mediacionPrejudicial[0]->descripcionLarga, 'abogados' => array());

        return view('especialistas', ['especialistas' => $especialistas, 'areas' => $arreglo_areas, 'page' => 'especialistas']);
    }
}
