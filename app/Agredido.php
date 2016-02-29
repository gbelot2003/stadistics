<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Agredido extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'agredidos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['alertas_id', 'name', 'generos_id', 'medios_id', 'tiposujetoagredidos_id', 'agresions_id'];

    /**
     * Relationship with Alertas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alertas()
    {
        return  $this->belongsTo('App\Alerta', 'alertas_id', 'id');
    }

    /**
     * Relationship with Genero
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function generos()
    {
        return $this->belongsTo('App\Genero', 'generos_id', 'id');
    }

    /**
     * Relationship with Tiposujetoagredido
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tiposujetoagredido()
    {
        return  $this->belongsTo('App\Tiposujetoagredido', 'tiposujetoagredidos_id', 'id');
    }

    /**
     * Relationship with Medio
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipomedio()
    {
        return $this->belongsTo('App\Tiposistema', 'medios_id', 'id');
    }

    /**
     * Relationship with Agresion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agresiones()
    {
        return $this->belongsTo('App\Agresion', 'agresions_id', 'id');
    }

    /**
     *
     *
     * @param $query
     */
    public function scopeYears($query)
    {
        $query->Join('alertas', 'agredidos.alertas_id', '=', 'alertas.id')
            ->where('published_state', '=', 1)
            ->select('alertas.year')
            ->where('alertas.year', '!=', 2016)
            ->where('alertas.year', '!=', 2010)
            ->where('alertas.year', '!=', 2011)
            ->GroupBy('alertas.year')
            ->orderBy('alertas.year', 'DESC');
    }

    /**
     * Consulta por Sujeto Agredido
     *
     * @param $query
     * @param $years
     */
    public function scopeSujetoAgredido($query, $years)
    {
        $query->select('tiposujetoagredidos.id as sid', 'tiposujetoagredidos.tiposujetoagredido', DB::raw('Count(agredidos.id) as total'))
            ->Join('alertas', 'agredidos.alertas_id', '=', 'alertas.id')
            ->Join('tiposujetoagredidos', 'agredidos.tiposujetoagredidos_id', '=', 'tiposujetoagredidos.id')
            ->where('alertas.year', '=', $years)
            ->where('alertas.published_state', '=', 1)
            ->GroupBy('agredidos.tiposujetoagredidos_id');
    }

    /**
     * Consulta de Sujetos agredidos por Genero
     *
     * @param $query
     * @param $years
     */
    public function scopeAgredidosGender($query, $years)
    {
        $male = DB::raw('SUM(IF(agredidos.generos_id = 1, 1, 0)) as male');
        $female = DB::raw('SUM(IF(agredidos.generos_id = 2, 1, 0)) as female');
        $lgtbi = DB::raw('SUM(IF(agredidos.generos_id = 3, 1, 0)) as lgtbi');
        $none = DB::raw('SUM(IF(agredidos.generos_id = 4, 1, 0)) as none');

        $query->select('tiposujetoagredidos.id as sid', 'tiposujetoagredidos.tiposujetoagredido', $male, $female, $lgtbi, $none)
            ->Join('tiposujetoagredidos', 'tiposujetoagredidos.id', '=', 'agredidos.tiposujetoagredidos_id')
            ->Join('alertas', 'alertas.id', '=', 'agredidos.id')
            ->where('alertas.year', '=', $years)
            ->where('alertas.published_date', '!=', '2016')
            ->where('alertas.published_state', '=', 1)

            ->groupBy('agredidos.tiposujetoagredidos_id');
    }

    /***
     * Consulta de agredidos por Medio
     *
     * @param $query
     * @param $years
     */
    public function scopeAgredidosByMedia($query, $years)
    {
        $query->select('agredidos.medios as medio', 'agredidos.id as sid', DB::raw('Count(agredidos.id) as contador'))
            ->Join('alertas', 'alertas.id', '=', 'agredidos.id')
            ->where('alertas.year', '=', $years)
            ->where('alertas.published_state', '=', 1)
            ->groupBy('agredidos.medios');
    }

    /**
     * Consulta de agredidos por Tipo de Medio o Sistema
     *
     * @param $query
     * @param $years
     */
    public function scopeTypeOfMedia($query, $years)
    {
        $query->select('agredidos.medios_id as medioId', 'tiposistemas.tiposistema as medio', 'agredidos.id as id', DB::raw('Count(agredidos.id) AS contador'))
            ->Join('alertas', 'alertas.id', '=', 'agredidos.id')
            ->Join('tiposistemas', 'agredidos.medios_id', '=', 'tiposistemas.id')
            ->where('alertas.year', '=', $years)
            ->where('alertas.published_state', '=', 1)
            ->groupBy('agredidos.medios_id');
    }

    /**
     * Consulta por Agresiones segun Tipo
     *
     * @param $query
     * @param $years
     * @param $type
     */
    public function scopeAgresonesDirectas($query, $years, $type)
    {
        $query->select('agresioncategorias.id as catId', 'agresioncategorias.agresioncategoria as categoria', DB::raw('Count(agredidos.id) as counter'))
            ->Join('alertas', 'alertas.id', '=', 'agredidos.id')
            ->Join('agresions', 'agredidos.agresions_id', '=', 'agresions.id')
            ->Join('agresioncategorias', 'agresions.agresioncategorias_id', '=', 'agresioncategorias.id')
            ->where('alertas.year', '=', $years)
            ->where('alertas.published_state', '=', 1)
            ->where('agresioncategorias.tipoagresion_id', '=', $type)
            ->groupBy('agresioncategorias.id', 'agresioncategorias.agresioncategoria')
            ->orderBy('agresioncategorias.id');
    }

    /**
     * Sub Consulta de Agresiones segun Categoria
     *
     * @param $query
     * @param $years
     * @param $catId
     */
    public function scopeAgresionesByCatId($query, $years, $catId)
    {
        $query->select('agredidos.agresions_id as id', 'agresions.agresion as agresion', DB::raw('Count(agredidos.agresions_id) as counter'))
            ->Join('alertas', 'alertas.id', '=', 'agredidos.id')
            ->Join('agresions', 'agredidos.agresions_id', '=', 'agresions.id')
            ->Join('agresioncategorias', 'agresions.agresioncategorias_id', '=', 'agresioncategorias.id')
            ->where('alertas.year', '=', $years)
            ->where('agresions.agresioncategorias_id', '=', $catId)
            ->where('alertas.published_state', '=', 1);
    }

    /**
     * Consulta de Agresiones por Departamentos
     *
     * @param $query
     * @param $years
     */
    public function scopeAgredidosByDepartment($query, $years)
    {
        $query->select('departamentos.zona as zona', 'departamentos.departamento as departamento', 'departamentos.id as id', DB::raw('Count(alertas.departamentos_id) AS contador'))
            ->Join('alertas', 'alertas.id', '=', 'agredidos.id')
            ->Join('departamentos', 'alertas.departamentos_id', '=', 'departamentos.id')
            ->where('alertas.year', '=', $years)
            ->where('alertas.published_state', '=', 1)
            ->orderBy('departamentos.id', 'ASC')
            ->groupBy('departamentos.departamento');
    }

    /**
     * Consulta de Agresiones por Mes
     *
     * @param $query
     * @param $years
     */
    public function scopeAgredidosByMonth($query, $years)
    {
        $query->select('mes.id', 'mes.mes as mes', DB::raw('Count(alertas.mes_id) as contador'))
            ->Join('alertas', 'alertas.id', '=', 'agredidos.id')
            ->Join('mes', 'alertas.mes_id', '=', 'mes.id')
            ->where('alertas.year', '=', $years)
            ->where('alertas.published_state', '=', 1)
            ->orderBy('mes.id', 'ASC')
            ->groupBy('mes.mes');
    }

    /**
     * Consulta por Sujeto Agredido
     *
     * @param $query
     * @param $years
     */

    /**
     * Prueba de Consulta Tipo Sujeto Agredido
     *
     * @param $query
     */
    public function scopeSujetoAgredidoTest($query)
    {
        $query->select('alertas.year as name', 'tiposujetoagredidos.tiposujetoagredido as x', DB::raw('Count(agredidos.id) as y'))
            ->Join('alertas', 'agredidos.alertas_id', '=', 'alertas.id')
            ->Join('tiposujetoagredidos', 'agredidos.tiposujetoagredidos_id', '=', 'tiposujetoagredidos.id')
            ->where('alertas.published_state', '=', 1)
            ->GroupBy('alertas.year', 'agredidos.tiposujetoagredidos_id');
    }
}