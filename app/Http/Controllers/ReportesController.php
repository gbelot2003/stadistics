<?php

namespace App\Http\Controllers;

use App\Agredido;
use App\Agresion;
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
        return $response = Agredido::sujetoAgredido($year)->get();
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
        return $response = Agredido::agredidosGender($yers)->get();
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
        return $response = Agredido::agredidosByMedia($years)->get();
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
        return $response = Agredido::typeOfMedia($years)->get();
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
        return $response = Agresor::typeByAgresor($years)->get();
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
        return $response = Agredido::agresonesDirectas($years, 1)->get();
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
        return $response = Agredido::agresonesDirectas($years, 2)->get();
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
        return $response = Agredido::agresionesByCatId($years, $catId)->get();
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
        return $response = Agredido::agredidosByDepartment($years)->get();
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
        return $response = Agredido::agredidosByMonth($years)->get();
    }

    /**
     * Resultados en Landing Page
     *
     * @route "api/reportes/mainpage/{year}"
     *
     * @param $year
     * @return array
     */
    public function dataMainPage($year)
    {
        $location = Agredido::agredidosByDepartment($year)->get();

        $totalAlertas = Alerta::where('year', '=', $year)
            ->where('published_state', '=', 1)
            ->count();

        $totalAgresion = Agredido::join('alertas', 'alertas.id', '=', 'agredidos.alertas_id')
            ->where('alertas.year', '=', $year)
            ->where('published_state', '=', 1)
            ->count();

        $totalAsesinatos = Agredido::AgresioneAsesitantos($year)->first();

        $maxDepartamentos = Agredido::AgredidosByDepartmentMax($year)->first();

        $maxMeses = Agredido::AgredidosByMonthMax($year)->first();

        return $data = [
            'alertas' => $totalAlertas,
            'agresiones' => $totalAgresion,
            'departamentos' => $location,
            'asesinatos' => $totalAsesinatos,
            'maxDepartamento' => $maxDepartamentos,
            'maxMeses'  => $maxMeses
        ];

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
        return $response = Agredido::sujetoAgredidoTest()->get();
    }

}
