<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFgInformesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fg_informes', function (Blueprint $table) {
            $table->id();
            $table->string('oficina');
            $table->date('fecha_recepcion');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('asesor_id');
            $table->string('medida');
            $table->string('diseno');
            $table->string('marca');
            $table->integer('serie');
            $table->string('labrado_original');
            $table->string('labrado_remanente');
            $table->string('desgaste');
            $table->string('imagen_1');
            $table->string('imagen_2');
            $table->string('imagen_3');
            $table->string('imagen_4');
            $table->text('dictamen')->nulleable();
            $table->string('usuario_dictamen')->nulleable();
            $table->text('texto_garantia');
            $table->date('fecha_informe')->nulleable();
            $table->string('usuario_crea');
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
        Schema::dropIfExists('fg_informes');
    }
}
