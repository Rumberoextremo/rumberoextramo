<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAliadosTable extends Migration
{
    public function up()
    {
        Schema::create('aliados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->integer('edad');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->string('direccion');
            $table->text('mensaje');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aliados');
    }
};
