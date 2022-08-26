<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFgProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fg_productos', function (Blueprint $table) {
            $table->id();
            $table->integer('seccion_id');
            $table->integer('categoria_id');
            $table->string('codigo');
            $table->string('descripcion');
            $table->string('diseno');
            $table->string('banda');
            $table->string('aplicacion');
            $table->tinyInteger('status');
            $table->double('precio', 8, 2);
            $table->string('comentario');
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
        Schema::dropIfExists('fg_productos');
    }
}
