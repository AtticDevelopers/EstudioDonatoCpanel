<?php

namespace App\Http\Controllers\Helpers;

use Illuminate\Support\Facades\DB;

class DatabaseHelper
{
    public function selectAll($nombreTabla){
    	return DB::select('select * from '. $nombreTabla);
    }

    public function selectID($nombreTabla, $ID){
    	return DB::select('select * from ' . $nombreTabla . ' where idEspecialista = ' . $ID);
    }
}
