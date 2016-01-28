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

    public function tipoSujetoAgredido(){

        $years = Agredido::years()->get();
        $response = Agredido::agredidosByYear()->get();

        return $response = array(
            'years' => $years,
            'data' => $response
        );
    }
}
