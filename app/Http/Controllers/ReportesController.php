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
     * @route "api/reportes/years"
     *
     * @return mixed
     */
    public function setYears()
    {
        return $years = Agredido::years()->get();
    }

    /**
     * Reporte de agresiones porTipo de Sujeto Agredidos
     *
     * @route "api/reportes/tipo-sujeto-agredido/{year}"
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
     * @route "api/reportes/sujeto-agredido-por-genero/{year}"
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
     * @route "api/reportes/medio-o-sistema/{year}"
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
     * @route "api/reportes/tipo-de-medio/{year}"
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
     * @route "api/reportes/tipo-de-agresor/{year}"
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
     * @route "api/reportes/agresion-directa/{year}"
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
     * @route "api/reportes/agresion-indirecta/{year}"
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
     * @route "api/reportes/agresiones-por-categoria/{year}/{catId}"
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
     * @route "api/reportes/agredidos-por-departamento/{year}"
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
     * @route "api/reportes/agredidos-por-mes/{year}"
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
     * Test Action 1
     *
     * @route "api/reportes/tipo-sujeto-agredido-test"
     *
     * @return mixed
     */
    public function tipoSujetoAgredidoTest()
    {
        $response = Agredido::sujetoAgredidoTest()->get();
        return $response;
    }

}
