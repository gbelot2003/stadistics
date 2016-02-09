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
            ->GroupBy('alertas.year')
            ->orderBy('alertas.year', 'DESC');
    }

    /**
     *
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
     *
     *
     * @param $query
     */
    public function scopeAgresionesByYear($query)
    {
        $ddiez = DB::raw('SUM(IF(alertas.year = 2010, 1, 0)) ddiez');
        $donce = DB::raw('SUM(IF(alertas.year = 2011, 1, 0)) as donce');
        $ddoce = DB::raw('SUM(IF(alertas.year = 2012, 1, 0)) as ddoce');
        $dtrece = DB::raw('SUM(IF(alertas.year = 2013, 1, 0)) as dtrece');
        $dcatroce = DB::raw('SUM(IF(alertas.year = 2014, 1, 0)) as dcatroce');
        $dquince = DB::raw('SUM(IF(alertas.year = 2014, 1, 0)) as dquince');

        $query->select('agresions.agresion', $ddiez, $donce, $ddoce,$dtrece, $dcatroce, $dquince)
            ->Join('agresions', 'agredidos.agresions_id', '=', 'agresions.id')
            ->Join('alertas', 'alertas.id', '=', 'agredidos.alertas_id')
            ->groupBy('agresions.agresion')
            ->where('alertas.published_state', '=', 1);
    }

    /**
     *
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
            ->where('alertas.published_state', '=', 1)
            ->groupBy('agredidos.tiposujetoagredidos_id');
    }

    /***
     *
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
     *
     *
     * @param $query
     * @param $years
     */
    public function scopeTypeOfMedia($query, $years)
    {
        $query->select('agredidos.medios_id as medioId', 'tiposistemas.tiposistema as medio', 'agredidos.id as id', DB::raw('Count(agredidos.id) AS Contador'))
            ->Join('alertas', 'alertas.id', '=', 'agredidos.id')
            ->Join('tiposistemas', 'agredidos.medios_id', '=', 'tiposistemas.id')
            ->where('alertas.year', '=', $years)
            ->where('alertas.published_state', '=', 1)
            ->groupBy('agredidos.medios_id');
    }

    /**
     *
     *
     * @param $query
     * @param $years
     */
    public function scopeAgredidosByDepartment($query, $years)
    {
        $query->select()
            ->groupBy();
    }

    public function scopeAgredidosByMonth($query, $years)
    {

    }

}