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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Crea una columna ID autoincremental
            $table->string('nombre'); // Nombre del producto
            $table->decimal('precio', 10, 2); // Precio del producto
            $table->text('descripcion')->nullable(); // Descripción del producto
            $table->unsignedTinyInteger('porcentaje_descuento')->default(0); // Descuento en porcentaje (0-100)
            $table->timestamps(); // Fechas de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
