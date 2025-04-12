<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosMovilesTable extends Migration
{
    public function up()
    {
        Schema::create('pagos_moviles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('direccion');
            $table->string('banco_emisor');
            $table->string('banco_receptor');
            $table->string('telefono_afiliado');
            $table->decimal('cantidad', 10, 2);
            $table->string('nombre_usuario');
            $table->date('fecha');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pagos_moviles');
    }
}
