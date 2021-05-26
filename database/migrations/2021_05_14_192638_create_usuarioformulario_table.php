<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioformularioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarioformulario', function(Blueprint $table){
            $table->increments('id');
          //  $table->integer('usuario_id');
         //   $table->integer('formulario_id');
            $table->boolean('respondido');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarioformulario');
    }
}
