<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Agresor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'agresors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['alertas_id', 'name', 'tipoagresors_id', 'estadojudicial_id'];

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
     * Relationship with Tipoagresor
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoagresor()
    {
        return  $this->belongsTo('App\Tipoagresors', 'tipoagresors_id', 'id');
    }

    /**
     *
     *
     * @param $query
     * @param $years
     */
    public function scopeTypeByAgresor($query, $years)
    {
        $query->select('tipoagresors.id', 'tipoagresors.tipoagresor', DB::raw('Count(agresors.tipoagresors_id) as contador'))
            ->Join('alertas', 'alertas.id', '=', 'agresors.id')
            ->Join('tipoagresors', 'agresors.tipoagresors_id', '=', 'tipoagresors.id')
            ->where('alertas.year', '=', $years)
            ->where('alertas.published_state', '=', 1)
            ->groupBy('tipoagresors.tipoagresor');
    }
}
