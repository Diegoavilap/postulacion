<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_documento');
            $table->integer('municipio_expedicion_documento');
            $table->string('apellido_1');
            $table->string('apellido_2')->nullable();
            $table->string('nombre_1');
            $table->string('nombre_2')->nullable();
            $table->string('direccion_residencia');
            $table->string('telefono');
            $table->integer('municipio_residencia');
            $table->date('fecha_nacimiento');
            $table->integer('municipio_nacimiento');
            $table->enum('genero',['M','F']);
            $table->integer('ultimo_municipio_expulsor')->nullable();
            $table->integer('zona');
            $table->boolean('madre_cabeza_familia');
            $table->boolean('veteranos_fuerza_publica');
            $table->boolean('heroes_nacion');

            //laves foraneas

            $table->integer('tipo_documento_id')->unsigned();
            $table->foreign('tipo_documento_id')->references('id')->on('tipos_documentos');
            
            $table->integer('estrato_id')->unsigned();
            $table->foreign('estrato_id')->references('id')->on('estratos');
            
            $table->integer('sisben_id')->unsigned();
            $table->foreign('sisben_id')->references('id')->on('sisben');

            $table->integer('poblacion_victima_id')->unsigned();
            $table->foreign('poblacion_victima_id')->references('id')->on('poblaciones_victimas');
            
            $table->integer('tipo_discapacidad_id')->unsigned();
            $table->foreign('tipo_discapacidad_id')->references('id')->on('tipos_discapacidades');
            
            $table->integer('capacidad_excepcional_id')->unsigned();
            $table->foreign('capacidad_excepcional_id')->references('id')->on('tipos_discapacidades');
            
            $table->integer('etnia_id')->unsigned();
            $table->foreign('etnia_id')->references('id')->on('etnias');
            
            $table->integer('resguardo_id')->unsigned()->nullable();
            $table->foreign('resguardo_id')->references('id')->on('resguardos');
            
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
        Schema::dropIfExists('alumnos');
    }
}
