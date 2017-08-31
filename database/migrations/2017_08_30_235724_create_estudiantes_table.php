<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto');
            $table->string('nombres' , 50);
            $table->string('apellidos' , 50);
            $table->dateTime('cumpleanos');
            $table->enum('sexo', ['hombre' , 'mujer'])->default('hombre');
            $table->integer('libro');
            $table->integer('folio');
            $table->integer('acta');
            $table->string('nacionalidad' , 50);
            $table->string('grado' , 50);
            $table->string('direccion' , 100);
            $table->enum('condicion', ['activo' , 'inactivo'])->default('activo');
            $table->enum('tanda', ['manana' , 'tarde' , 'noche'])->default('manana');
            $table->string('telefono' , 50);
            $table->string('nombre_familiar', 50);

            $table->integer('periodo_academico_id')->unsigned();
            $table->foreign('periodo_academico_id')->references('id')->on('periodos_academicos');

            $table->integer('aula_id')->unsigned();
            $table->foreign('aula_id')->references('id')->on('aulas');

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
        Schema::dropIfExists('estudiantes');
    }
}
