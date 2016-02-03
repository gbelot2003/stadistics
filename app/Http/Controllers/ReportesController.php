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

    public function setYears()
    {
        return $years = Agredido::years()->get();
    }

    /**
     * @param $year
     * @return array
     */
    public function tipoSujetoAgredido($year){
        $response = Agredido::sujetoAgredido($year)->get();
        return $response;
    }
}
