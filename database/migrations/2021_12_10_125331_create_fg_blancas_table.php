<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFgBlancasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fg_blancas', function (Blueprint $table) {
            $table->id();
            $table->string('oficina');
            $table->unsignedBigInteger('producto_id');
            $table->string('medida');
            $table->string('marca');
            $table->integer('serie');
            $table->string('ubicacion');
            $table->tinyInteger('status');
            $table->date('ingreso_fecha');
            $table->string('ingreso_tipo');
            $table->string('ingreso_numero');
            $table->string('ingreso_origen');
            $table->text('ingreso_comentario');
            $table->date('egreso_fecha')->nulleable();
            $table->string('egreso_tipo')->nulleable();
            $table->string('egreso_numero')->nulleable();
            $table->string('egreso_responsable')->nulleable();
            $table->string('egreso_destino')->nulleable();
            $table->text('egreso_comentario')->nulleable();
            $table->unsignedBigInteger('comentario_id')->nulleable();
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
        Schema::dropIfExists('fg_blancas');
    }
}
