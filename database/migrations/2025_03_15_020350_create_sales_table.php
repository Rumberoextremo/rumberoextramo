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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ally_id')->constrained('allies')->onDelete('cascade'); // Relación con la tabla allies
            $table->decimal('monto', 10, 2); // Monto de la venta
            $table->decimal('gasto', 10, 2)->nullable(); // Gasto asociado a la venta
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
