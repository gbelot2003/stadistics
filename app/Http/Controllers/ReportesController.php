<?php

namespace App\Http\Controllers;

use App\Agredido;
use App\Alerta;
use App\Tiposujetoagredido;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{
    /**
     * @param $years
     * @return array
     */
    public function tipoSujetoAgredido($year){
        $years = Agredido::years()->get();
        $response = Agredido::sujetoAgredido($year)->get();

        return $response = array(
            'data' => $response,
            'year' => $years
        );

    }
}
