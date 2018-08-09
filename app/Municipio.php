<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = "municipios";

    protected $fillable = ['nombre_municipio'];


    //Relaciones
    public function departamento()
    {
        return $this->belongsTo('App\Departamento');
    }
}
