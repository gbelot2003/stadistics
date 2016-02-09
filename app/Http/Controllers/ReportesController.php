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
     * recuperar años desde base de datos
     *
     * @return mixed
     */
    public function setYears()
    {
        return $years = Agredido::years()->get();
    }

    /**
     *
     *
     * @param $year
     * @return array
     */
    public function tipoSujetoAgredido($year)
    {
        $response = Agredido::sujetoAgredido($year)->get();
        return $response;
    }

    /**
     *
     *
     * @param $yers
     * @return mixed
     */
    public function tipoAgredidoPorGenero($yers)
    {
        $response = Agredido::agredidosGender($yers)->get();
        return $response;
    }

    /**
     *
     *
     * @param $years
     * @return mixed
     */
    public function medioSistema($years)
    {
        $response = Agredido::agredidosPorMedio($years)->get();
        return $response;
    }


    public function tipoMedioSistema($years)
    {

    }

    public function datosPorDepartamentos($years)
    {

    }

    public function datosPorMes($years)
    {

    }

}
