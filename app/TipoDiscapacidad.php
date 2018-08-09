<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDiscapacidad extends Model
{
    protected $table = "tipos_discapacidades";

    protected $fillable = ['descripcion'];

    
}
