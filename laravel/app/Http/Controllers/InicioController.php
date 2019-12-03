<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InicioController extends Controller
{
    public function getInicioView(){
    	$arregloAreas = DB::select('SELECT nombreArea, descripcionCorta FROM areas ORDER BY orden');
    	return view('inicio', ['areas' => $arregloAreas])->with(["page" => "home"]);
    }

}
