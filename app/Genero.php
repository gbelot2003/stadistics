<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'generos';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agredidos(){
        return $this->hasMany('App/Agredido', 'generos_id');
    }
}
