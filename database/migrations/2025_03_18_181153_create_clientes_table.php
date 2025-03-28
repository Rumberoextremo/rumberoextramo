<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); // ID del cliente
            $table->string('nombre'); // Nombre del cliente
            $table->string('email')->unique(); // Email del cliente
            $table->string('telefono')->nullable(); // Teléfono del cliente
            $table->string('direccion')->nullable(); // Dirección del cliente
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
