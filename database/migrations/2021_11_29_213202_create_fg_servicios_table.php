<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFgServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fg_servicios', function (Blueprint $table) {
            $table->id();
            $table->integer('cliente_id');
            $table->integer('asesor_id');
            $table->string('oficina');
            $table->integer('master');
            $table->integer('item');            
            $table->integer('producto_id')->nulleable();
            $table->string('medida');
            $table->string('serie');
            $table->string('marca');
            $table->string('modelo');
            $table->string('estado');
            $table->string('ubicacion');
            $table->tinyInteger('status');
            $table->date('fecha_recepcion');
            $table->date('fecha_planta')->nulleable();
            $table->integer('ingreso_id')->nulleable();
            $table->integer('egreso_id')->nulleable();
            $table->text('comentario');
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
        Schema::dropIfExists('fg_servicios');
    }
}
