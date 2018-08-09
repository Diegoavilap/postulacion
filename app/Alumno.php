<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = "alumnos";

    protected $fillable = [
                            'numero_documento',
                            'municipio_expedicion_documento',
                            'apellido_1',
                            'apellido_2',
                            'nombre_1',
                            'nombre_2',
                            'direccion_residencia',
                            'telefono',
                            'municipio_residencia',
                            'fecha_nacimiento',
                            'municipio_nacimiento',
                            'genero',
                            'ultimo_municipio_expulsor',
                            'zona',
                            'madre_cabeza_familia',
                            'veteranos_fuerza_publica',
                            'heroes_nacion',
                            'tipo_documento_id',
                            'estrato_id',
                            'sisben_id',
                            'poblacion_victima_id',
                            'tipo_discapacidad_id',
                            'capacidad_excepcional_id',
                            'etnia_id',
                            'resguardo_id',
                          ];

    //Relaciones
    public function tipo_documento()
    {
        return $this->belongsTo('App\TipoDocumento');
    }

    public function estrato()
    {
        return $this->belongsTo('App\Estrato');
    }
    public function sisben()
    {
        return $this->belongsTo('App\Sisben');
    }

    public function poblacion_victima()
    {
        return $this->belongsTo('App\PoblacionVictima');
    }

    public function tipo_discapacidad()
    {
        return $this->belongsTo('App\TipoDiscapacidad');
    }
    public function capacidad_especial()
    {
        return $this->belongsTo('App\CapacidadEspecial');
    }
    public function etnia()
    {
        return $this->belongsTo('App\Etnia');
    }
    public function resguardo()
    {
        return $this->belongsTo('App\Resguardo');
    }

}
