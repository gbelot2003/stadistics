<?php

namespace App\Http\Controllers;

use App\Alerta;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ListadoAlertasController extends Controller{

    /**
     * Recuperar listado limitado de 20 alertas
     *
     * @route  "api/alertas/listado"
     *
     * @return mixed
     */
    public function listado(){
        $response = Alerta::limit(20)->orderBy('id', 'DESC')->get();
        return $response;
    }

}