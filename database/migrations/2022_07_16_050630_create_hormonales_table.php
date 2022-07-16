<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHormonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hormonales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->integer('edad');
            $table->string('dni', 15);
            $table->enum('genero', array('femenino', 'masculino'));
            $table->string('ciudad',100);
            $table->string('telefono',8)->nullable();
            $table->string('tipoExamen');
            $table->integer('precio');
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
        Schema::dropIfExists('hormonales');
    }
}