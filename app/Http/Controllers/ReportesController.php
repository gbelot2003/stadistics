<?php

namespace App\Http\Controllers;

use App\Agredido;
use App\Agresor;
use App\Alerta;
use App\Tiposujetoagredido;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{

    /**
     * Recuperar años desde base de datos
     *
     * @return mixed
     */
    public function setYears()
    {
        return $years = Agredido::years()->get();
    }

    /**
     * Reporte de agresiones por Tipo de Sujeto Agredido
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
     * Reporte de agresiones por Genero
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
     * Reporte de agresiones por Medio
     *
     * @param $years
     * @return mixed
     */
    public function medioSistema($years)
    {
        $response = Agredido::agredidosByMedia($years)->get();
        return $response;
    }

    /**
     * Reporte de Agresiones por Tipo o Sistemea
     *
     * @param $years
     * @return mixed
     */
    public function tipoMedioSistema($years)
    {
        $response = Agredido::typeOfMedia($years)->get();
        return $response;
    }

    /**
     * Reporte por Tipo de Agresor
     *
     * @param $years
     * @return mixed
     */
    public function tipoByAgresor($years)
    {
        $response = Agresor::typeByAgresor($years)->get();
        return $response;
    }

    /**
     * Reporte por Agresiones Directas
     *
     * @param $years
     * @return mixed
     */
    public function agresionDirecta($years)
    {
        $response = Agredido::agresonesDirectas($years, 1)->get();
        return $response;
    }

    /**
     * Reporte por Agresiones Indirectas
     *
     * @param $years
     * @return mixed
     */
    public function agresionIndirecta($years)
    {
        $response = Agredido::agresonesDirectas($years, 2)->get();
        return $response;
    }

    /**
     * Resultado de Agresiones por Categoria y año
     *
     * @param $years
     * @param $catId
     * @return mixed
     */
    public function agresionesByCategory($years, $catId)
    {
        $response = Agredido::agresionesByCatId($years, $catId)->get();
        return $response;
    }

    /**
     * Reporte de agresiones por Departamento
     *
     * @param $years
     * @return mixed
     */
    public function dataByDepartamentos($years)
    {
        $response = Agredido::agredidosByDepartment($years)->get();
        return $response;
    }

    /**
     * Reporte de agresiones por Mes
     *
     * @param $years
     * @return mixed
     */
    public function dataByMes($years)
    {
        $response = Agredido::agredidosByMonth($years)->get();
        return $response;
    }


    /**
     * Prueba Tipo Sujeto Agredio
     *
     * @param $years
     * @return mixed
     */
    public function tipoSujetoAgredidoTest()
    {
        $response = Agredido::sujetoAgredidoTest()->get();
        return $response;
    }

}
