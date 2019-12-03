<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoriaController extends Controller
{
    public function getHistoriaView(){
      	return view('historia')->with(["page" => "historia"]);;
    }
}
