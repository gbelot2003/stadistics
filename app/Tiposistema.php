<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiposistema extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tiposistemas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tiposistema'];

    /**
     * Relationship with Agredido
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agredidos(){
        return $this->hasMany('App/Agredido', 'medios_id');
    }
}
