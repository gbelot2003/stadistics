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
     * @param $query
     * @param $years
     */
    public function scopeSujetoAgredido($query, $years)
    {
        $query->select('tiposujetoagredidos.id as sid', 'tiposujetoagredidos.tiposujetoagredido', DB::raw('Count(agredidos.id) as total'))
            ->Join('alertas', 'agredidos.alertas_id', '=', 'alertas.id')
            ->Join('tiposujetoagredidos', 'agredidos.tiposujetoagredidos_id', '=', 'tiposujetoagredidos.id')
            ->where('alertas.year', '=', $years)
            ->GroupBy('agredidos.tiposujetoagredidos_id');
    }

    /**
     * @param $query
     */
    public function scopeAgresionesByYear($query){
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

}