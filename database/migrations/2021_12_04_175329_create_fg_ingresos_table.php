<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFgIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fg_ingresos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('tipo');
            $table->string('estado');
            $table->string('documento_tipo');
            $table->string('documento_numero');
            $table->string('oficina');
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
        Schema::dropIfExists('fg_ingresos');
    }
}
