<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfiliadosTable extends Migration
{
    public function up()
    {
        Schema::create('afiliados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('documento_identidad');
            $table->string('edad');
            $table->string('email')->unique();
            $table->string('telefono', 15);
            $table->string('direccion');
            $table->text('mensaje');
            $table->timestamps(); // Agrega created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('afiliados');
    }
};
