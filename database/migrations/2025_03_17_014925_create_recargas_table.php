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
        Schema::create('recargas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula', 20);
            $table->string('telefono', 15);
            $table->string('banco_emisor')->nullable();
            $table->string('banco_receptor')->nullable();
            $table->string('cuenta', 20)->nullable();
            $table->decimal('cantidad', 10, 2)->nullable();
            $table->string('nombre_usuario');
            $table->date('fecha')->nullable();

            // Nuevos campos
            $table->string('numero_tarjeta', 16)->nullable(); // Número de tarjeta
            $table->decimal('monto', 10, 2)->nullable(); // Monto a recargar
            $table->string('fecha_vencimiento', 5)->nullable(); // Fecha de vencimiento (MM/AA)
            $table->string('codigo_seguridad', 4)->nullable(); // Código de seguridad (CVC)
            $table->timestamp('fecha_actual')->nullable(); // Fecha y hora actual

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recargas');
    }
};
