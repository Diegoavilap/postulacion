<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table = "instituciones";

    protected $fillable = ['codigo_dane', 'codigo_dane_antiguo', 'consecutivo_sede', 'nombre'];

    public function municipio()
    {
        return $this->belongsTo('App\Municipio');
    }

        
}
