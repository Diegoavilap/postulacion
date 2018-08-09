<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnexosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anexos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anio');
            $table->boolean('proviene_sector_privado');
            $table->boolean('proviene_otro_municipio');
            $table->string('institucion_bienestar_origen');
            $table->integer('jornada');
            $table->integer('caracter');
            $table->string('grupo_curso');
            $table->boolean('subsidiado');
            $table->boolean('repitente');
            $table->boolean('nuevo');
            $table->string('situacion_academica_anio_anteior');
            $table->string('condicion_anio_anterior');

            //laves foraneas

            $table->integer('especialidad_id')->unsigned();
            $table->foreign('especialidad_id')->references('id')->on('especialidades');
            
            $table->integer('grado_id')->unsigned();
            $table->foreign('grado_id')->references('id')->on('grados');
            
            $table->integer('metodologia_id')->unsigned();
            $table->foreign('metodologia_id')->references('id')->on('metodologias');

            $table->integer('alumno_id')->unsigned();
            $table->foreign('alumno_id')->references('id')->on('alumnos');

            $table->integer('institucion_id')->unsigned();
            $table->foreign('institucion_id')->references('id')->on('instituciones');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anexos');
    }
}
