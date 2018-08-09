<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anexo extends Model
{
    protected $table = "anexos";

    protected $fillable = [
                            'anio',
                            'proviene_sector_privado',
                            'proviene_otro_municipio',
                            'institucion_bienestar_origen',
                            'jornada',
                            'caracter',
                            'grupo_curso',
                            'subsidiado',
                            'repitente',
                            'nuevo',
                            'situacion_academica_anio_anteior',
                            'condicion_anio_anterior',
                            'especialidad_id',
                            'grado_id',
                            'metodologia_id',
                            'alumno_id',
                            'institucion_id'
                          ];

    //Relaciones
    public function alumno()
    {
        return $this->belongsTo('App\Alumno');
    }
    public function institucion()
    {
        return $this->belongsTo('App\Instituciones');
    }
    public function especialidad()
    {
        return $this->belongsTo('App\Especialidad');
    }
    public function grado()
    {
        return $this->belongsTo('App\Grado');
    }
    public function metodologia()
    {
        return $this->belongsTo('App\Metodologia');
    }
}
