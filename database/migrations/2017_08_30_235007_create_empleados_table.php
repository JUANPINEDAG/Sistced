<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto');
            $table->string('nombres' , 50);
            $table->string('apellidos', 50);
            $table->string('email', 100)->unique();
            $table->dateTime('cumpleanos');
            $table->enum('sexo', ['hombre', 'mujer'])->default('hombre');
            $table->string('identificacion', 25);
            $table->string('telefono', 30);
            $table->string('estado_civil');
        
            $table->string('nombre_materia', 30);

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('empleados');
    }
}
